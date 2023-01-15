<?php

namespace App\Http\Livewire\Admin;

use App\CPU\Helpers;
use App\Models\Category as ModelsCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;

    public $paginationTheme = 'bootstrap';
    public $listeners = ['save', 'update', 'delete', 'setCategory', 'refreshCategory' => '$refresh'];
    public $title;
    protected $category;

    public $search;
    public $total_show = 10;

    public $name;
    public $category_id;
    public $type;
    public $type_list;

    protected $rulesUpdate = [
        'name' => 'required',
        'type' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Category name is required',
        'type.required' => 'Please select category type',
    ];

    public function render()
    {
        $this->category = ModelsCategory::where(function ($q) {
            $q->where('name', 'LIKE', '%'.$this->search.'%')
                ->orWhere('type', 'LIKE', '%'.$this->search.'%');
        })->paginate($this->total_show);

        $data['category'] = $this->category;

        return view('livewire.admin.category', $data);
    }

    public function mount($title)
    {
        $this->title = $title;
        $this->type_list = Helpers::getTypeContent();
    }

    public function setCategory($item)
    {
        $this->category_id = $item['id'];
        $this->name = $item['name'];
        $this->type = $item['type'];
    }

    public function resetInput()
    {
        $this->category_id = null;
        $this->name = null;
        $this->type = null;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'type' => 'required',
        ], [
            'name.required' => 'Category name is required',
            'type.required' => 'Category type is required',
        ]);

        $save = Modelscategory::updateOrCreate([
            'name' => $this->name,
            'type' => $this->type,
        ]);

        $this->resetInput();
        $this->emit('finishCategory', 1, 'Successfully added new Category!');
        $this->emit('refresh');
    }

    public function update()
    {
        $this->validate($this->rulesUpdate, $this->messages);
        $cabang = Modelscategory::find($this->category_id);
        if (!$cabang) {
            return session()->flash('fail', 'category tidak ditemukan');
        }

        $cabang->name = $this->name;
        $cabang->type = $this->type;

        $cabang->save();

        $this->resetInput();
        $this->emit('finishCategory', 1, 'Successfully update category!');
        $this->emit('refresh');

        return session()->flash('success', 'Category updated successfully!');
    }

    public function delete()
    {
        $cabang = Modelscategory::find($this->category_id);

        if (!$cabang) {
            return session()->flash('fail', 'Category not found!');
        }
        $name = $cabang->name;

        $cabang->delete();
        $this->emit('finishCabang', 1, 'Category deleted successfully!');
        $this->emit('refresh');

        return session()->flash('success', 'category '.$name.'\'s deleted successfully');
    }
}
