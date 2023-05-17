<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Mahasiswa extends Model //Definisi Model
{
    protected $table="mahasiswa"; //eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    public $timestamps = false;
    protected $primaryKey = 'nim'; //memanggil isi DB dengan PrimaryKey
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'nim',
        'nama',
        'kelas',
        'jurusan',
        'noHp',
    ];
};
