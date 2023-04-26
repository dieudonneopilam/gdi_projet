<?php

namespace App\Http\Livewire;

use App\Models\Join;
use App\Models\Comment;
use Livewire\Component;

class Content extends Component
{
    public $commentaire = true;
    public $join = false;
    public function render()
    {
        $comments = Comment::all();
        $joins = Join::all();

        return view('livewire.content',[
            'comments' => $comments,
            'joins' => $joins
        ]);
    }
}
