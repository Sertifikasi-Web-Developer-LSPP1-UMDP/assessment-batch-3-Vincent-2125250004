<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataPendaftaranRequest;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Pendaftaran::select(['email', 'nama', 'jalur', 'prodi1', 'id', 'status']);
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    return '
                    <div class="flex space-x-2">
                        <button onclick="openModal(' . $row->id . ', \'' . $row->status . '\')" 
                            class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-md">
                            Edit Status Pendaftaran
                        </button>
                    </div>
                ';
                })

                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.frontend.pendaftaran.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.frontend.pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DataPendaftaranRequest $request)
    {
        Pendaftaran::create(array_merge($request->validated(), ['user_id' => auth()->id()]));

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return response()->json([
            'status' => true,
            'data' => $pendaftaran
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:Lulus,Seleksi Berkas,Tidak Lulus',
        ]);

        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->update(['status' => $validated['status']]);

        return redirect()->route('pendaftaran.index')->with('success', 'Status berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
