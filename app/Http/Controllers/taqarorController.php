<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\taqaror;
use App\Models\karmandjaded;

class taqarorController extends Controller
{
    public function taqaror(Request $request){
       $this->validate($request, [
             'T_id'=>'required',
             'number_hokm'=>'required',
             'marjeHokm'=>'required',
             'tarikhTaqaror'=>'required',
             'enwanBast'=>'required',
             'bastChand'=>'required',
             'codeBast'=>'required',
             'wazifa'=>'required',
             'E_wazifa'=>'required',
             'edareMarbod'=>'required',
             'E_edara'=>'required'
       ]);
       $taqar=new taqaror;
       $taqar->T_id=$request->input('T_id');
       $taqar->number_hokm=$request->input('number_hokm');
       $taqar->marjeHokm=$request->input('marjeHokm');
       $taqar->tarikhTaqaror=$request->input('tarikhTaqaror');
       $taqar->enwanBast=$request->input('enwanBast');
       $taqar->bastChand=$request->input('bastChand');
       $taqar->codeBast=$request->input('codeBast');
       $taqar->wazifa=$request->input('wazifa');
       $taqar->E_wazifa=$request->input('E_wazifa');
       $taqar->edareMarbod=$request->input('edareMarbod');
       $taqar->E_edara=$request->input('E_edara');

       $taqar->save();
     
        return redirect('/employee/Taqaror')->with('success','کارمند موفقانه ثبت شد');
    }
    public function getId(){
        $cust=karmandjaded::all();
        return view('/employee/Taqaror')->with('cust',$cust);
    }

   
}
