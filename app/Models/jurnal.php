<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurnal extends Model
{
    use HasFactory;
    protected $table = 'jurnal';
    protected $fillable = ['title','pencipta','years',];
}