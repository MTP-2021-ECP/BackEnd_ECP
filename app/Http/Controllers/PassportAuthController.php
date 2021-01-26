<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class PassportAuthController extends Controller
{
    /**
     * Registration
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'firstname' => ['required', 'string', 'max:255', 'alpha'],
            'lastname' => ['required', 'string', 'max:255', 'alpha'],
            'dateOfBirth' => ['required', 'date'],
            'address' => [ 'required', 'string', 'max:255'],
            'zipCode' => [ 'required', 'string', 'size:5'],
            'phoneNumber' => ['required', 'string', 'size:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
 
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'dateOfBirth'=> $request->dateOfBirth,
            'address'=> $request->address,
            'zipCode'=> $request->zipCode,
            'phoneNumber'=> $request->phoneNumber,
            'password' => bcrypt($request->password)
        ]);
       
        $token = $user->createToken('LaravelAuthApp')->accessToken;
 
        return response()->json(['token' => $token], 200);
    }
 
    /**
     * Login
     */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }  
}
