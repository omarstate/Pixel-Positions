<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $userAttributes = request()->validate([
           'name' => ['required', 'min:3'],
           'email' => ['email', 'required'],
           'password' => ['required', 'confirmed', Password::min(6)]
        ]);

        $employerAttributes = request()->validate([
            'employer' => ['required', 'min:3'],
            'logo' => ['required', File::types(['png', 'jpg', 'webp'])]
        ]);


        $user = User::create($userAttributes);

        $logoPath = request()->logo->store('logos');

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath,
        ]);
        Auth::login($user);

        return redirect('/');

    }

    public function destroy()
    {
        Auth::logout();
    }

}
