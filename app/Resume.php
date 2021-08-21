<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table = 'resume';
    protected $fillable = ['foto_profil', 'nama_lengkap', 'tanggal_lahir', 'posisi', 'alamat', 'no_telpon', 'headline', 'deskripsi_1', 'deskripsi_2', 'deskripsi_3', 'foto_project'];
}
