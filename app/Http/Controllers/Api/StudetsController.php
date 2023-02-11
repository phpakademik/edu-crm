<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class StudetsController extends Controller
{
    public function search(Request  $request)
    {
        $data = $request->get('data');

        $students = Students::query();

        $students = $students->where('fist_name','like',$data)
            ->orWhere('last_name','like',$data)
            ->orWhere('phone','like',$data)
            ->orWhere('phone_2','like',$data)
            ->get();

        return $students;
    }
}
