<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function index()
    {
        $goals = Goal::get();
        return view('livewire.goal.index', compact('goals'));
    }

    public function create()
    {
        return view('livewire.goal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:255',
            'priority'=>'required',
            'timeline'=>'required',
        ]);
        Goal::create([
            'title' => $request->title,
            'priority' => $request->priority,
            'timeline'=> $request->timeline,
            'description' => $request->description,
            'last_date' => $request->last_date,
            'completed' => false
        ]);
        $goals = Goal::get();
        return view('livewire.goal.index', compact('goals'));
    }

    public function show($id)
    {
        $goal = Goal::find($id);
        return view('livewire.goal.show', compact('goal'));
    }

    public function edit($id)
    {
        $goal = Goal::find($id);
        return view('livewire.goal.edit', compact('goal'));
    }

    public function update(Request $request, $id)
    {
        $goal = Goal::find($id);
        if(!$request->title) {
            $goal->completed = true;
            $goal->save();
        } else {
            $goal->title = $request->title;
            $goal->timeline = $request->timeline;
            $goal->last_date = $request->last_date;
            $goal->priority = $request->priority;
            $goal->description = $request->description;
            $goal->save();
        }
        return redirect()->route('goal.show', $goal->id);
    }

    public function destroy($id)
    {
        $goal = Goal::where('id', $id)->firstorfail()->delete();
        return back();
    }
}
