<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Admin;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function total()
    {
        $jumlahPegawai = Pegawai::count();
        $jumlahAdmin = Admin::count();
        $pegawai = Pegawai::all();

        return view('beranda', ['jumlahPegawai' => $jumlahPegawai, 'jumlahAdmin' => $jumlahAdmin, 'pegawai' => $pegawai]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'telepon' => 'required',
            'jabatan' => 'required',
        ]);

        $pegawai = new Pegawai;
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->email = $request->email;
        $pegawai->alamat = $request->alamat;
        $pegawai->telepon = $request->telepon;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->save();

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }
    public function index()
    {
        return view('tambahpegawai');
    }
    public function showAll()
    {
        $semuaPegawai = Pegawai::all();
        return view('editpegawai', compact('semuaPegawai'));
    }
    public function update(Request $request, $NIP)
    {
        $pegawai = Pegawai::find($NIP);
        if (!$pegawai) {
            return redirect()->route('pegawai.showAll')->with('error', 'Pegawai dengan NIP tersebut tidak ditemukan');
        }
        $pegawai->NIP = $request->NIP;
        $pegawai->nama = $request->nama;
        $pegawai->email = $request->email;
        $pegawai->alamat = $request->alamat;
        $pegawai->telepon = $request->telepon;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->status = $request->status;
        $pegawai->save();

        return redirect()->route('pegawai.showAll')->with('success', 'Data pegawai berhasil diupdate');
    }
    public function destroy($NIP)
    {
        $pegawai = Pegawai::find($NIP);
        if (!$pegawai) {
            // Handle the case where no pegawai with the given NIP exists
            return redirect()->route('pegawai.showAll')->with('error', 'Pegawai dengan NIP tersebut tidak ditemukan');
        }
        $pegawai->delete();
        return redirect()->route('pegawai.showAll')->with('success', 'Pegawai berhasil dihapus');
    }
}
