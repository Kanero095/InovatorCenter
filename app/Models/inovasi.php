<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inovasi extends Model
{
    use HasFactory;

    public function getimgLogoUrlAttribute()
    {
        return asset('storage/image/logo' . $this->attributes['imgLogo']);
    }

    public function getimgTimUrlAttribute()
    {
        return asset('storage/image/tim' . $this->attributes['imgTim']);
    }

    protected $fillable = [
        'nameTeam',
        'imgLogo',
        'deskripsi',
        'imgTim',
        'web',
        'instagram',
        'facebook',
        'other',
    ];
}
