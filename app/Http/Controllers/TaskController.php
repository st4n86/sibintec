<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $count = Task::where('done', 0)->count();
        return view('welcome', ['tasks' => $tasks, 'count' => $count]);
    }

    public function done(Request $request, $id)
    {
        Task::findOrFail($id)->update(['done' => 1]);
    }

    public function undone(Request $request, $id)
    {
        Task::findOrFail($id)->update(['done' => 0]);
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);

        Task::create($validatedData);
        return redirect()->route('index');
    }
}
