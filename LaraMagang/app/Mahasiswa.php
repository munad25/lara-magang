<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{

	protected $table = 'table_mahasiswa';
   protected $fillable = ['NIM', 'nama', 'kelas', 'tlp', 'email', 'alamat'];
}
