<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admins extends Authenticatable
{
    use HasFactory;
    protected $guarded=[];

    public function Transactions(){
        return $this->hasMany(Transactions::class);
    }
}