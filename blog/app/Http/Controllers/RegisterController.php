<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([ /* See Laravel Validation for available rules */
            'name' => ['required', 'max:255'],
            'username' =>['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'min:5', 'max:255']
        ]); /* If validation fails, Laravel automatically returns back to the page, with no default message to the user. */

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Success! Your account has been created.');;
    }
}
