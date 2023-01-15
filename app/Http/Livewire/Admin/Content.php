<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Content as ModelsContent;
use App\Models\Hashtag;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Content extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $paginationTheme = 'bootstrap';
    public $listeners = ['save', 'update', 'delete', 'resetInput', 'setContent', 'refreshContent' => '$refresh'];

    protected $content;

    public $search;
    public $title;
    public $total_show = 10;

    public $title_content;
    public $category;
    public $image;
    public $photo;
    public $content_id;
    public $isi_content;
    public $isi;
    public $status = 1;
    public $hashtag = [];

    public $cat_list = [];
    public $has_list = [];

    protected $rulesUpdate = [
        'title_content' => 'required',
        'category' => 'required',
        'isi_content' => 'required',
    ];

    protected $messages = [
        'title_content.required' => 'Content title is required',
        'category.required' => 'Please select category',
        'isi_content.required' => 'Content description is required',
    ];

    public function render()
    {
        $this->content = ModelsContent::where(function ($q) {
            $q->where('title', 'LIKE', '%'.$this->search.'%')
                ->orWhere('content', 'LIKE', '%'.$this->search.'%')
                ->orWhere('category', 'LIKE', '%'.$this->search.'%');
        })->paginate($this->total_show);

        $data['content'] = $this->content;

        return view('livewire.admin.content', $data);
    }

    public function mount($title)
    {
        $this->title = $title;
        $this->cat_list = Category::get();
        $this->has_list = Hashtag::get();
    }

    public function setContent($item)
    {
        $this->content_id = $item['id'];
        $this->title_content = $item['title'];
        $this->photo = $item['image'];
        $this->category = $item['category'];
        $this->hashtag = json_decode($item['hashtag']);
        $this->isi_content = $item['content'];
        $this->isi = $item['content'];
    }

    public function resetInput()
    {
        $this->title_content = null;
        $this->category = null;
        $this->isi_content = null;
        $this->isi = null;
        $this->hashtag = [];
        $this->image = null;
    }

    public function save()
    {
        $this->validate([
            'title_content' => 'required',
            'category' => 'required',
            'isi_content' => 'required',
        ], [
            'title_content.required' => 'Content title is required',
            'category.required' => 'Please select category',
            'isi_content.required' => 'Content description is required',
        ]);
        $dir = 'content';

        $imgName = Carbon::now()->toDateString().'-'.uniqid().'.'.'png';
        $this->image->storeAs('public/'.$dir, $imgName);

        $save = ModelsContent::updateOrCreate([
            'title' => $this->title_content,
            'category' => $this->category,
            'hashtag' => $this->hashtag,
            'image' => 'storage/content/'.$imgName,
            'content' => $this->isi_content,
            'is_active' => 1,
        ]);

        $this->resetInput();
        $this->emit('finishContent', 1, 'Successfully added new Post/Journals!');
        $this->emit('refresh');
    }

    public function update()
    {
        $this->validate($this->rulesUpdate, $this->messages);
        $cabang = ModelsContent::find($this->content_id);
        if (!$cabang) {
            return session()->flash('fail', 'Content is not found');
        }

        $dir = 'content';

        if ($this->image != null) {
            $imgName = Carbon::now()->toDateString().'-'.uniqid().'.'.'png';
            $this->image->storeAs('public/'.$dir, $imgName);
            $cabang->image = 'storage/content/'.$imgName;
        }

        $cabang->title = $this->title_content;
        $cabang->category = $this->category;
        $cabang->content = $this->isi_content;
        $cabang->hashtag = json_encode($this->hashtag);

        $cabang->save();

        $this->resetInput();
        $this->emit('finishContent', 1, 'Successfully update Post/Journals!');
        $this->emit('refresh');

        return session()->flash('success', 'Post/Journals updated successfully!');
    }

    public function delete()
    {
        $cabang = ModelsContent::find($this->content_id);

        if (!$cabang) {
            return session()->flash('fail', 'Post/Journals not found!');
        }
        $name = $cabang->title;

        $cabang->delete();
        $this->emit('finishContent', 1, 'Post/Journals deleted successfully!');
        $this->emit('refresh');

        return session()->flash('success', 'Post/Journals '.$name.'\'s deleted successfully');
    }
}
