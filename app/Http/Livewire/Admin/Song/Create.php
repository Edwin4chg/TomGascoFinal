<?php

namespace App\Http\Livewire\Admin\Song;

use App\Models\Song;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

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

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Song') ])]);
        
        if($this->getPropertyValue('audio') and is_object($this->audio)) {
            $this->audio = $this->getPropertyValue('audio')->store('audios');
        }

        if($this->getPropertyValue('photo') and is_object($this->photo)) {
            $this->photo = $this->getPropertyValue('photo')->store('photos');
        }

        Song::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'audio' => $this->audio,
            'photo' => $this->photo,
            'keywords' => $this->keywords,
            'artist' => $this->artist,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.song.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Song') ])]);
    }
}