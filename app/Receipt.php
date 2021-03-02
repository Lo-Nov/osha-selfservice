<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    //
    protected $fillable = ['user_id', 'receipt_no', 'customer', 'date', 'description', 'brief_description', 'identifier', 'amount', 'category'];
}
