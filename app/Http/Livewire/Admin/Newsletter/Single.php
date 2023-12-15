<?php

namespace App\Http\Livewire\Admin\Newsletter;

use App\Models\Newsletter;
use Livewire\Component;

class Single extends Component
{

    public $newsletter;

    public function mount(Newsletter $Newsletter){
        $this->newsletter = $Newsletter;
    }

    public function delete()
    {
        $this->newsletter->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Newsletter') ]) ]);
        $this->emit('newsletterDeleted');
    }

    public function render()
    {
        return view('livewire.admin.newsletter.single')
            ->layout('admin::layouts.app');
    }
}
