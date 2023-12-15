<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Customer;

class CustomerComponent implements CRUDComponent
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
        return Customer::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['name', 'lastName', 'email', 'country', 'region', 'postalCode', 'phoneNumber'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['name', 'lastName', 'email', 'country', 'region', 'postalCode', 'phoneNumber'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'name' => 'text',
            'lastName' => 'text',
            'email' => 'text',
            'country' => 'text',
            'region' => 'text',
            'postalCode' => 'number',
            'phoneNumber' => 'number',
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'country' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'postalCode' => 'required|numeric',
            'phoneNumber' => 'required|numeric',
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
