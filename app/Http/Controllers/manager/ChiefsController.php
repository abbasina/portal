<?php

namespace App\Http\Controllers\manager;

use App\Chief;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\Chiefs\storeRquest;
use App\Http\Requests\Manager\Chiefs\UpdateRequest;

class ChiefsController extends Controller
{
      public function all(){
        $chiefs=Chief::paginate(10);
        return view('managerpanel.chiefs.all',compact('chiefs'));
   }
      public function create(){
        return view('managerpanel.chiefs.create');
   }
      public function store(storeRquest $request){
        $validatedData=$request->validated();
       $createdchief = Chief::create([
          'name' => $validatedData['title']
        ]);
        if(!$createdchief){
          return back()->with('failed','سردبیر افزوده نشد.');
          }
          return back()->with('success','سردبیر جدید با موفقیت ایجاد شد.');
        
   }
   public function delete($chief_id){
     $chief=Chief::find($chief_id);
     $chief->delete();
     return back()->with('success',"سردبیر با موفقیت حذف شد");

   }
   public function edit($chief_id){
     $chief=Chief::find($chief_id);
     return view('managerpanel.chiefs.edit',compact('chief'));

   }
   public function update(UpdateRequest $request,$chief_id){
    $validatedData=$request->validated();
    $chief=Chief::find($chief_id);
    $updatedchief=$chief->update([
      'name' => $validatedData['title'],
    ]);
    if(!$updatedchief){
      return back()->with('failed','سردبیر ویرایش نشد.');
      }
      return back()->with('success','سردبیر با موفقیت ویرایش شد.');

   }
}
