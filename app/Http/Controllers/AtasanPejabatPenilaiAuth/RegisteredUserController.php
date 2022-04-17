<?php

namespace App\Http\Controllers\AtasanPejabatPenilaiAuth;

use App\Http\Controllers\Controller;
use App\Models\AtasanPejabatPenilai;
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
        return view('atasan_pejabat_penilai.auth.register');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:atasan_pejabat_penilais'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = AtasanPejabatPenilai::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('atasan_pejabat_penilais')->login($user);

        return redirect(RouteServiceProvider::ATASAN_PEJABAT_PENILAI_HOME);
    }
}
