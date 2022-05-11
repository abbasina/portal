<?php

namespace App\Http\Controllers\manager;

use App\Capital;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\Capitals\storeRquest;
use App\Http\Requests\Manager\Capitals\UpdateRequest;
use App\User;

class CapitalsController extends Controller
{

      public function all(){
        
        $capitals=Capital::paginate(10);
        return view('managerpanel.capitals.all',compact('capitals'));
   }
      public function create(){
        return view('managerpanel.capitals.create');
   }
      public function store(storeRquest $request){
        $validatedData=$request->validated();

        $filename = time().$validatedData['imageUrl']->getClientOriginalName();
        $request->imageUrl->move(base_path('public/capitals'), $filename);

       $createdcapital = Capital::create([
          'name' => $validatedData['title'],
          'Ostan' => $validatedData['Ostan'],
          'city_people_amount' => $validatedData['city_people_amount'],
          'city_places' => $validatedData['city_places'],
          'city_address' => $validatedData['city_address'],
          'city_tel' => $validatedData['city_tel'],
          'city_website' => $validatedData['city_website'],
          'city_website_url' => $validatedData['city_website_url'],
          'imageUrl' => $filename,
        ]);
        if(!$createdcapital){
          return back()->with('failed','کلانشهر افزوده نشد.');
          }
          User::where('role_id',1)->first()->capitals()->attach($createdcapital->id);
          return back()->with('success','کلانشهر جدید با موفقیت ایجاد شد.');
        
   }
   public function delete($capital_id){
     $capital=Capital::find($capital_id);
     $capital->delete();
     return back()->with('success',"کلانشهر با موفقیت حذف شد");

   }
   public function edit($capital_id){
     $capital=Capital::find($capital_id);
     return view('managerpanel.capitals.edit',compact('capital'));

   }
   public function update(UpdateRequest $request,$capital_id){
    $validatedData=$request->validated();

    $capital=Capital::find($capital_id);
    $capital->update([
      'name' => $validatedData['title'],
      'Ostan' => $validatedData['Ostan'],
      'city_people_amount' => $validatedData['city_people_amount'],
      'city_places' => $validatedData['city_places'],
      'city_address' => $validatedData['city_address'],
      'city_tel' => $validatedData['city_tel'],
      'city_website' => $validatedData['city_website'],
      'city_website_url' => $validatedData['city_website_url'],
      
    ]);
    if(isset($validatedData['imageUrl'])!=null){
      $filename = time().$validatedData['imageUrl']->getClientOriginalName();
      $request->imageUrl->move(base_path('public/capitals'), $filename);
      $updatedcapital=$capital->update([
        'imageUrl' => $filename,
      ]);
      }
    if(!$updatedcapital){
      return back()->with('failed','کلانشهر ویرایش نشد.');
      }
      return back()->with('success','کلانشهر با موفقیت ویرایش شد.');

   }
   public function profile(){
     return view('managerpanel.profile');
   }
}
