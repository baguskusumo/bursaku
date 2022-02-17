<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $table = 'motors';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_motor','nama_motor','mesin','tipe_suspensi','tipe_transmisi','stock'
    ];
}