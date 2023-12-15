<?php

namespace App\Http\Livewire\Admin\Customer;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $customer;

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

    public function mount(Customer $Customer){
        $this->customer = $Customer;
        $this->name = $this->customer->name;
        $this->lastName = $this->customer->lastName;
        $this->email = $this->customer->email;
        $this->country = $this->customer->country;
        $this->region = $this->customer->region;
        $this->postalCode = $this->customer->postalCode;
        $this->phoneNumber = $this->customer->phoneNumber;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Customer') ]) ]);
        
        $this->customer->update([
            'name' => $this->name,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'country' => $this->country,
            'region' => $this->region,
            'postalCode' => $this->postalCode,
            'phoneNumber' => $this->phoneNumber,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.customer.update', [
            'customer' => $this->customer
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Customer') ])]);
    }
}
