<?php

namespace App\Http\Livewire\Admin\Purchase;

use App\Models\Purchase;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Models\Song;

class Create extends Component
{
    use WithFileUploads;

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

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        $this->validate();

        Purchase::create([
            'user_id' => $this->user_id,
            'song_id' => $this->song_id,
            'currency' => $this->currency,
            'mountpayed' => $this->mountpayed,
        ]);

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Purchase')])]);

        $this->resetFields();
    }

    public function resetFields()
    {
        $this->user_id = '';
        $this->song_id = '';
        $this->currency = '';
        $this->mountpayed = '';
    }

    public function cancel()
    {
        $this->resetFields();
    }

    public function render()
    {
        $users = User::pluck('name', 'id');
        $songs = Song::pluck('title', 'id');
    
        return view('livewire.admin.purchase.create', [
            'users' => $users,
            'songs' => $songs,
        ])->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Purchase')])]);
    }
    
}
