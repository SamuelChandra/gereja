<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;
use App\Models\StatusRohani;
use App\Models\StatusExtra;
use App\Models\Jabatan;
use App\Models\Lingkungan;
use Illuminate\Support\Facades\Log; // Tambahkan ini
use App\Models\UMKM;

class JemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jemaats = Jemaat::all(); // Get all members
        return view('jemaat.index', compact('jemaats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statusRohani = StatusRohani::all();
        $statusExtra = StatusExtra::all();
        $jabatan = Jabatan::all();
        $lingkungan = Lingkungan::all();
        return view('jemaat.create', compact('statusRohani', 'statusExtra', 'jabatan', 'lingkungan')); // Show form to add new member
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Debugging awal untuk melihat data yang dikirim
    // dd($request->all());

    // Validasi data input
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'gender' => 'nullable|string',
        'status_in_family' => 'nullable|string',
        'location_of_birth' => 'nullable|string',
        'date_of_birth' => 'required|date',
        'blood_group' => 'nullable|string',
        'education' => 'nullable|string',
        'work' => 'nullable|string',
        'ethnicity' => 'nullable|string',
        'address' => 'required|string',
        'phone_number' => 'nullable|string|max:15',
        'email' => 'nullable|email|unique:jemaat,email',
        'status_jemaat' => 'required|string',
        'status_baptis' => 'required|in:0,1', // Hanya boleh 0 atau 1
        'tanggal_baptis' => 'nullable|required_if:status_baptis,1|date',
    ]);

    try {
        $validatedData['status_baptis'] = $validatedData['status_baptis'] == "1" ? 1 : 0;

        // Jika status_baptis = 0 (Belum Baptis), kosongkan tanggal_baptis
        if ($validatedData['status_baptis'] == 0) {
            $validatedData['tanggal_baptis'] = null;
        }

        // Simpan data jemaat ke database
        $jemaat = Jemaat::create($validatedData);

        // Simpan data status rohani
        StatusRohani::create([
            'jemaat_id' => $jemaat->id,
            'status_baptis' => $validatedData['status_baptis'],
            'tanggal_baptis' => $validatedData['tanggal_baptis'],
        ]);

        // Simpan pesan sukses ke dalam session
        session()->flash('success', 'Jemaat berhasil ditambahkan dan Status Rohani ditambahkan.');


        // return redirect()->route('jemaat.index');
        } catch (\Exception $e) {
            // Log error
            Log::error('Error creating jemaat: ' . $e->getMessage());

            // Simpan pesan error ke dalam session
            return back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Jemaat $jemaat)
    {
        return view('jemaat.show', compact('jemaat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jemaat $jemaat)
    {
        $statusRohani = StatusRohani::all();
        $statusExtra = StatusExtra::all();
        $jabatan = Jabatan::all();
        $lingkungan = Lingkungan::all();
        return view('jemaat.edit', compact('jemaat','statusRohani', 'statusExtra', 'jabatan', 'lingkungan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jemaat $jemaat)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'nullable|string',
            'status_in_family' => 'nullable|string',
            'location_of_birth' => 'nullable|string',
            'date_of_birth' => 'required|date',
            'blood_group' => 'nullable|string',
            'education' => 'nullable|string',
            'work' => 'nullable|string',
            'ethnicity' => 'nullable|string',
            'address' => 'required|string',
            'phone_number' => 'nullable|string|max:15',
            'email' => 'nullable|email|unique:jemaat,email,' . $jemaat->id,
            'status_jemaat' => 'required|string',
        ]);

        // Tidak ada update untuk status rohani dalam update ini.

        $jemaat->update($validatedData);

        return redirect()->route('jemaat.index')->with('success', 'Jemaat berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jemaat $jemaat)
    {
        $jemaat->delete();
        return redirect()->route('jemaat.index')->with('success', 'Jemaat berhasil dihapus.');
    }
}