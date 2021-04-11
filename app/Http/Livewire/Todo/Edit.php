<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;

class Edit extends Component
{
    public $todo;
    public function render()
    {
        return view('livewire.todo.edit');
    }
}
