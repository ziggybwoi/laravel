<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Handling POST Request
    public function submitform(Request $request){
        return response()->json([
            'message' => 'Form submitted successfully!',
            'data' => $request->all()
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        
        return response()->json([
            'message' => 'Form submitted successfully!',
            'data' => $request->all()
        ]);

    }
}
