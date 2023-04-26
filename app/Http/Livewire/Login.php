<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $error;
    public $password;
    public function render()
    {
        return view('livewire.login');
    }
    
    protected $rules = [
        'email' => ['required'],
        'password' => ['required']
    ];
    public function submit(){
        $this->validate();
       if( Auth::attempt(['email' => $this->email, 'password' => $this->password])){
        Auth::user();
        return redirect()->route('home');
       }
       $this->error = "ces identifiants ne sont pas reconnus";
       return back()->withErrors("ces identifiants ne sont pas reconnus");
    }
}
