<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = "pendaftaran";
    protected $primaryKey = "id";
    protected $allowedFields = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'hp',
        'email',
        'nominal',
        'bank',
        'anbank',
        'gambar',
        'tanggal_transfer',
        'IPaddress',
        'created_at',
    ];
}