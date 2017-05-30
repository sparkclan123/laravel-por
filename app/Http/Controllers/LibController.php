<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Lib;

class LibController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $lib = lib::all();

      $data = array(
        'lib' => $lib
      );
      return view('lib.index',$data);  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lib.form');//
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
            'title' => 'required|max:100',
            'url' => 'required|max:500',
            'description' => 'required|max:200',

        ]);//
//การเเช็ก
          $lib = new Lib;
          $lib->title = $request->title;
          $lib->url = $request->url;
          $lib->description = $request->description;

              $lib->save();
              return redirect('lib');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $lib = Lib::find($id);
      $data = array(
        'lib' => $lib
      );  //
      return view('lib/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id !== ''){
            $lib = Lib::find($id);
            $data = array(
               'lib' => $lib
            );
            return view('lib/form',$data);
        }//
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
      $this->validate($request,[
          'title' => 'required|max:100',
          'url' => 'required|max:500',
          'description' => 'required|max:200',

      ]);//  //
          $lib = Lib::find($id);
          $lib->title = $request->title;
          $lib->url = $request->url;
          $lib->description = $request->description;
          $lib->save();
Session::flash('message','success');
return redirect('lib');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $lib = Lib::find($id);
      $lib->delete();
      Session::flash('message','ลบข้อมูลเรียบร้อยเเล้ว');
      return redirect('lib');
    }
}
