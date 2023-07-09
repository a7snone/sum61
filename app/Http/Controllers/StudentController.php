<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'st_name' => 'required',
            'st_id' => 'required',
            'st_mobile' => 'required',
            'p_mobile' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'depositor' => 'required',
            'accountNo' => 'required',
            'receipt' => 'required',
        ]);

        $student = new Student;

        $student->st_name = $request->input('st_name');
        $student->st_id = $request->input('st_id');
        $student->st_mobile = $request->input('st_mobile');
        $student->p_mobile = $request->input('p_mobile');
        $student->lat = $request->input('lat');
        $student->lng = $request->input('lng');
        $student->depositor = $request->input('depositor');
        $student->accountNo = $request->input('accountNo');
        $student->receipt = $request->input('receipt');
    
        $student->save();
        
        return redirect('/done');
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
