<?php
namespace App\Http\Controllers\manager;

use App\Comision;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\Comisions\introRequest;
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
   public function editintro(introRequest $request, $comision_id){
    $validatedData=$request->validated();

    $capital=Comision::find($comision_id);
    $updatedcomision=$capital->update([
      'introduce'=>$validatedData['introduce'],
      'boss'=>$validatedData['boss'],
      'boss_bio'=>$validatedData['boss_bio'],
      'chief'=>$validatedData['chief'],
      'chief_bio'=>$validatedData['chief_bio'],
      
    ]);
    if(isset($validatedData['boss_image'])!=null){
      $filename = time().$validatedData['boss_image']->getClientOriginalName();
      $request->boss_image->move(base_path('public/comisions'), $filename);
      $capital->update([
        'boss_image' => $filename,
      ]);
      }
    if(isset($validatedData['chief_image'])!=null){
      $filename = time().$validatedData['chief_image']->getClientOriginalName();
      $request->chief_image->move(base_path('public/comisions'), $filename);
      $capital->update([
        'chief_image' => $filename,
      ]);
      }
    if(!$updatedcomision){
      return back()->with('failed','معرفی کمیسیون ویرایش نشد.');
      }
      return back()->with('success','معرفی کمیسیون با موفقیت ویرایش شد.');

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
