<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest('date')->get();
        return view('livewire.todo.index', compact('todos'));
    }

    public function create()
    {
        return view('livewire.todo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:255',
        ]);
        Todo::create([
            'title' => $request->title,
            'date' => date('Y-m-d'),
            'description' => $request->description,
            'completed' => false
        ]);
        $todos = Todo::latest('date')->get();
        return view('livewire.todo.index', compact('todos'));
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        return view('livewire.todo.show', compact('todo'));
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('livewire.todo.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        
        $todo = Todo::find($id);
        if(!$request->title) {
            $todo->completed = true;
            $todo->save();
        } else {
            $todo->title = $request->title;
            $todo->date = date('Y-m-d');
            $todo->description = $request->description;
            // $todo->completed = $todo->completed;
            // $todo->id = $todo->id;
            $todo->save();
        }
        return redirect()->route('todo.show', $todo->id);
    }

    public function destroy($id)
    {
        $todo = Todo::where('id', $id)->firstorfail()->delete();
        return back();
    }
}
