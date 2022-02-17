<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Pembayaran extends Model
{
    use HasFactory;
	
	protected $table = 'detail_pembayarans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama','mesin','tahun_keluaran','warna','harga','stock'
    ];
}
