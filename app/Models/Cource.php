<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cource extends Model
{
    public function users() {
        return $this->hasMany(User::class, 'cource_id');
    }
}
