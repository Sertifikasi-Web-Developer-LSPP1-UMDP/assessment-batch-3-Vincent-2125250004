<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\DataTables;

class UserVerifyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::role('guest')->get();
            return DataTables::of($data)
                ->addColumn('is_verified', function ($row) {
                    return $row->is_verified ? 'Terverifikasi' : 'Belum Terverifikasi';
                })
                ->addColumn('action', function ($row) {
                    return '
                        <div class="flex space-x-2">
                            <button onclick="openModal(' . $row->id . ', ' . $row->is_verified . ')" 
                                class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-md">
                                Edit Status Verifikasi
                            </button>
                        </div>';
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        return view('admin.frontend.verify.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $userVerify = User::findOrFail($id);
        return response()->json([
            'status' => true,
            'data' => $userVerify
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'is_verified' => 'required|boolean',
        ]);

        $userVerify = User::findOrFail($id);
        $userVerify->is_verified = $validated['is_verified'];
        $userVerify->save();

        return redirect()->route('verifyUser.index')->with('success', 'Status berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
