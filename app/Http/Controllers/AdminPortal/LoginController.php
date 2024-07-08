<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Consultation;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('AdminPortal/signIn');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $user = User::query()->where('email', $request->email)->first();

        if ($user->is_admin == 0) {
            throw ValidationException::withMessages([
                'email' => 'Only admin can login',
            ]);
        }

        $request->session()->regenerate();
        return redirect("/admin/dashboard");
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect(route('admin-login'));
    }
}
