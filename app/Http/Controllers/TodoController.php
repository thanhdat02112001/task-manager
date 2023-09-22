<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Store new todo
     * 
     * @return response
     */
    public function save(Request $request)
    {
        $data = $request->all();
        $newTodo = Auth::user()->todos()->create($data);
        if (!$newTodo) {
            return response()->json(['message' => 'Cannot add new task', 'code' => '400']);
        }
        return response()->json(['newTodo' => $newTodo, 'code' => '201']);
    }

    /**
     * Get todo
     * 
     * @return App\Models\Todo;
     */
    public function index($page)
    {
        $user =  Auth::user();
        if ($page == "myday") {
            [$todos, $completedTodos] = $user->todos->partition(function($todo) {
                return $todo->status == 0;
            });
            return view('pages.myday', compact('todos', 'completedTodos'));
        }
        if ($page == "important") {
            [$importantTodos, $importantDones] = $user->todos->where('important', '=', 1)->partition(function($todo) {
                return $todo->status == 0;
            });
            return view('pages.important', compact('importantTodos', 'importantDones'));
        }
        if ($page == "plan") {
            [$planTodos, $planTodoDones] = $user->todos->where('due_date', '!=', NULL)->partition(function($todo) {
                return $todo->status == 0;
            });
            return view('pages.plan', compact('planTodos', 'planTodoDones'));
        }
        
    }

    /**
     * Get detail todo
     * 
     * @return App\Models\Todo;
     */
    public function show($id)
    {
        $todo = Auth::user()->todos()->with('steps')->find($id);
        return response()->json(['todo' => $todo, 'code' => '201']);
    }

    /**
     * Update todo
     * 
     * @return App\Models\Todo;
     */
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        if ($todo) {
            $todo->update($request->all());
            return response()->json(['updatedTodo' => $todo, 'code' => '201']);
        }
        return response()->json(['message' => 'Cannot update todo', 'code' => '400']);
    }

    /**
     * Remove todo
     * 
     * @return response
     */
    public function delete($id)
    {
        $todo = Todo::find($id);
        if ($todo) {
            $todo->delete();
            return response()->json(['message' => 'Delete task success!', 'code' => '201']);
        }
        return response()->json(['message' => 'Cannot delete task', 'code' => '400']);
    }
}
