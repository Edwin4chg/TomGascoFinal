<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $user;

    public $name;
    public $email;
    public $password;
    public $photo;
    
    protected $rules = [
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10048',        
    ];

    public function mount(User $User){
        $this->user = $User;
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->password = $this->user->password;
        $this->photo = $this->user->photo;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('User') ]) ]);
        
        if($this->getPropertyValue('photo') and is_object($this->photo)) {
            $this->photo = $this->getPropertyValue('photo')->store('photos');
        }

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'photo' => $this->photo,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.user.update', [
            'user' => $this->user
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('User') ])]);
    }
}
