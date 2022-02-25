<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;


class UserController extends Controller
{

    /**
     * Register a user
     *
     * @param Request $request
     * @return Json response
     */
    public function register(Request $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            $success = true;
            $message = 'User register successfully';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
            'token' => $user->createToken('tokens')->plainTextToken
        ];
        return response()->json($response);
    }

    /**
     * Log in a User
     *
     * @param Request $request
     * @return Json response
     */
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $success = true;
            $message = 'User login successfully';
        } else {
            $success = false;
            $message = 'Unauthorised';
        }

        $user = User::where('email', $credentials['email'])->firstOrFail();

        $token = $user->createToken('authToken')->plainTextToken;

        // response
        $response = [
            'success' => $success,
            'message' => $message,
            'token' => $token

        ];
        return response()->json($response);
    }

    public function logout()
    {
        try {
            auth()->guard('web')->logout();
            $success = true;
            $message = 'Logged out successfully';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        //Response
        $response = [
            'success' => $success,
            'message' => $message,
        ];

        return response()->json($response);
    }
}
