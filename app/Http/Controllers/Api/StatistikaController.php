<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class StatistikaController extends Controller
{
    public function students(Request  $request)
    {
        $gender = $request->get('gender');
        $studensts = Students::query();

        if ($gender == 'male')
        {
            $studensts->where(['gender'=>'erkak']);
        }
        if ($gender == 'female')
        {
            $studensts->where(['gender'=>'ayol']);
        }

        return $studensts->count();
    }
}
