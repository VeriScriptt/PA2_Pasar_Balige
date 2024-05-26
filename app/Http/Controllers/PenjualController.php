<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PenjualController extends Controller
{
    public function penjual()
    {
        return view('penjual/welcome2');
    }
    public function produk()
    {
        // Mendapatkan ID pengguna yang sedang login
        $userId = Auth::id();
        
        // Mendapatkan produk yang hanya dibuat oleh pengguna yang sedang login dan memuat kategori produk
        $produks = Produk::where('id_user', $userId)->with('kategori')->get();
        
        return view('Penjual.Produk', compact('produks'));
    }
    
    public function profile()
    {
        return view('penjual/profile');
    }
    public function pesanan()
    {
        return view('penjual/pesanan');
    }
    public function ulasan()
    {
        return view('penjual/ulasan');
    }

    public function index(){
        {
            $produks = Produk::all();
            return view('Layouts.shop_detail', compact('produks'));
        }
    }

    public function showProfile()
    {
        // Ambil data user yang sedang login
        $user = Auth::user();

        // Tampilkan view dan kirim data user
        return view('penjual.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'nomor_toko' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
            'lantai_toko' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomor_telepon' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date_format:d/m/Y',
            'gambar_toko' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $user->nama_toko = $request->input('nama_toko');
        $user->name = $request->input('name');
        $user->nomor_toko = $request->input('nomor_toko');
        $user->nik = $request->input('nik');
        $user->lantai_toko = $request->input('lantai_toko');
        $user->email = $request->input('email');
        $user->nomor_telepon = $request->input('nomor_telepon');
        $user->tanggal_lahir = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('tanggal_lahir'));

        // Save store image
        if ($request->hasFile('gambar_toko')) {
            // Delete the old image if it exists
            if ($user->gambar_toko) {
                Storage::delete($user->gambar_toko);
            }

            $image = $request->file('gambar_toko');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/produk'), $imageName);
            $user->gambar_toko = 'images/produk/' . $imageName;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
    
}
