<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Counter extends Component
{
    use WithPagination;
    public $name;
    public $email;
    public $password;

    public function createUser(){
        User::create([
           'name'=> $this->name ,
            'email'=>$this->email ,
            'password'=>Hash::make($this->password)
        ]);
    }

    public function render()
    {

        return view('livewire.counter' ,
        [
            "users" => User::paginate(5)
        ]
        );

    }
}
