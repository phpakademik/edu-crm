<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curses extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','description','status','narxi'];
    protected $guarded = [];

    public function student()
    {
        return $this->hasMany(Students::class,'curse_id','id');
    }
}
