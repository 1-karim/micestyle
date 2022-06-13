<?php

namespace App\Http\Livewire;

use App\Models\Venue;
use App\Models\VenueCategorie;
use Livewire\Component;


class VenuesForm extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];
    public $currentStep = 0;
    public $currentstepTitle = "Basic";

    public $categories;
    public $name;
    public $email;
    public $phone;
    public $venue_categorie;
    public $basicValid = true;
    public $locationValid = false;
    
    protected $rules = [
        'name' => 'required|min:6|unique:venues',
        'email' => 'required|email|unique:venues',
        'phone' => 'required|numeric|digits:8',
        'venue_categorie' => 'required',
    ];

    public function updated($propertyName)

    {
        $this->validateOnly($propertyName);
        
    }

    public function submitBasic()

    {
        $validatedData = $this->validate();
            
            Venue::create([
                'name'=>$this->name,
                'email' => $this->email,
                'venue_category_id' => $this->venue_categorie,
                'phone'=>$this->phone,
                'likes'=>0,
                'logo'=>'']);
        $this->basicValid = true;
        $this->currentStep = 1;
    }

    public function submitLocation()

    {
        $validatedData = $this->validate();
        
    }

    public function render()
    {
        $this->categories = VenueCategorie::all();
        return view('livewire.venues-form');
    }

    public function setStep($n)
    {
        
       if($n > -1 && $n < 9){
        $this->currentStep = $n;
        switch ($n) {
            case 0:
                $this->currentstepTitle = "Basic";
                break;
            case 1:
                $this->currentstepTitle = "Location";
                break;
            case 2:
                $this->currentstepTitle = "Facilities";
                break;
            case 3:
                $this->currentstepTitle = "Photos";
                break;
            case 4:
                $this->currentstepTitle = "Terms";
                break;
            case 5:
                $this->currentstepTitle = "Description";
                break;
            case 6:
                $this->currentstepTitle = "Rooms";
                break;
        }
       }
    }
    public function nextStep()
    {
        $this->setStep($this->currentStep+1);
    }
    public function prevStep()
    {
        $this->setStep($this->currentStep-1);

    }
}
