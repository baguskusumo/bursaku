<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'mobils';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_mobil','nama_mobil','mesin','kapasitas_penumpang','tipe','stock'
    ];
}