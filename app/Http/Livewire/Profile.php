<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $profile;
    public $form;

    protected $rules = [
        'profile.name' => 'present|min:5|max:255',
        'profile.email' => 'present|email|max:255',
        // 'profile.confirm_password' => 'required_with:password|same:profile.password',
        
    ];
    public function render()
    {
        $this->profile = User::find(auth()->id())->attributesToArray();
        // $this->profile['phone'] = strlen(trim($this->profile['phone']))? $this->profile['phone'] : '000';
        // dump($this->profile);
        $this->profile['password'] = '';
        $this->profile['confirm_password'] = '';
        // dump($this->profile);

        $this->form = false;
        return view('livewire.profile');
    }
    

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();
        

        if ($validatedData) {
            $message = "";
            $user = User::find(auth()->id());
            if (strlen(trim($this->profile['name']))){
                $user->name = $this->profile['name'];
                $user->name = $this->profile['name'];
                $message.="name ";
            }
            if (strlen(trim($this->profile['email']))){
                $user->email = $this->profile['email'];
                $message.="email ";
            }
            if (strlen(trim($this->profile['password']))){
                $user->password = bcrypt($this->profile['password']);
                $message.="password ";
            }
            if (strlen(trim($this->profile['phone']))){
                $user->phone = $this->profile['phone'];
                $message.="phone number ";

            }
            if (strlen(trim($this->profile['address']))){
            $user->address = $this->profile['address'];
            $message.="address ";

            }
            $message.=" updated";
            $user->save();
            $this->profile = User::find(auth()->id())->attributesToArray();
            
            session()->flash('message', $message);
        } else {
            session()->flash('message', 'Validation error, Please check your input.');
        }
        $this->form = false;
    }
}
