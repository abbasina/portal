<?php

namespace App\Http\Controllers\manager;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\Comments\storeRquest;
use App\Http\Requests\Manager\Comments\UpdateRequest;

class CommentsController extends Controller
{
  public function unconfirmed(){
    $comments=Comment::where('confirmStatus','0')->paginate(10);
    return view('managerpanel.comments.unconfirmed',compact('comments'));
    
  }
  public function confirmed(){
    $comments=Comment::where('confirmStatus','1')->paginate(10);
    return view('managerpanel.comments.confirmed',compact('comments'));

  }
  public function confirm($comment_id){
    $comment=Comment::find($comment_id);
    $updatedcomment=$comment->update([
      'confirmStatus' => '1'
    ]);
    if(!$updatedcomment){
    return back()->with('failed','وضعیت نظر به تایید شده تغییر نکرد.');
  }
  return back()->with('success','نظر با موفقیت تایید شد.');

  }
  public function unconfirm($comment_id){
    $comment=Comment::find($comment_id);
    $updatedcomment=$comment->update([
      'confirmStatus' => '0'
    ]);
    if(!$updatedcomment){
    return back()->with('failed','نظر در وضعیت تایید شده باقی ماند.');
  }
  return back()->with('success','نظر با موفقیت به وضعیت تایید نشده تغییر یافت.');

  }














      public function all(){
        $comments=Comment::paginate(10);
        return view('managerpanel.comments.all',compact('comments'));
   }
      public function create(){
        return view('managerpanel.comments.create');
   }
      public function store(storeRquest $request){
        $validatedData=$request->validated();
       $createdcomment = Comment::create([
          'name' => $validatedData['title']
        ]);
        if(!$createdcomment){
          return back()->with('failed','نظر افزوده نشد.');
          }
          return back()->with('success','نظر جدید با موفقیت ایجاد شد.');
        
   }
   public function delete($comment_id){
     $comment=Comment::find($comment_id);
     $comment->delete();
     return back()->with('success',"نظر با موفقیت حذف شد");

   }
   public function edit($comment_id){
     $comment=Comment::find($comment_id);
     return view('managerpanel.comments.edit',compact('comment'));

   }
   public function update(UpdateRequest $request,$comment_id){
    $validatedData=$request->validated();
    $comment=Comment::find($comment_id);
    $updatedcomment=$comment->update([
      'name' => $validatedData['title'],
    ]);
    if(!$updatedcomment){
      return back()->with('failed','نظر ویرایش نشد.');
      }
      return back()->with('success','نظر با موفقیت ویرایش شد.');

   }
}
