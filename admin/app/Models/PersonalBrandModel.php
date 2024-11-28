<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalBrandModel extends Model
{
    protected $table = 'personal_branding';
    public $timestamps = false;
    protected $fillable = ['id_personal_branding', 'title', 'context', 'tanggal', 'ket', 'status'];
}
