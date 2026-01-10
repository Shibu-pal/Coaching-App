<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'notice_name',
        'notice_date',
        'notice_pdf',
    ];
}
