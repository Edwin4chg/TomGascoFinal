<?php

namespace App\Http\Livewire\Admin\Newsletter;

use App\Models\Newsletter;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $newsletter;

    public $email;
    
    protected $rules = [
        'email' => 'required|email|unique:newsletters,email',        
    ];

    public function mount(Newsletter $Newsletter){
        $this->newsletter = $Newsletter;
        $this->email = $this->newsletter->email;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Newsletter') ]) ]);
        
        $this->newsletter->update([
            'email' => $this->email,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.newsletter.update', [
            'newsletter' => $this->newsletter
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Newsletter') ])]);
    }
}
