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
    public function index()
    {
        $todos = Auth::user()->todos;
        return view('pages.myday', compact('todos'));
    }
}
