<?php

namespace App\Http\Controllers;

use App\Models\ToolLending as ModelsToolLending;
use Illuminate\Http\Request;

class toolLendingController extends Controller
{
    public function index()
    {
        $tasks = [
            'todo' => ModelsToolLending::where('status', 'todo')->get(),
            'in_progress' => ModelsToolLending::where('status', 'in_progress')->get(),
            'done' => ModelsToolLending::where('status', 'done')->get()
        ];
        return view('tasks', compact('tasks'));
    }

    public function store(Request $request)
    {
        $task = new ModelsToolLending();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->status = 'todo';
        $task->save();
        return back();
    }

    public function update(Request $request, $id)
    {
        $task = ModelsToolLending::findOrFail($id);
        $task->status = $request->status;
        $task->save();
        return response()->json(['success' => true]);
    }

      public function edit($id)
    {
        return redirect()->route('toolLending.edit', ['id' => $id]);
    }
}
