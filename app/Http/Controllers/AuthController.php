<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Log the user out of the application.
     */
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    /**
     * Update user device token
     */
    public function updateDeviceToken(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            $user->device_token = $request->device_token;
            $user->save();
            return response()->json(['message' => 'new device_token updated', 'status' => '200']);
        }
        return response()->json(['message' => 'can not update device_token', 'status' => '400']);
    }
}
