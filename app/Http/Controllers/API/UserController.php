<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;


class UserController extends Controller
{

    use ApiResponse;

    /**
     * Register a user
     *
     * @param Request $request
     * @return Json response
     */
    public function register(Request $request)
    {
        $response = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6'
        ]);

        try {
            $user = User::create([
                'name' => $response['name'],
                'password' => bcrypt($response['password']),
                'email' => $response['email']
            ]);

            return $this->success([
                'token' => $user->createToken('API Token')->plainTextToken
            ]);
        } catch (QueryException $ex) {
            return $this->error('unable to create a new user', 404);
        }
    }

    /**
     * Log in a User
     *
     * @param Request $request
     * @return Json response
     */
    public function login(Request $request)
    {

        $response = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:6'
        ]);

        try {
            if (Auth::attempt($response)) {
                return $this->success([
                    'token' => Auth()->user()->createToken('API Token')->plainTextToken
                ]);
            }
        } catch (QueryException $ex) {
            return $this->error('Credentials do not match', 401);
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return [
            'message' => 'Tokens Revoked'
        ];
    }
}
