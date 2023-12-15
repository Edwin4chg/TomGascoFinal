<?php

namespace App\Http\Livewire\Admin\Purchase;

use App\Models\Purchase;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Models\Song;

class Update extends Component
{
    use WithFileUploads;

    public $purchase;

    public $user_id;
    public $song_id;
    public $currency;
    public $mountpayed;
    
    protected $rules = [
        'user_id' => 'required|exists:users,id',
        'song_id' => 'required|exists:songs,id',
        'currency' => 'required',
        'mountpayed' => 'required',        
    ];

/*     public function mount($purchaseId)
    {
        $purchase = Purchase::find($purchaseId);

        // Establecer los valores actuales en las variables del componente
        $this->user_id = $purchase->user_id;
        $this->song_id = $purchase->song_id;
        $this->currency = $purchase->currency;
        $this->mountpayed = $purchase->mountpayed;
    } */

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();
    
        $this->purchase->update([
            'user_id' => $this->user_id,
            'song_id' => $this->song_id,
            'currency' => $this->currency,
            'mountpayed' => $this->mountpayed,
        ]);
    
        $this->dispatchBrowserEvent('show-message', [
            'type' => 'success',
            'message' => __('UpdatedMessage', ['name' => __('Purchase')])
        ]);
    }
    
    public function render()
    {
        $users = User::pluck('name', 'id');
        $songs = Song::pluck('title', 'id');
    
        return view('livewire.admin.purchase.update', [
            'users' => $users,
            'songs' => $songs,
        ])->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Purchase')])]);
    }
}
