<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjaman extends Model
{
    use HasFactory;
    protected $table = 'pinjaman';
    protected $fillable = ['id_buku','id_pinjaman','id_jurnal','id_karya','denda','status','tanggal_kembali'];
}
