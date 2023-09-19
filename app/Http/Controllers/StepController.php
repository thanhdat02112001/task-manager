<?php

namespace App\Http\Controllers;

use App\Models\Step;
use Illuminate\Http\Request;
use App\Models\Todo;

class StepController extends Controller
{
    /**
     * Add step todo
     * 
     * @return response
     */
    public function save(Request $request)
    {
        $todo = Todo::find($request->id);
        $step = $todo->steps()->create(['content' => $request->content]);
        if (!$step) {
            return response()->json(['message' => 'Cannot add step', 'code' => '400']);
        }
        return response()->json(['newStep' => $step, 'code' => '201']);
    }

    /**
     * Remove step
     * 
     * @return response
     */
    public function delete($id)
    {
        $step = Step::find($id);
        if ($step) {
            $step->delete();
            return response()->json(['message' => 'Delete step success!', 'code' => '201']);
        }
        return response()->json(['message' => 'Cannot delete step', 'code' => '400']);
    }
}
