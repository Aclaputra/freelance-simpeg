<?php

namespace App\Http\Controllers\PejabatPenilaiAuth;

use App\Http\Controllers\Controller;
use App\Models\PejabatPenilai;
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
        return view('pejabat_penilai.auth.register');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:pejabat_penilai'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = PejabatPenilai::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('pejabat_penilai')->login($user);

        return redirect(RouteServiceProvider::PEJABAT_PENILAI_HOME);
    }
}
