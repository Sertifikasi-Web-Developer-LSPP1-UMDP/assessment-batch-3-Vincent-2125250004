<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DataPendaftaranRequest;
use App\Models\Pendaftaran;
class CreatePendaftaranController extends Controller
{
    public function create($jalur=null)
    {   
        $user = auth()->user();

        $exist = $user->pendaftaran()->where('jalur', $jalur)->first();
        $exist1 = $user->pendaftaran()->where('user_id', $user->id)->first();
        if ($exist || $exist1) {
            return redirect()->route('page.pendaftaran')->with('warning', 'Anda hanya diperbolehkan 1 kali mendaftar.');
        }

        return view('frontend.pendaftaran.create', compact('jalur'));
    }

    public function store(DataPendaftaranRequest $request)
    {
        Pendaftaran::create(array_merge($request->validated(), [
            'user_id' => auth()->id(),
            'status' => 'Seleksi Berkas',
        ]));
        return redirect()->route('dashboard')->with('success', 'Pendaftaran berhasil disimpan.');
    }
}
