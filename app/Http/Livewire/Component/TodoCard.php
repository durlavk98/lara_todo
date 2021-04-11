<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class TodoCard extends Component
{
    public $todo;
    
    public function render()
    {
        return view('livewire.component.todo-card');
    }
}
