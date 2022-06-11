<?php

namespace App\Http\Livewire;

use Livewire\Component;


class VenuesForm extends Component
{

    protected $listeners = ['refreshComponent' => '$refresh'];

    public $currentStep = 0;
    public $currentstepTitle = "Basic";
    public function render()
    {

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
