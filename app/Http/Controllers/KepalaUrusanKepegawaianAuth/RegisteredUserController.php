<?php

namespace App\Http\Controllers\KepalaUrusanKepegawaianAuth;

use App\Http\Controllers\Controller;
use App\Models\KepalaUrusanKepegawaian;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('kepala_urusan_kepegawaian.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:kepala_urusan_kepegawaians'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = KepalaUrusanKepegawaian::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('kepala_urusan_kepegawaians')->login($user);

        return redirect(RouteServiceProvider::KEPALA_URUSAN_KEPEGAWAIAN_HOME);
    }
}
