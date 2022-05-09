<?php

namespace App\Http\Controllers\manager;

use App\Confirmer;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\Confirmers\storeRquest;
use App\Http\Requests\Manager\Confirmers\UpdateRequest;

class ConfirmersController extends Controller
{
      public function all(){
        $confirmers=Confirmer::paginate(10);
        return view('managerpanel.confirmers.all',compact('confirmers'));
   }
      public function create(){
        return view('managerpanel.confirmers.create');
   }
      public function store(storeRquest $request){
        $validatedData=$request->validated();
       $createdconfirmer = Confirmer::create([
          'name' => $validatedData['title']
        ]);
        if(!$createdconfirmer){
          return back()->with('failed','تاییدکننده افزوده نشد.');
          }
          return back()->with('success','تاییدکننده جدید با موفقیت ایجاد شد.');
        
   }
   public function delete($confirmer_id){
     $confirmer=Confirmer::find($confirmer_id);
     $confirmer->delete();
     return back()->with('success',"تاییدکننده با موفقیت حذف شد");

   }
   public function edit($confirmer_id){
     $confirmer=Confirmer::find($confirmer_id);
     return view('managerpanel.confirmers.edit',compact('confirmer'));

   }
   public function update(UpdateRequest $request,$confirmer_id){
    $validatedData=$request->validated();
    $confirmer=Confirmer::find($confirmer_id);
    $updatedconfirmer=$confirmer->update([
      'name' => $validatedData['title'],
    ]);
    if(!$updatedconfirmer){
      return back()->with('failed','تاییدکننده ویرایش نشد.');
      }
      return back()->with('success','تاییدکننده با موفقیت ویرایش شد.');

   }
}
