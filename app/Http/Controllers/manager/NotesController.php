<?php

namespace App\Http\Controllers\manager;

use App\Note;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\Notes\storeRquest;
use App\Http\Requests\Manager\Notes\UpdateRequest;
use App\tag;
use Carbon\Carbon;
use Verta;

class NotesController extends Controller
{
      public function all(){
        
        $notes=Note::paginate(10);
      
        return view('managerpanel.notes.all',compact('notes'));
   }
      public function create(){
        
        
        return view('managerpanel.notes.create',compact([]));
   }
       public function store(storeRquest $request){
        
        $validatedData=$request->validated();
           
        $createdtags = tag::create([
        'tags'=> $validatedData['tags'],
        ]);
         if(!$createdtags){
        return back()->with('failed','یادداشت افزوده نشد.');
        }
        $tags_id=$createdtags->id;


        $filename = time().$validatedData['pngfile']->getClientOriginalName();
        
        
        $request->pngfile->move(base_path('public/pngarchive'), $filename);
        
        $user_id=auth()->user()->id;
       
       
        $creatednote = Note::create([
          'imageUrl' => $filename,
          'title' => $validatedData['title'],
          'description' => $validatedData['description'],
          'notebody' => $validatedData['notebody'],
          'tags_id' => $tags_id,
          'user_id' => $user_id,
        ]);

        if(!$creatednote){
          return back()->with('failed','یادداشت افزوده نشد.');
          }
          return back()->with('success','یادداشت جدید با موفقیت ایجاد شد.');
        
   }

   public function delete($note_id){
     $note=Note::find($note_id);
     $tag_id=$note->tags_id;
     $tag=tag::find($tag_id);
     $note->delete();
     $tag->delete();
     

     return back()->with('success',"یادداشت با موفقیت حذف شد");

   }
   public function edit($note_id){
     
     $note=Note::find($note_id);
     $tags=tag::where('id',$note->tags_id)->first()->tags;

     return view('managerpanel.notes.edit',compact(['note','tags']));

   }
   public function updatecontent(UpdateRequest $request,$note_id){

    $validatedData=$request->validated();
    $note=Note::find($note_id);
    $tagtodelete=tag::find($note->tags_id);
      
    $createdtags=$tagtodelete->update([
    'tags'=> $validatedData['tags'],
  ]);
  if(!$createdtags){
    return back()->with('failed','یادداشت افزوده نشد.');
    }




    $filename = time().$validatedData['pngfile']->getClientOriginalName();
        
        
    $request->pngfile->move(base_path('public/pngarchive'), $filename);

    
    $creatednote=$note->update([
      'imageUrl' => $filename,
      'title' => $validatedData['title'],
      'description' => $validatedData['description'],
      'notebody' => $validatedData['notebody'],
      'tags_id' => $note->tags_id,
    ]);
    
    if(!$creatednote){
      return back()->with('failed','یادداشت ویرایش نشد.');
      }
      return back()->with('success','یادداشت با موفقیت ویرایش شد.');
    

   }
   public function uploadimage(){
    
    $this->validate(request() , [
      'upload' => 'required|mimes:jpeg,png,bmp,jpg',
    ]);
    
    $year = Carbon::now()->year;
    $imagePath = "/uploads/manager/{$year}/";

    

    $file = request()->file('upload');
    $filename = $file->getClientOriginalName();

    if(file_exists(public_path($imagePath) . $filename)) {
        $filename = Carbon::now()->timestamp . $filename;
    }

    $file->move(public_path($imagePath) , $filename);
    $url = $imagePath . $filename;

    $msg = 'تصویر مورد نظر با موفقیت آپلود شد.';
    $CKEditorFuncNum = request()->input('CKEditorFuncNum');
    $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
       
    @header('Content-type: text/html; charset=utf-8'); 
    echo $response;
   }
   public function shownote($note_id){
    $v = new verta();
    $note=Note::find($note_id);
    return view('managerpanel.notes.show',compact(['note',$v]));
   }
   public function confirm($note_id){
     
    $note=Note::find($note_id);
    
    $updatednote=$note->update([
      'confirm' => '1'
    ]);
    
    if(!$updatednote){
    return back()->with('failed','یادداشت تایید نشد.');
  }
  return back()->with('success','یادداشت با موفقیت تایید شد.');

   }
   public function publish($note_id){
    $note=Note::find($note_id);
    $updatednote=$note->update([
      'publish' => '1'
    ]);
    if(!$updatednote){
    return back()->with('failed','یادداشت منتشر نشد.');
  }
  return back()->with('success','یادداشت با موفقیت منتشر شد.');

   }
   public function unconfirm($note_id){
    $note=Note::find($note_id);
    $updatednote=$note->update([
      'confirm' => '0'
    ]);
    if(!$updatednote){
    return back()->with('failed','وضعیت یادداشت به عدم تایید تغییر نکرد.');
  }
  return back()->with('success','وضعیت یادداشت با موفقیت به عدم تایید تغییر کرد.');

   }
   public function unpublish($note_id){
    $note=Note::find($note_id);
    $updatednote=$note->update([
      'publish' => '0'
    ]);
    if(!$updatednote){
    return back()->with('failed','وضعیت یادداشت به عدم انتشار تغییر نکرد.');
  }
  return back()->with('success','یادداشت با موفقیت عدم انتشار شد.');

   }
}
