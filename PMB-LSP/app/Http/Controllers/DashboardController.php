<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $user = auth()->user(); // Mengambil user yang sedang login
        $pendaftaran = Pendaftaran::where('user_id', $user->id)->first(); // Data pendaftaran milik user

        // Jika pendaftaran tidak ditemukan, set status menjadi "Tidak Lulus" secara default
        if (!$pendaftaran) {
            $pendaftaran = (object) [
                'status' => 'Tidak Lulus',
            ];
        }

        return view('dashboard', compact('pendaftaran'));
    }
}
