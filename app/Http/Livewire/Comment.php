<?php

namespace App\Http\Livewire;

use App\Models\Comment as CommentModel;
use Livewire\Component;

class Comment extends Component
{
    public $valide = false;
    public $nom;
    public $email;
    public $sexe;
    public $pays;
    public $comment;
    public function render()
    {
        return view('livewire.comment');
    }

    protected $rules = [
        'nom'=>['required'],
        'email' => ['required'],
        'sexe' => ['required'],
        'pays' => ['required'],
        'comment' => ['required']
    ];

    public function submit(){
        $this->validate();
        $this->valide = true;
        CommentModel::create([
            'nom' => $this->nom,
            'mail' => $this->email,
            'sexe' => $this->sexe,
            'pays' => $this->pays,
            'comment' => $this->comment,
        ]);
    }

    public function ok(){
       return redirect()->route('home');
    }
}
