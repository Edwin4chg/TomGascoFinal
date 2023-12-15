<?php

namespace App\Http\Livewire\Admin\Purchase;

use App\Models\Purchase;
use Livewire\Component;

class Single extends Component
{

    public $purchase;

    public function mount(Purchase $Purchase){
        $this->purchase = $Purchase;
    }

    public function delete()
    {
        $this->purchase->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Purchase') ]) ]);
        $this->emit('purchaseDeleted');
    }

    public function render()
    {
        return view('livewire.admin.purchase.single')
            ->layout('admin::layouts.app');
    }
}
