<?php

namespace App\Http\Livewire\Admin\Song;

use App\Models\Song;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $song;

    public $title;
    public $price;
    public $description;
    public $audio;
    public $photo;
    public $keywords;
    public $artist;
    
    protected $rules = [
        'audio' => 'file|mimetypes:audio/*',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10048',        
    ];

    public function mount(Song $Song){
        $this->song = $Song;
        $this->title = $this->song->title;
        $this->price = $this->song->price;
        $this->description = $this->song->description;
        $this->audio = $this->song->audio;
        $this->photo = $this->song->photo;
        $this->keywords = $this->song->keywords;
        $this->artist = $this->song->artist;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Song') ]) ]);
        
        if($this->getPropertyValue('audio') and is_object($this->audio)) {
            $this->audio = $this->getPropertyValue('audio')->store('audios');
        }

        if($this->getPropertyValue('photo') and is_object($this->photo)) {
            $this->photo = $this->getPropertyValue('photo')->store('photos');
        }

        $this->song->update([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'audio' => $this->audio,
            'photo' => $this->photo,
            'keywords' => $this->keywords,
            'artist' => $this->artist,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.song.update', [
            'song' => $this->song
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Song') ])]);
    }
}
