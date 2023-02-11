<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profile()
    {
        return $this->hasMany(User::class,'user_id','id');
    }
    public  function groups()
    {
//        return $this->hasMany(Groups::class,'user_id','teacher_id');
        return $this->belongsTo(Groups::class,'teacher_id','user_id');
    }
}
