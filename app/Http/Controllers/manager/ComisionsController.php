<?php
namespace App\Http\Controllers\manager;

use App\Comision;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\Comisions\UpdateRequest;
use App\Http\Requests\Manager\Comisions\storeRequest;

class ComisionsController extends Controller
{
      public function all(){
        $comisions=Comision::paginate(10);
        return view('managerpanel.comisions.all',compact('comisions'));
   }
      public function create(){
      
        return view('managerpanel.comisions.create');
   }
      public function store(storeRequest $request){
        $validatedData=$request->validated();
       $createdcomision = Comision::create([
          'name' => $validatedData['title']
        ]);
        if(!$createdcomision){
          return back()->with('failed','کمیسیون افزوده نشد.');
          }
          return back()->with('success','کمیسیون جدید با موفقیت ایجاد شد.');
        
   }
   public function delete($comision_id){
     $comision=Comision::find($comision_id);
     $comision->delete();
     return back()->with('success',"کمیسیون با موفقیت حذف شد");

   }
   public function edit($comision_id){
     $comision=Comision::find($comision_id);
     return view('managerpanel.comisions.edit',compact('comision'));

   }
   public function introduce($comision_id){
     $comision=Comision::find($comision_id);
     return view('managerpanel.comisions.introduce',compact('comision'));

   }
   public function update(UpdateRequest $request,$comision_id){
    $validatedData=$request->validated();
    $comision=Comision::find($comision_id);
    $updatedcomision=$comision->update([
      'name' => $validatedData['title'],
    ]);
    if(!$updatedcomision){
      return back()->with('failed','کمیسیون ویرایش نشد.');
      }
      return back()->with('success','کمیسیون با موفقیت ویرایش شد.');

   }
}
