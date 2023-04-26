<?php

namespace App\Http\Livewire;

use App\Models\Join as JoinModel;
use Livewire\Component;

class Join extends Component
{
    public $valide = false;
    public $email;
    public $nom;
    public $postnom;
    public $prenom;
    public $phone;
    public $date;
    public $province;
    public $niveau;
    public function render()
    {
        return view('livewire.join');
    }
    protected $rules = [
       'nom' => ['required'],
       'email' => ['required'],
       'postnom' => ['required'],
       'prenom' => ['required'],
       'date' => ['required'],
       'province' => ['required'],
       'niveau' => ['required'],
       'phone' => ['required'],
    ];

    public function submit(){
       $this->validate();
       $this->valide = true;
       JoinModel::create([
          'nom' => $this->nom,
          'mail' => $this->email,
          'postnom' => $this->postnom,
          'prenom' => $this->prenom,
          'phone' => $this->phone,
          'province' => $this->province,
          'niveau' => $this->niveau,
          'datee' => $this->date,
       ]);
    }
}
