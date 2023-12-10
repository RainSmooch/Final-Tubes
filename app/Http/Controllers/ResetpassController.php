<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ResetPassController extends Controller
{
    public function showResetForm()
    {
        return view('resetpass');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:users,name',
            'email' => 'required|exists:users,email',
            'new-password' => 'required|min:8',
        ]);

        $username = $request->input('username');
        $email = $request->input('email');
        $newPassword = $request->input('new-password');

        // Check if the username and email match
        $user = User::where('name', $username)
                    ->where('email', $email)
                    ->first();

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'Username dan Email tidak cocok.'])->withInput();
        }

        // Change the user's password
        $user->password = Hash::make($newPassword);
        $user->save();

        return redirect('/')->with('success', 'Password berhasil direset. Silakan masuk dengan password baru Anda.');
    }
}
