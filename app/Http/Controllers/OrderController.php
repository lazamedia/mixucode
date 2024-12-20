<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Menyimpan data order ke database.
     */
    public function store(Request $request)
    {
        
        // Validasi data
        $validator = Validator::make($request->all(), [
            'nama_lengkap'      => 'required|string|max:255',
            'nomor_wa'          => 'required|string|regex:/^[0-9]{10,15}$/',
            'email'             => 'required|email|max:255',
            'nama_usaha'        => 'required|string|max:255',
            'nama_domain'       => 'required|string|max:255',
            'jenis_website'     => 'required|string',
            'langganan'         => 'required|string',
            'maintenance'       => 'required|boolean',
            'teknologi'         => 'required|string',
            'metode_pembayaran' => 'required|string',
            'deskripsi'         => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Simpan data ke database
        $order = Order::create([
            'nama_lengkap'      => $request->nama_lengkap,
            'nomor_wa'          => $request->nomor_wa,
            'email'             => $request->email,
            'nama_usaha'        => $request->nama_usaha,
            'nama_domain'       => $request->nama_domain,
            'jenis_website'     => $request->jenis_website,
            'langganan'         => $request->langganan,
            'maintenance'       => $request->maintenance,
            'teknologi'         => $request->teknologi,
            'metode_pembayaran' => $request->metode_pembayaran,
            'deskripsi'         => $request->deskripsi,
        ]);

        return response()->json([
            'status'    => 'success',
            'message'   => 'Formulir berhasil dikirim.',
            'data'      => $order,
        ]);

        return redirect()->intended('/');
    }
}
