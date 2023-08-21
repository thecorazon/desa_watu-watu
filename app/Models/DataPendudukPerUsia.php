<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPendudukPerUsia extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    protected $table = 'tb_data_penduduk_per_usia';
}
