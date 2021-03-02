<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    //
    protected $fillable = ['id_number', 'first_name', 'middle_name', 'last_name', 'phone_number', 'type', 'ApplicantId'];
    protected $table = 'health';
}
