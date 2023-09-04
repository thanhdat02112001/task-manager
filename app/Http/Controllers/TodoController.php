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
        return response()->json(['newTodo' => $newTodo], 200);
    }
}
