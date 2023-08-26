<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function loginAdmin(Request $request)
    {
        // return 'ok';
        $admin = User::where('password', $request->password)->first();
        if ($admin == null) {
            // return ('gagal');

            $request->session()->flash('gagal', 'Username Atau Password Salah  !');
            return redirect('login');
        }
        if ($admin->username == $request->username) {
            $request->session()->flash('berhasil', 'Selamat datang Admin  !');
            return redirect('dashboard');
        }
        return redirect('login');
    }
}
