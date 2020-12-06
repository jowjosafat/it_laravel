<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class problems extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nama_r', 'qty_r', 'uom_r', 'jeniskerusakan_r', 'area_r', 'dept_r', 'pic_r', 'ket_r', 'harga_r', 'status_r'];
}
