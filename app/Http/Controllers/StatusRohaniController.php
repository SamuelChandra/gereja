<?php

namespace App\Http\Controllers;

use App\Models\StatusRohani;
use Illuminate\Http\Request;

class StatusRohaniController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'status_baptis' => 'nullable|string',
    //         'tanggal_baptis' => 'nullable|date',
    //         'gereja_baptis' => 'nullable|string',
    //         'status_sidi' => 'nullable|string',
    //         'tanggal_sidi' => 'nullable|date',
    //         'gereja_sidi' => 'nullable|string',
    //         'status_nikah' => 'nullable|string',
    //         'tanggal_nikah' => 'nullable|date',
    //         'gereja_nikah' => 'nullable|string',
    //     ]);

    //     $statusRohani = StatusRohani::create($request->all());

    //     return response()->json($statusRohani, 201); // Mengembalikan respons JSON
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StatusRohani  $statusRohani
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StatusRohani $statusRohani)
    {
        $request->validate([
            'status_baptis' => 'nullable|boolean',
            'tanggal_baptis' => 'nullable|date',
            'gereja_baptis' => 'nullable|string',
            'status_sidi' => 'nullable|string',
            'tanggal_sidi' => 'nullable|date',
            'gereja_sidi' => 'nullable|string',
            'status_nikah' => 'nullable|string',
            'tanggal_nikah' => 'nullable|date',
            'gereja_nikah' => 'nullable|string',
        ]);

        $statusRohani->update($request->all());

        return response()->json($statusRohani, 200); // Mengembalikan respons JSON
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatusRohani  $statusRohani
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatusRohani $statusRohani)
    {
        $statusRohani->delete();

        return response()->json(null, 204); // Mengembalikan respons JSON
    }
}