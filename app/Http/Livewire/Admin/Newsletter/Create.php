<?php

namespace App\Http\Livewire\Admin\Newsletter;

use App\Models\Newsletter;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $email;
    
    protected $rules = [
        'email' => 'required|email|unique:newsletters,email',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Newsletter') ])]);
        
        Newsletter::create([
            'email' => $this->email,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.newsletter.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Newsletter') ])]);
    }
}
