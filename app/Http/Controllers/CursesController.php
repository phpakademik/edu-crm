<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curses;
use Illuminate\Support\Facades\Auth;

class CursesController extends Controller
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
        $model = Curses::all();
        return view('dashboard.curses.index',['model'=>$model]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return  view('dashboard.curses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd($request->all());
        $image = $request->file('image')->store('students','my_public');
        Curses::create([
            'name'=>$request->input('name'),
            'image'=>$image,
            'description'=>$request->input('description'),
            'narxi'=>$request->input('narxi'),
            'status'=>$request->input('status'),

        ]);

//        dd($request->file('image')->store('images'));
        return redirect('/dashboard/curses')->with(['status'=>'Success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Curses::find($id);

        return view('dashboard.curses.show',['model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Curses::find($id);
        return  view('dashboard.curses.edit',['model'=>$model]);
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
        $request->validate([
           'name'=>'required',
           'image'=>'required',
           'description'=>'required',
            'status'=>['required']
        ]);
        Curses::find($id)->update($request->all());
        return  redirect('/dashboard/curses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Curses::destroy($id);
        if ($model)
        {
            return  redirect('/dashboard/curses/')->with(['success','Kurs o`chirildi']);
        }
        else
        {
            return  redirect('/dashboard/curses/')->with(['danger','O`chirilmadi']);
        }
    }
    public function activate($id)
    {
        $res = Curses::find($id)->update(['status'=>1]);
        if ($res)
        {
            return redirect('/dashboard/curses/');
        }
        else
        {
            return redirect('/dashboard/curses/');
        }
    }
    public function inactivate($id)
    {
        $res = Curses::find($id)->update(['status'=>0]);
        if ($res)
        {
            return redirect('/dashboard/curses/');
        }
        else
        {
            return redirect('/dashboard/curses/');
        }
    }

}
