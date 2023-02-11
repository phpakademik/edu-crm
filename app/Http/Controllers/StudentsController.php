<?php

namespace App\Http\Controllers;

use App\Models\Curses;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Millat;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Students::paginate(20);
        $curses = Curses::get();
        $millat = Millat::get();
        return view('dashboard.students.index',['model'=>$model,'curses'=>$curses,'millat'=>$millat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $curses = Curses::query();
        $curses = $curses->where('status','=',1)->get();
        $millat = Millat::get();
        $teacher = User::query()->where(['role'=>'teacher'])->get();
        return view('dashboard.students.create',['curses'=>$curses,'millat'=>$millat,'teacher'=>$teacher]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//      $image  =   $request->file('image')->store('students','public');
        $file = $request->file('image');
        $filename = Str::random(64).'.'.$file->getClientOriginalExtension();
        $image = $file->move(public_path('uploads/students'),$filename);
       $res =  Students::create([
           'frist_name'=>$request->input('frist_name'),
           'last_name'=>$request->input('last_name'),
           'sharfi'=>$request->input('sharfi'),
           'age'=>$request->input('age'),
           'adress'=>$request->input('adress'),
           'gender'=>$request->input('gender'),
           'curse_id'=>$request->input('curse_id'),
           'teacher_id'=>$request->input('teacher_id'),
           'phone'=>$request->input('phone'),
           'phone_2'=>$request->input('phone_2'),
           'image'=>$image,
           'millat_id'=>$request->input('millat_id'),
       ]);
        return redirect('/dashboard/students/'.$res->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Students::find($id);

        return  view('dashboard.students.show',['model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Students::find($id);
        $curses = Curses::query();
        $curses = $curses->find(['status'=>1])->all();
        $millat = Millat::get();
        return view('dashboard.students.edit',['model'=>$model,'curses'=>$curses,'millat'=>$millat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $old_data = Students::find($id);
        $image  = null;
        if ($request->input('image'))
        {
            Storage::delete($old_data->image);
            $image =  $request->file('image')->store('students');
        }
        else
        {
            $image = $old_data->image;
        }
        Students::find($id)->update([
            'frist_name'=>$request->input('frist_name'),
            'last_name'=>$request->input('last_name'),
            'sharfi'=>$request->input('sharfi'),
            'age'=>$request->input('age'),
            'adress'=>$request->input('adress'),
            'gender'=>$request->input('gender'),
            'curse_id'=>$request->input('curse_id'),
            'dars_vaqti'=>$request->input('dars_vaqti'),
            'phone'=>$request->input('phone'),
            'phone_2'=>$request->input('phone_2'),
            'image'=>$image,
            'millat_id'=>$request->input('millat_id'),
        ]);
        return  redirect('/dashboard/students/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Students::find($id);
        $destroy =  File::delete($user->image);
        if ($destroy)
        {
            Students::destroy($id);
            return  redirect('dashboard/students');
        }
    }
}
