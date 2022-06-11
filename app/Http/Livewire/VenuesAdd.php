<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Venue;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class VenuesAdd extends Component
{
    public $newVenue;
    public $admins;
    public $openModal = false;

    protected $rules = [
        'newVenue.name' => 'required|max:150|unique:venues,name',
        'newVenue.email' => 'min:8|max:50|unique:venues,phone',
        'newVenue.address' => 'min:8|max:150|',
        'newVenue.phone' => 'min:5|max:30',
    ];
    public function render()
    {
        if (auth()->user()->hasRole('superadministrator')) {
            $this->admins = User::whereRoleIs('administrator')->get();
        }

        $this->newVenue = [
            'name' => '',
            'email' => '',
            'password' => '',
            'phone' => '',
            'address' => ''
        ];
        return view('livewire.venues-add');
    }

    public function submitNew()
    {
        $validatedData = $this->validate();
        if ($validatedData) {
            $message = "";

            $user = Venue::create([
                'name' => $this->newVenue['name'],
                'email' => $this->newVenue['email'] ? $this->newVenue['email'] : $this->newVenue['name'] . '@mail.com',
                //default password is 12345678
                'address' => $this->newVenue['address'],
                'phone' => $this->newVenue['phone'],
            ]);

            $user->attachRole(3); //3 for shop
            $user->save();

            $message .= " updated.";
            session()->flash('message', $message);
            $this->emit('reRenderParent');
        } else {
            session()->flash('message', 'Validation error, Please check your input.');
            $this->openModal = false;
        }
        $this->editForm = false;

        
    }
}
