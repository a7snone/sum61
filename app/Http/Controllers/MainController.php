<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;



class MainController extends Controller
{
    public function register(Request $req )
    {
        //return view('welcome');
        // print_r($req->input());
        if($req->hasFile('receipt')){
            $distination_path = 'uploadedImages';
            $receipt = $req->file('receipt');
            $image_name = $receipt->getClientOriginalName();
            $path = $req->file('receipt')->storeAs($distination_path , $image_name);
        }
        $req->file('receipt')->store('uploadedImages');

        $student = new Student;

        $student->st_name = $req->input('name');
        $student->st_id = $req->input('id');
        $student->st_mobile = $req->input('mobile1');
        $student->p_mobile = $req->input('mobile2');
        $student->lat = $req->input('lat');
        $student->lng = $req->input('lng');
        $student->depositor = $req->input('depositor');
        $student->accountNo = $req->input('accountNo');
        $student->receipt = $image_name;
    
        $student->save();
        
      

        return redirect('/done');
    }
}
