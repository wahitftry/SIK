<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:admin',
            'email' => 'required|email|unique:admin',
            'password' => 'required|confirmed',
        ]);

        $admin = new Admin;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Admin berhasil ditambahkan');
    }
    public function index()
    {
        return view('tambahadmin');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Menambahkan pesan sukses ke session
            session()->flash('success2', 'Login berhasil, Selamat datang ' . $request->username . '!');
            return redirect()->route('beranda');
        }

        // Jika login gagal, tambahkan pesan ke session
        return redirect()->back()->with('error', 'Login gagal, silakan cek kembali username dan password Anda.');
    }
    public function logout()
    {
        Auth::logout(); // Menghapus session yang aktif
        return redirect('/'); // Mengarahkan ke halaman login
    }
    public function showAll()
    {
        $admins = Admin::all();
        return view('editadmin', compact('admins'));
    }
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.edit', compact('admin'));
    }
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('admin.showAll')->with('success', 'Admin berhasil dihapus');
    }
    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->username = $request->username;
        $admin->email = $request->email;
        // Anda mungkin juga ingin mengupdate password di sini
        $admin->save();

        return redirect()->route('admin.showAll')->with('success', 'Admin berhasil diupdate');
    }
}
