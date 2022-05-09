<?php

namespace App\Http\Controllers\manager;

use App\Article;
use App\Capital;
use App\Comision;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\Articles\storeRquest;
use App\Http\Requests\Manager\Articles\UpdateRequest;
use App\tag;
use Carbon\Carbon;
use Verta;

class ArticlesController extends Controller
{
      public function all(){
        $articles=Article::latest('created_at')
        ->join('capitals', 'articles.capital_id', '=', 'capitals.id')
        ->join('comisions', 'articles.comision_id', '=', 'comisions.id')
        ->select('articles.*',
        'capitals.name AS capitalname',
        'comisions.name AS comisionname')
        ->whereIn('articles.capital_id',auth()->user()->capitals()->pluck('id'))
        ->paginate(10);
      
        return view('managerpanel.articles.all',compact('articles'));
   }
      public function create(){
        $capitals=auth()->user()->capitals()->get();
        
        $comisions=Comision::all();
        
        return view('managerpanel.articles.create',compact(['comisions','capitals']));
   }
       public function store(storeRquest $request){
        
        $validatedData=$request->validated();   
        $createdtags = tag::create([
        'tags'=> $validatedData['tags'],
        ]);
         if(!$createdtags){
        return back()->with('failed','خبر افزوده نشد.');
        }
        $tags_id=$createdtags->id;


        $filename = time().$validatedData['pngfile']->getClientOriginalName();
        
        
        $request->pngfile->move(base_path('public/pngarchive'), $filename);
        
        
       
        $createdarticle = Article::create([
          'imageUrl' => $filename,
          'title' => $validatedData['title'],
          'slug' => $validatedData['title'],
          'description' => $validatedData['description'],
          'comision_id' => $validatedData['comision'],
          'capital_id' => $validatedData['capital'],
          'body' => $validatedData['articlebody'],
          'tags_id' => $tags_id,
        ]);
        if(!$createdarticle){
          return back()->with('failed','خبر افزوده نشد.');
          }
          return back()->with('success','خبر جدید با موفقیت ایجاد شد.');
        
   }

   public function delete($article_id){
     $article=Article::find($article_id);
     $article->delete();
     return back()->with('success',"خبر با موفقیت حذف شد");

   }
   public function edit($article_id){
     
     $article=Article::find($article_id);
     $tags=tag::where('id',$article->tags_id)->first()->tags;
     $comisions=Comision::all();
     $capitals=Capital::all();
     return view('managerpanel.articles.edit',compact(['article','comisions','capitals','tags']));

   }
   public function updatecontent(UpdateRequest $request,$article_id){

    $validatedData=$request->validated();
    $article=Article::find($article_id);
    $tagtodelete=tag::find($article->tags_id);
      
    $createdtags = tag::create([
    'tags'=> $validatedData['tags'],
  ]);
  if(!$createdtags){
    return back()->with('failed','خبر افزوده نشد.');
    }
    $tags_id=$createdtags->id;



    $filename = time().$validatedData['pngfile']->getClientOriginalName();
        
        
    $request->pngfile->move(base_path('public/pngarchive'), $filename);

    
    $createdarticle=$article->update([
      'imageUrl' => $filename,
      'title' => $validatedData['title'],
      'slug' => $validatedData['title'],
      'description' => $validatedData['description'],
      'comision_id' => $validatedData['comision'],
      'capital_id' => $validatedData['capital'],
      'body' => $validatedData['articlebody'],
      'tags_id' => $tags_id,
    ]);
    $tagtodelete->delete();
    if(!$createdarticle){
      return back()->with('failed','خبر ویرایش نشد.');
      }
      return back()->with('success','خبر با موفقیت ویرایش شد.');
    

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
   public function showarticle($article_id){
    $v = new verta();
    $article=Article::find($article_id);
    return view('managerpanel.articles.show',compact(['article',$v]));
   }
   public function confirm($article_id){
     
    $article=Article::find($article_id);
    
    $updatedarticle=$article->update([
      'confirm' => '1'
    ]);
    
    if(!$updatedarticle){
    return back()->with('failed','خبر تایید نشد.');
  }
  return back()->with('success','خبر با موفقیت تایید شد.');

   }
   public function publish($article_id){
    $article=Article::find($article_id);
    $updatedarticle=$article->update([
      'publish' => '1'
    ]);
    if(!$updatedarticle){
    return back()->with('failed','خبر منتشر نشد.');
  }
  return back()->with('success','خبر با موفقیت منتشر شد.');

   }
   public function unconfirm($article_id){
    $article=Article::find($article_id);
    $updatedarticle=$article->update([
      'confirm' => '0'
    ]);
    if(!$updatedarticle){
    return back()->with('failed','وضعیت خبر به عدم تایید تغییر نکرد.');
  }
  return back()->with('success','وضعیت خبر با موفقیت به عدم تایید تغییر کرد.');

   }
   public function unpublish($article_id){
    $article=Article::find($article_id);
    $updatedarticle=$article->update([
      'publish' => '0'
    ]);
    if(!$updatedarticle){
    return back()->with('failed','وضعیت خبر به عدم انتشار تغییر نکرد.');
  }
  return back()->with('success','خبر با موفقیت عدم انتشار شد.');

   }
}
