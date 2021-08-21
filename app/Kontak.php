<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'kontak';
    protected $fillable = ['nama_lengkap', 'email', 'no_hp', 'kritik_saran'];
}
