<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Troubleshootings extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nama', 'qty', 'uom', 'jeniskerusakan', 'area', 'dept', 'pic', 'ket'];
}
