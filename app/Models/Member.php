<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    protected $fillable = [
        'member_id',     
        'profile_pics',
        'firstname',
        'lastname',
        'email',
        'phone',
        'dob',
        'marital',
        'nationality',
        'pob',
        'city',
        'state',
        'country',
        'address',
        'profession',
        'business',
        'from_aia',
        'hobbies',
        'interest',
        'convicted',
        'medical',
        'character',
        'confidentiality',
        'liability',
        'declaration',
        'status',
        'official_name',
        'date_approved'

    ];   
}
