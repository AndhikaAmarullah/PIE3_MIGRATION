<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $fillable = ['nama_lengkap','tempat_lahir','tanggal_lahir','alamat','agama','no_telpon','gender'];
}
