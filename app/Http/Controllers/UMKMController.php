<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UMKM;
use App\Models\Jemaat;
use Illuminate\Support\Facades\Storage;

class UMKMController extends Controller
{
    /**
     * Menampilkan daftar semua UMKM.
     */
    public function index()
    {
        $umkm = UMKM::with('jemaat')->paginate(10); // Pagination
        return view('umkm.index', compact('umkm'));
    }

    /**
     * Menampilkan halaman autentikasi jemaat (sementara hanya teks).
     */
    public function authForm()
    {
        return "Halaman autentikasi UMKM sementara."; // Bisa diubah ke return view('umkm.auth') jika view sudah ada
    }

    /**
     * Memproses autentikasi jemaat (sementara hanya return teks).
     */
    public function authenticateJemaat(Request $request)
    {
        return "Proses autentikasi jemaat (belum diimplementasikan).";
    }    

    /**
     * Menampilkan form create UMKM dengan validasi jemaat.
     */
    public function create()
    {
        return view('umkm.create');
    }

    /**
     * Validasi Jemaat sebelum bisa membuat UMKM.
     */
    public function validateJemaat(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'no_telp' => 'required|string'
        ]);

        $jemaat = Jemaat::where('nama', $request->nama)
            ->where('tanggal_lahir', $request->tanggal_lahir)
            ->where('no_telp', $request->no_telp)
            ->first();

        if (!$jemaat) {
            return back()->withErrors(['error' => 'Data jemaat tidak valid atau tidak ditemukan.']);
        }

        return redirect()->route('umkm.createForm', ['jemaat_id' => $jemaat->id]);
    }

    /**
     * Menampilkan form pembuatan UMKM setelah validasi jemaat.
     */
    public function createForm($jemaat_id)
    {
        return view('umkm.createForm', compact('jemaat_id'));
    }

    /**
     * Menyimpan data UMKM baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_umkm' => 'required|string|max:255',
            'deskripsi_umkm' => 'required|string',
            'lokasi_umkm' => 'required|string',
            'gambar_umkm' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'jemaat_id' => 'required|exists:jemaat,id'
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar_umkm')) {
            $gambarPath = $request->file('gambar_umkm')->store('umkm_images', 'public');
        }

        UMKM::create([
            'nama_umkm' => $request->nama_umkm,
            'deskripsi_umkm' => $request->deskripsi_umkm,
            'lokasi_umkm' => $request->lokasi_umkm,
            'gambar_umkm' => $gambarPath,
            'jemaat_id' => $request->jemaat_id
        ]);

        return redirect()->route('umkm.index')->with('success', 'UMKM berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit UMKM.
     */
    public function edit($id)
    {
        $umkm = UMKM::findOrFail($id);
        return view('umkm.edit', compact('umkm'));
    }

    /**
     * Memperbarui data UMKM.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_umkm' => 'required|string|max:255',
            'deskripsi_umkm' => 'required|string',
            'lokasi_umkm' => 'required|string',
            'gambar_umkm' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $umkm = UMKM::findOrFail($id);

        if ($request->hasFile('gambar_umkm')) {
            if ($umkm->gambar_umkm) {
                Storage::delete('public/' . $umkm->gambar_umkm);
            }
            $gambarPath = $request->file('gambar_umkm')->store('umkm_images', 'public');
            $umkm->gambar_umkm = $gambarPath;
        }

        $umkm->update([
            'nama_umkm' => $request->nama_umkm,
            'deskripsi_umkm' => $request->deskripsi_umkm,
            'lokasi_umkm' => $request->lokasi_umkm,
        ]);

        return redirect()->route('umkm.index')->with('success', 'UMKM berhasil diperbarui.');
    }

    /**
     * Menghapus UMKM.
     */
    public function destroy($id)
    {
        $umkm = UMKM::findOrFail($id);
        if ($umkm->gambar_umkm) {
            Storage::delete('public/' . $umkm->gambar_umkm);
        }
        $umkm->delete();

        return redirect()->route('umkm.index')->with('success', 'UMKM berhasil dihapus.');
    }
}
