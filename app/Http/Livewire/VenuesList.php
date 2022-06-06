<?php

namespace App\Http\Livewire;


use App\Models\Venue;
use Livewire\Component;

class VenuesList extends Component
{ 
    public $selectAll = false;
    public $venues;
    public $selectedVenues = [];


    public function mount(){
        $this->selectedVenues = collect();
    }

    public function render()
    {
        $this->venues = Venue::all();
        return view('livewire.venues-list',[]);
        
    }

    public function selectAll(){
        $this->selectAll = true;
    }

    public function updatedSelectAll($value){
        if($value){
            $this->selectedVenues = $this->venues->pluck('id');
        }else{
            $this->selectedVenues = [];
        }
    }

    // ID must be hashed
    public function delete($id)
    {
        Venue::destroy($id);
    }

    public function add(){
        Venue::factory(10)->create();
    }
    
    public function deleteSelected(){
        Venue::query()->whereIn('id',$this->selectedVenues)->delete();
        $this->selectedVenues = [];
        $this->selectAll = false;
    }
}
