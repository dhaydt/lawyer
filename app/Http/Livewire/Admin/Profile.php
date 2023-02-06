<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Profile extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    public $listeners = ['save', 'update', 'delete', 'resetInput', 'setProfile', 'refreshProfile' => '$refresh'];

    protected $profile;

    public $search;
    public $user_id;

    public $name;
    public $phone;
    public $email;
    public $password;
    public $status = 1;
    public $type = 'save';

    protected $rulesUpdate = [
        'phone' => 'required',
        'email' => 'required',
        'name' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Name is required',
        'email.required' => 'email is required',
        'phone.required' => 'Phone is required',
    ];

    public function render()
    {
        $this->profile = User::find(session()->get('user_id'));
        $this->user_id = $this->profile->id;

        $data['profile'] = $this->profile;

        return view('livewire.admin.profile', $data);
    }

    public function mount()
    {
    }

    public function setprofile($item)
    {
    }

    public function resetInput()
    {
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ], [
            'name.required' => 'name is required',
            'email.required' => 'email is required',
            'phone.required' => 'phone is required',
        ]);

        $save = User::find($this->user_id);

        $save->name = $this->name;
        $save->email = $this->email;
        $save->phone = $this->phone;

        $save->save();

            $this->emit('finishProfile', 1, 'Successfully update profile!');
        $this->emit('refresh');
    }
}
