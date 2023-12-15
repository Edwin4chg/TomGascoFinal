<?php

namespace App\CRUD;

use App\Models\User;
use App\Models\Song;
use App\Models\Purchase;
use EasyPanel\Contracts\CRUDComponent;

class PurchaseComponent implements CRUDComponent
{
    public $create = true;
    public $delete = true;
    public $update = true;
    public $with_user_id = false;

    public $users; // Agrega estas variables públicas
    public $songs; // para que estén disponibles en la vista


    public function mount()
    {
        $this->users = User::pluck('name', 'id')->toArray();
        $this->songs = Song::pluck('title', 'id')->toArray();
    }

/*     public function __construct()
    {
        $this->users = User::pluck('name', 'id')->toArray(); // Obtén la lista de usuarios
        $this->songs = Song::pluck('title', 'id')->toArray(); // Obtén la lista de canciones
    } */

    public function getModel()
    {
        return Purchase::class;
    }

    public function fields()
    {
        return ['user_id', 'song_id', 'currency', 'mountpayed'];
    }

    public function searchable()
    {
        return ['currency', 'mountpayed'];
    }

    public function inputs()
    {
        $users = User::pluck('name', 'id')->toArray();
        $songs = Song::pluck('title', 'id')->toArray();

        return [
            'user_id' => [
                'text' => 'User',
                'type' => 'select',
                'options' => $users,
                'rules' => 'required|exists:users,id',
            ],
            'song_id' => [
                'text' => 'Song',
                'type' => 'select',
                'options' => $songs,
                'rules' => 'required|exists:songs,id',
            ],
            'currency' => [
                'text' => 'Currency',
                'type' => 'text',
                'rules' => 'required',
            ],
            'mountpayed' => [
                'text' => 'Mount Payed',
                'type' => 'text',
                'rules' => 'required',
            ],
        ];
    }

    public function validationRules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'song_id' => 'required|exists:songs,id',
            'currency' => 'required',
            'mountpayed' => 'required',
        ];
    }

    public function storePaths()
    {
        return [];
    }
}
