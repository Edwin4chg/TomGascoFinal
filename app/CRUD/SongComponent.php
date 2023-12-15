<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Song;

class SongComponent implements CRUDComponent
{
    // Manage actions in crud
    public $create = true;
    public $delete = true;
    public $update = true;

    // If you will set it true it will automatically
    // add `user_id` to create and update action
    public $with_user_id = true;

    public function getModel()
    {
        return Song::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['title', 'price', 'description', 'audio', 'photo', 'keywords', 'artist'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['title', 'price', 'description', 'audio', 'photo', 'keywords', 'artist'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'title' => 'text',
            'price' => 'number',
            'description' => 'textarea',
            'audio' => 'file',
            'photo' => 'file',
            'keywords' => 'text',
            'artist' => 'text',
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'audio' => 'file|mimetypes:audio/*',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [
            'photo' => 'photos',
            'audio' => 'audios',
        ];
    }
}
