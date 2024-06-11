<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukuhutang extends Model
{
    use HasFactory;
    protected $table ='bukucatatanhutang';
    protected $fillable = ['nama', 'alamat', 'umur','no_telfon','jumlah_hutang'];
}
