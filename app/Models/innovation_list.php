<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class innovation_list extends Model
{
    use HasFactory;

    protected $fillable =[
        'nameInnovation',
        'deskripsiInnovation',
        'nameTeamInnovation',
        'imgInnovation',
        'DateCreated'
    ];
}
