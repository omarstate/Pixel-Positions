<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;


class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile.index', ['user' => $user]);
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', ['user' => $user]);
    }

    public function update()
    {
         request()->validate([
            'name' => ["required"],
            'email' => ["required", "email"],
             'logo' => ['required', File::types(['png', 'jpg', 'webp'])]
        ]);

        $logoPath = request()->logo->store('logos');

        Auth::user()->update([
            'name' => request('name'),
            'email' => request('email'),
        ]);

        Auth::user()->employer->update([
            "logo" => $logoPath
        ]);

        return redirect('profile');
    }
}
