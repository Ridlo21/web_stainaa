<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalBrandModel extends Model
{
    protected $table = 'personal_branding';
    protected $primaryKey = 'id_personal_branding';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id_personal_branding', 'title', 'context', 'tanggal', 'ket', 'status'];
}
