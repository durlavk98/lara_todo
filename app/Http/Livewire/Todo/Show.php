<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;

class Show extends Component
{
    public $todo;
    public function render()
    {
        return view('livewire.todo.show');
    }
}
