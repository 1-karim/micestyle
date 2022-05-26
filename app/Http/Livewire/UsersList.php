<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{
    protected $listeners = ['reRenderParent'];
    use WithPagination;
    public $selectAll = false;
    protected $users;
    public $editableUser;
    public $selectedUsers = [];
    public $editForm = false;
    public $newUser;
    public $search="";
    public $admins;
    public $editablePlaceholder;
    protected $rules = [
        // unique:users,name
        'editableUser.name' => 'min:5|max:150|unique:users,name',
        'editableUser.email' => 'max:100|email',
        'editableUser.phone' => 'max:12',
        'editableUser.password' => 'min:8|max:30',
        'editableUser.remove_credit' => 'numeric',
        'editableUser.send_credit' => 'numeric',
    ];

    public function reRenderParent()
    {
        $this->render();
    }
    public function mount()
    {
        $this->editableUser = New User();
        $this->editableUserObj = New User();
        $this->selectedUsers = collect();
    }
    public function render()
    {
        $totalIn = 0;
        $totalOut = 0;
        $this->editForm = false;
            $this->users = User::search('name',$this->search)->oldest()->paginate(10);
            // ->whereRoleIs('administrator')
            // $this->admins = User::whereRoleIs('administrator')->get();
            
        
        return view('livewire.users-list',[
            'users' => $this->users,
        ]);
        
    }

    public function editUser($id){
        $this->editableUserObj = User::find($id);
        $this->editableUser = User::find($id)->attributesToArray();
        $this->editablePlaceholder = User::find($id)->attributesToArray();
        $this->editableUser['name'] = '';
        $this->editableUser['email'] = '';
        $this->editableUser['owned_by'] = '';
        $this->editableUser['password'] = '';
        $this->editableUser['address'] = '';
        $this->editableUser['phone'] = '';
        $this->editableUser['send_credit'] = 0;
        $this->editableUser['remove_credit'] = 0;
        $this->editForm = true;
    }

    // ID must be hashed
    public function delete($id)
    {
        User::destroy($id);
    }

    public function submit()
    {
        $validatedData = $this->validate();
        if ($validatedData) {
            $message = "";
            $user = User::find($this->editableUser['id']);
            if (strlen(trim($this->editableUser['name']))){
                $user->name = $this->editableUser['name'];
                $user->name = $this->editableUser['name'];
                $message.="name ";
            }
            if (strlen(trim($this->editableUser['email']))){
                $user->email = $this->editableUser['email'];
                $message.="email ";
            }
            if (strlen(trim($this->editableUser['password']))){
                $user->password = bcrypt($this->editableUser['password']);
                $message.="password ";
            }
            if (strlen(trim($this->editableUser['phone']))){
                $user->phone = $this->editableUser['phone'];
                $message.="phone number ";
            }
            if (strlen(trim($this->editableUser['address']))){
            $user->address = $this->editableUser['address'];
            $message.="address ";
            }
            
            $message.="updated";
            $user->save();
            return redirect()->to('/users');
            session()->flash('message', $message);
        } else {
            session()->flash('message', 'Validation error, Please check your input.');
        }
        
    }
}
