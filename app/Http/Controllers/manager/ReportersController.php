<?php

namespace App\Http\Controllers\manager;

use App\Reporter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\Reporters\storeRquest;
use App\Http\Requests\Manager\Reporters\UpdateRequest;

class ReportersController extends Controller
{
      public function all(){
        $reporters=Reporter::paginate(10);
        return view('managerpanel.reporters.all',compact('reporters'));
   }
      public function create(){
        return view('managerpanel.reporters.create');
   }
      public function store(storeRquest $request){
        $validatedData=$request->validated();
       $createdreporter = Reporter::create([
          'name' => $validatedData['title']
        ]);
        if(!$createdreporter){
          return back()->with('failed','خبرنگار افزوده نشد.');
          }
          return back()->with('success','خبرنگار جدید با موفقیت ایجاد شد.');
        
   }
   public function delete($reporter_id){
     $reporter=Reporter::find($reporter_id);
     $reporter->delete();
     return back()->with('success',"خبرنگار با موفقیت حذف شد");

   }
   public function edit($reporter_id){
     $reporter=Reporter::find($reporter_id);
     return view('managerpanel.reporters.edit',compact('reporter'));

   }
   public function update(UpdateRequest $request,$reporter_id){
    $validatedData=$request->validated();
    $reporter=Reporter::find($reporter_id);
    $updatedreporter=$reporter->update([
      'name' => $validatedData['title'],
    ]);
    if(!$updatedreporter){
      return back()->with('failed','خبرنگار ویرایش نشد.');
      }
      return back()->with('success','خبرنگار با موفقیت ویرایش شد.');

   }
}
