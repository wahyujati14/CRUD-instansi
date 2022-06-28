<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{

    protected $table = 'instansis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'aksi','nama','deskripsi'
    ];

    use HasFactory;
}
