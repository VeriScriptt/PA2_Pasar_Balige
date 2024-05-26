<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $user = User::all();
        $kategori = Kategori::all();

        // Mengirimkan data user ke view
        return view('admin.admin', compact('user','kategori'));
    }

    public function persetujuan()
    {
        return view('admin.persetujuan');
    }

    public function pembeli()
    {
    // Mengambil data user dengan role 'pembeli'
    $pembeli = User::where('role', 'pembeli')->get();

    // Mengirimkan data user ke view
    return view('admin.pembeli', compact('pembeli'));
    }

    
    public function akun_penjual()
    {
        return view('admin.penjual');
    }

    public function penjual()
    {
        return view('penjual.welcome2');
    }

    public function deletePembeli($id)
    {
        // Find the user by ID and delete
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.pembeli')->with('success', 'User deleted successfully');
    }

    public function deactivatePembeli($id)
    {
        // Find the user by ID and deactivate (set a 'deactivated' flag)
        $user = User::findOrFail($id);
        $user->active = false; // Assuming there is an 'active' column in the users table
        $user->save();

        return redirect()->route('admin.pembeli')->with('success', 'User deactivated successfully');
    }

    // app/Http/Controllers/AdminController.php

    public function activatePembeli($id)
    {
        $user = User::findOrFail($id);
        $user->active = true;
        $user->save();

        return redirect()->route('admin.pembeli')->with('success', 'User activated successfully');
    }

}
