<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Repair extends Model
{
    use HasFactory;

    protected $table = "repairs";

    protected $fillable = [
        'id',
        'pelanggan_id',
        'nomor_servis',
        'tanggal_masuk',
        'jenis_gadget',
        'tipe_gadget',
        'kelengkapan',
        'kerusakan',
        'password',
        'status',
        'comments',
    ];

    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id', 'id');
    }

    public function transaksi(){
        return $this->belongsTo(Transaksi::class,'id', 'perbaikan_id');
    }

    public function getStatusByNomorServis($nomorServis)
    {
        return $this->where('nomor_servis', $nomorServis)->value('status');
    }
}