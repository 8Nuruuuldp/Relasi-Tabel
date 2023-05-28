<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";
    protected $fillable = ['nama','kelas','jurusan','alamat'];


    public function wali() {
        return $this->hasOne('App\Models\Wali');
    }

    public function dosen() {
        return $this->belongsTo('App\Models\Dosen');
    }

    public function matkul() {
        return $this->belongsToMany('App\Models\Matkul')->withPivot(['nilai']);
    }
}
