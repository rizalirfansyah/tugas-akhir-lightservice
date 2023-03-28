<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = "pelanggan";

    protected $fillable = [
        'id',
        'kode_pelanggan',
        'nama_pelanggan',
        'notelp',
        'proses_servis',
        'bisa_diambil',
        'sudah_diambil',
        'total_servis',
    ]; 
}