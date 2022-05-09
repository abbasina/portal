<?php

namespace App\Http\Controllers\manager;

use App\Comment;
use App\heading;
use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MycommentsController extends Controller
{
      public function all(){
        $user=Auth::user();
        
        $mycomments=Comment::where('user_id',$user->id)->paginate(10);
        return view('managerpanel.mycomments.all',compact('mycomments'));
   }
   public function videos(){
     
     $videos=Video::all();
     return view('managerpanel.videos.edit',compact('videos'));
   }
   public function updatevideos(Request $request){
    $validatedData = $request->validate([
      'title-1' => 'required',
      'title-2' => 'required',
      'title-3' => 'required',
      'title-4' => 'required',
      'url-1' => 'required',
      'url-2' => 'required',
      'url-3' => 'required',
      'url-4' => 'required',
      
  ]);
  Video::where('id',1)->update([
    'title' => $validatedData['title-1'],
    'url' => $validatedData['url-1'],
  ]);
  Video::where('id',2)->update([
    'title' => $validatedData['title-2'],
    'url' => $validatedData['url-2'],
  ]);
  Video::where('id',3)->update([
    'title' => $validatedData['title-3'],
    'url' => $validatedData['url-3'],
  ]);
  $update=Video::where('id',4)->update([
    'title' => $validatedData['title-4'],
    'url' => $validatedData['url-4'],
  ]);
  if(!$update){
    return back()->with('failed','ویدئوها ویرایش نشد.');
    }
    return back()->with('success','ویدئوها با موفقیت ویرایش شد.');


   }
   public function heading(){
    $heading=heading::find(1);
    return view('managerpanel.heading.edit',compact('heading'));
   }
   public function updateheading(Request $request){
    $validatedData = $request->validate([
      'article_id' => 'required|exists:articles,id',
      'image' => 'required',
      
  ]);
  $update=heading::where('id',1)->update([
    'article_id' => $validatedData['article_id'],
    'image' => $validatedData['image'],
  ]);
  if(!$update){
    return back()->with('failed','تیتر یک ویرایش نشد.');
    }
    return back()->with('success','تیتر یک با موفقیت ویرایش شد.');
   }

}
