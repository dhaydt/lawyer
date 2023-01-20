<?php

namespace App\Http\Livewire\Admin;

use App\CPU\ImageManager;
use App\Models\Client as ModelsClient;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Client extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $paginationTheme = 'bootstrap';
    public $listeners = ['save', 'update', 'delete', 'resetInput', 'setClient', 'refreshClient' => '$refresh'];

    protected $client;

    public $search;
    public $title;
    public $total_show = 10;

    public $name;
    public $description;
    public $image;
    public $client_id;
    public $type = 'save';

    public $photo;

    protected $rulesUpdate = [
        'name' => 'required',
    ];

    protected $messages = [
        'name.required' => 'company name is required',
    ];

    public function render()
    {
        $this->client = ModelsClient::where(function ($q) {
            $q->where('name', 'LIKE', '%'.$this->search.'%')
                ->orWhere('description', 'LIKE', '%'.$this->search.'%');
        })->paginate($this->total_show);

        $data['client'] = $this->client;

        return view('livewire.admin.client', $data);
    }

    public function mount($title)
    {
        $this->title = $title;
    }

    public function setClient($item)
    {
        $this->client_id = $item['id'];
        $this->name = $item['name'];
        $this->photo = $item['img'];
        $this->description = $item['description'];
    }

    public function resetInput()
    {
        $this->name = null;
        $this->description = null;
        $this->image = null;
    }

    public function save()
    {
        if ($this->client_id != null) {
            $this->validate($this->rulesUpdate, $this->messages);
            $cabang = Modelsclient::find($this->client_id);
            if (!$cabang) {
                return session()->flash('fail', 'Company client is not found');
            }

            $dir = 'client';

            if ($this->image != null) {
                $imgName = Carbon::now()->toDateString().'-'.uniqid().'.'.'png';
                ImageManager::deleteImg($cabang->image);
                $this->image->storeAs('public/'.$dir, $imgName);
                $cabang->img = 'storage/client/'.$imgName;
            }

            $cabang->name = $this->name;
            $cabang->description = $this->description;

            $cabang->save();

            $this->resetInput();
            $this->emit('finishClient', 1, 'Successfully update Client Company!');
            $this->emit('refresh');

            return session()->flash('success', 'Client Company updated successfully!');
        }
        $this->validate([
            'name' => 'required',
        ], [
            'name.required' => 'company name is required',
        ]);
        $dir = 'client';

        $imgName = Carbon::now()->toDateString().'-'.uniqid().'.'.'png';
        if ($this->image != null) {
            $this->image->storeAs('public/'.$dir, $imgName);
        }

        $save = Modelsclient::updateOrCreate([
            'name' => $this->name,
            'description' => $this->description,
            'img' => 'storage/client/'.$imgName,
        ]);

        $this->resetInput();
        $this->emit('finishClient', 1, 'Successfully added new Client!');
        $this->emit('refresh');
    }

    public function update()
    {
        $this->validate($this->rulesUpdate, $this->messages);
        $cabang = Modelsclient::find($this->client_id);
        if (!$cabang) {
            return session()->flash('fail', 'Company client is not found');
        }

        $dir = 'client';

        if ($this->image != null) {
            $imgName = Carbon::now()->toDateString().'-'.uniqid().'.'.'png';
            ImageManager::deleteImg($cabang->image);
            $this->image->storeAs('public/'.$dir, $imgName);
            $cabang->img = 'storage/client/'.$imgName;
        }

        $cabang->name = $this->name;
        $cabang->description = $this->description;

        $cabang->save();

        $this->resetInput();
        $this->emit('finishClient', 1, 'Successfully update Client Company!');
        $this->emit('refresh');

        return session()->flash('success', 'Client Company updated successfully!');
    }

    public function delete()
    {
        $cabang = Modelsclient::find($this->client_id);

        if (!$cabang) {
            return session()->flash('fail', 'Client Company not found!');
        }
        $name = $cabang->title;
        ImageManager::deleteImg($cabang->image);

        $cabang->delete();
        $this->emit('finishClient', 1, 'Client Company deleted successfully!');
        $this->emit('refresh');

        return session()->flash('success', 'Company '.$name.'\'s deleted successfully');
    }
}
