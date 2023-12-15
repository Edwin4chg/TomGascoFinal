<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $photo;
    
    protected $rules = [
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10048',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('User') ])]);
        
        if($this->getPropertyValue('photo') and is_object($this->photo)) {
            $this->photo = $this->getPropertyValue('photo')->store('photos');
        }

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'photo' => $this->photo,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.user.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('User') ])]);
    }
}
