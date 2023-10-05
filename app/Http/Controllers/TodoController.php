<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        switch ($page) {
            case "myday": 
                return self::myDayView($user);
                break;
            case "important":
                return self::importantView($user);
                break;
            case "plan":
                return self::planView($user);
                break;
            default:
                return self::homeView($user);
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

    function myDayView($user)
    {
        $today = Carbon::today()->format('Y-m-d');
        [$todos, $completedTodos] = $user->todos()->whereDate('created_at', '=', $today)->get()->partition(function($todo) {
            return $todo->status == 0;
        });
        return view('pages.myday', compact('todos', 'completedTodos'));
    }

    function importantView($user)
    {
        [$importantTodos, $importantDones] = $user->todos->where('important', '=', 1)->partition(function($todo) {
            return $todo->status == 0;
        });
        return view('pages.important', compact('importantTodos', 'importantDones'));
    }

    function planView($user)
    {
        [$planTodos, $planTodoDones] = $user->todos->where('due_date', '!=', NULL)->partition(function($todo) {
            return $todo->status == 0;
        });
        return view('pages.plan', compact('planTodos', 'planTodoDones'));
    }

    function homeView($user)
    {
        $today = Carbon::today()->format('Y-m-d');
        [$todos, $completedTodos] = $user->todos()->whereDate('created_at', '=', $today)->get()->partition(function($todo) {
            return $todo->status == 0;
        });
        $upCommings = $todos->sortBy('created_at')->take(3);
        $completeRate = 0;
        if (count($todos) > 0) {
            $completeRate = round((count($completedTodos) / ((count($todos) + count($completedTodos)))) * 100, 2);
        }
        return view('pages.home', compact('todos', 'completedTodos', 'completeRate', 'upCommings'));   
    }

    public function getStatisticData()
    {
        $startDate = Carbon::today()->subDays(30)->format('Y-m-d H:i:s');
        $endDate = Carbon::now()->format('Y-m-d H:i:s');
        $tasks = DB::table('todos')->select(DB::raw('count(*) as total'), DB::raw('DATE(created_at) as date'))->where('user_id', '=', Auth::user()->id)
                ->whereBetween('created_at', [$startDate, $endDate])
                ->groupBy('date')
                ->pluck('total', 'date')
                ->toArray();
        foreach ($tasks as $key => $value) {
            $dates[] = $key;
            $totals[] = $value;
        }
        return response()->json(['dates' => $dates, 'totals' => $totals, 'status' => 200]);
    }

    public function search(Request $request)
    {
        $todos = Auth::user()->todos()->where('name', 'like', '%' . $request->keyword . '%')->take(5)->get();
        return response()->json(['todos' => $todos, 'status' => 200]);
    }

    public function getCommingPlan()
    {
        $events = [];
        $plans = Auth::user()->todos()->where('due_date', '!=', NULL)->where('status', '=', 0)->get();
        foreach($plans as $plan)
        {
            $data =(object) [
                'title' => $plan->name,
                'start' => Carbon::parse($plan->due_date)->format('Y-m-d'),
                'end'   => Carbon::parse($plan->due_date)->format('Y-m-d'),
            ];

            $events[] = $data;
        }
        return response()->json(['events' => $events, 'status' => 200]);
    }
}
