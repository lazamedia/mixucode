<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'nomor_wa',
        'email',
        'nama_usaha',
        'nama_domain',
        'jenis_website',
        'langganan',
        'maintenance',
        'teknologi',
        'metode_pembayaran',
        'deskripsi',
    ];
}
