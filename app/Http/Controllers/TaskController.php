<?php


namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // GET /tasks
    public function index()
    {
        return response()->json(Task::all());
    }

    // POST /tasks
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string',
        ]);

        $task = Task::create($data);

        return response()->json($task, 201);
    }

    // GET /tasks/{id}
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return response()->json($task);
    }

    // PUT /tasks/{id}
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string',
        ]);

        $task->update($data);

        return response()->json($task);
    }

    // DELETE /tasks/{id}
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
