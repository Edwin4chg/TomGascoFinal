<?php

namespace App\Http\Livewire\Admin\Song;

use App\Models\Song;
use Livewire\Component;

class Single extends Component
{

    public $song;

    public function mount(Song $Song){
        $this->song = $Song;
    }

    public function delete()
    {
        $this->song->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Song') ]) ]);
        $this->emit('songDeleted');
    }

    public function render()
    {
        return view('livewire.admin.song.single')
            ->layout('admin::layouts.app');
    }
}
