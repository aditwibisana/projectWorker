<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'daftar_project';
    protected $fillable = ['nama_project', 'foto_project', 'keterangan', 'kategori'];
}
