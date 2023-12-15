<?php

namespace App\Http\Livewire\Admin\Customer;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $lastName;
    public $email;
    public $country;
    public $region;
    public $postalCode;
    public $phoneNumber;
    
    protected $rules = [
        'name' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'email' => 'required|email|unique:customers,email',
        'country' => 'required|string|max:255',
        'region' => 'required|string|max:255',
        'postalCode' => 'required|numeric',
        'phoneNumber' => 'required|numeric',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Customer') ])]);
        
        Customer::create([
            'name' => $this->name,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'country' => $this->country,
            'region' => $this->region,
            'postalCode' => $this->postalCode,
            'phoneNumber' => $this->phoneNumber,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.customer.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Customer') ])]);
    }
}
