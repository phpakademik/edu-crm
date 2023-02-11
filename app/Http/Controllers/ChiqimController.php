<?php

namespace App\Http\Controllers;

use App\Models\Chiqim;
use Illuminate\Http\Request;

class ChiqimController extends Controller
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
    public function index(Request  $request)
    {
        $from = $request->get('from');
        $to = $request->get('to');
        $limit = $request->get('limit');

        if (!$limit)
            $limit =15;
        $chiqim = Chiqim::query();
        if ($from)
            $chiqim = $chiqim->whereDate('date','>=',$from);
        if ($to)
            $chiqim = $chiqim->whereDate('date','<=',$to);

        $chiqim = $chiqim->paginate($limit);

        return   view('dashboard.chiqim.index',['chiqimlar'=>$chiqim]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('dashboard.chiqim.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'date'=>'required'
        ]);
        Chiqim::create($request->all());
        return  redirect('/dashboard/chiqim')->with('success','Chiqim qo`shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
