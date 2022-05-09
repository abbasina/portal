<?php

namespace App\Http\Controllers\manager;

use App\Album;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\Albums\storeRquest;
use App\Http\Requests\Manager\Albums\UpdateRequest;


class AlbumsController extends Controller
{

      public function all(){
        
        $albums=Album::paginate(10);
        return view('managerpanel.albums.all',compact('albums'));
   }
      public function create(){
        return view('managerpanel.albums.create');
   }
      public function store(storeRquest $request){
        $validatedData=$request->validated();
       $createdalbum = Album::create([
          'title' => $validatedData['title'],
          'photographer' => $validatedData['photographer'],
        ]);
        if(!$createdalbum){
          return redirect()->route('managerpanel.albums.all')->with('failed','آلبوم افزوده نشد.');
          }
        //   User::where('role_id',1)->first()->albums()->attach($createdalbum->id);
          return redirect()->route('managerpanel.albums.all')->with('success','آلبوم جدید با موفقیت ایجاد شد.');
        
   }
   public function delete($album_id){
     $album=Album::find($album_id);
     $album->delete();
     return back()->with('success',"آلبوم با موفقیت حذف شد");

   }
   public function edit($album_id){
     $album=Album::find($album_id);
     return view('managerpanel.albums.edit',compact('album'));

   }
   public function update(UpdateRequest $request,$album_id){
    $validatedData=$request->validated();
    $album=Album::find($album_id);
    $updatedalbum=$album->update([
      'title' => $validatedData['title'],
    ]);
    if(!$updatedalbum){
      return back()->with('failed','آلبوم ویرایش نشد.');
      }
      return back()->with('success','آلبوم با موفقیت ویرایش شد.');

   }
   public function upload($album_id){
    $images=Gallery::where('album_id',$album_id)->paginate(10);
    $album=Album::find($album_id);
    if(session('success')){
        
        return view('managerpanel.galleries.all',compact('images', 'album'))->with('success',session('success'));
    }
    
    return view('managerpanel.galleries.all',compact('images', 'album'));
   }

}
