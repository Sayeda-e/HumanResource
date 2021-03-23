<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karmandjaded;

class karmandjadedController extends Controller
{
    public function karmand(Request $request){

        $this->validate($request, [
            'id'=>'required',
            'name'=>'required',
            'E_name'=>'required',
            'lastname'=>'required',
            'E_lastname'=>'required',
            'Fname'=>'required',
            'padarkalan'=>'required',
            'tarikhtawalod'=>'required',
            'numberTazkira'=>'required',
            'safha'=>'required',
            'jold'=>'required',
            'sokonatAsly'=>'required',
            'sokonatFehly'=>'required',
            'jensiat'=>'required',
            'phone'=>'required',
            'halatMadany'=>'required',
            'codeTashkilaty'=>'required',
            'milyat'=>'required',
            'groupeKhoon'=>'required',
            'role'=>'required'
            
         ]);

        $kar=new karmandjaded;
        $kar->id=$request->input('id');
        $kar->name=$request->input('name');
        $kar->E_name=$request->input('E_name');
        $kar->lastname=$request->input('lastname');
        $kar->E_lastname=$request->input('E_lastname');
        $kar->Fname=$request->input('Fname');
        $kar->padarkalan=$request->input('padarkalan');
        $kar->tarikhtawalod=$request->input('tarikhtawalod');
        $kar->numberTazkira=$request->input('numberTazkira');
        $kar->safha=$request->input('safha');
        $kar->jold=$request->input('jold');
        $kar->sokonatAsly=$request->input('sokonatAsly');
        $kar->sokonatFehly=$request->input('sokonatFehly');
        $kar->jensiat=$request->input('jensiat');
        $kar->phone=$request->input('phone');
        $kar->email=$request->input('email');
        $kar->halatMadany=$request->input('halatMadany');
        $kar->mashMaslaky=$request->input('mashMaslaky');
        $kar->mashShakhsy=$request->input('mashShakhsy');
        $kar->codeTashkilaty=$request->input('codeTashkilaty');
        $kar->milyat=$request->input('milyat');
        $kar->sazmanSiasy=$request->input('sazmanSiasy');
        $kar->groupeKhoon=$request->input('groupeKhoon');
        $kar->role=$request->input('role');
        $kar->photo=$request->input('photo');

        $kar->save();
     
        return redirect('/employee/listKarmandan')->with('success','کارمند موفقانه ثبت شد');

    }

    public function getkarmand(){
        $karmand=karmandjaded::all();
         return view('/employee/listKarmandan')->with('karmand',$karmand);
      }

      public function search(){
    
        $search_id= $_GET['query'];
        $data=karmandjaded::where('id', $search_id)->get();
          return view('/employee/search', compact('data'));
      }

      public function edits($id){
       
        $stuffs= karmandjaded::find($id);
         return view('employee/edit',['stuffs'=>$stuffs]);
      }
  
      public function update(Request $request){
  
        $data=karmandjaded::find($request->id);
        $data->name=$request->name;
        $data->E_name=$request->E_name;
        $data->lastname=$request->lastname;
        $data->E_lastname=$request->E_lastname;
        $data->Fname=$request->Fname;
        $data->padarkalan=$request->padarkalan;
        $data->tarikhtawalod=$request->tarikhtawalod;
        $data->numberTazkira=$request->numberTazkira;
        $data->safha=$request->safha;
        $data->jold=$request->jold;
        $data->sokonatAsly=$request->sokonatAsly;
        $data->sokonatFehly=$request->sokonatFehly;
        $data->jensiat=$request->jensiat;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->halatMadany=$request->halatMadany;
        $data->mashMaslaky=$request->mashMaslaky;
        $data->mashShakhsy=$request->mashShakhsy;
        $data->codeTashkilaty=$request->codeTashkilaty;
        $data->milyat=$request->milyat;
        $data->sazmanSiasy=$request->sazmanSiasy;
        $data->groupeKhoon=$request->groupeKhoon;
        $data->role=$request->role;
        $data->photo=$request->photo;
        $data->save();
        return redirect('/employee/listKarmandan')->with('updat', 'تغییرات موفقانه انجام شد');
      }

      public function delete($id){
        $data=karmandjaded::find($id);
        $data->delete();
        return redirect('/employee/listKarmandan')->with('del','حذف موفقانه انجام شد');
      }
}
