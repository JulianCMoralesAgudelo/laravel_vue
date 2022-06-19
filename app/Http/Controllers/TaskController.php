<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        Task::create($request->all());
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return response()->json($task);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->todo = $request['task'];
        $task->completed = $request['completed'];
        $task->update();
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
    }
}
