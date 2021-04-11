<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;

class Index extends Component
{
    public $todos;
    public function render()
    {
        return view('livewire.todo.index');
    }
}
