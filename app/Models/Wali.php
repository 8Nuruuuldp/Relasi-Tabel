<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;
    protected $table = 'wali';
    protected $fillable = ['nama_wali','pekerjaan','mahasiswa_id'];


    public function mahasiswa() {
        return $this->belongsTo('App\Models\Mahasiswa');
    }
}
