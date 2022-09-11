<?php

namespace App\Http\Controllers;

use App\Models\Hos;
use App\Models\Catagory;
use App\Models\Catagory2;
use App\Models\Catagory3;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function view_catagory()
   {
    $data=Catagory::all();
    return view('admin.view_catagory',compact('data'));
   }
   public function add_catagory(Request $request)
   {
    $data= New Catagory;
    $data->nom=$request->nom;
    $data->save();
   return redirect()->back();

   }
   public function delete($id)
   {
    $data=Catagory::find($id);
    $data->delete();
    return redirect()->back();
   }
   //  view_catagory2
   public function view_catagory2()
   {
    $dat=Catagory2::all();
    return view('admin.view_catagory2',compact('dat'));
   }
   public function add_catagory2(Request $request)
   {
    $dat= new Catagory2;
    $dat->nom=$request->catagory2;
    $dat->save();
    return redirect()->back();
   }
   public function delete2($id)
   {
    $dat=Catagory2::find($id);
    $dat->delete();
    return redirect()->back();
   }
     public function view_catagory3()
  {
    $form=Catagory3::all();
    return view('admin.view_catagory3',compact('form'));
   }
   public function add_catagory3(Request $request)
   {
    $form=new Catagory3;
    $form->nom=$request->nom;
    $form->date=$request->date;
    $form->save();
    return redirect()->back();
   }
   public function add_hos(Request $request)
    {
        $det= new Hos;
        $det->name=$request->name;
        $det->date=$request->date;
        $det->heur=$request->heur;
        $det->save();
        return redirect()->back();
    }
    public function update_hos($id)
    {
     $det=Hos::find($id);

        return view('admin.update_hos',compact('det'));
    }
}
