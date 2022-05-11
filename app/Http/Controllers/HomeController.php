<?php

namespace App\Http\Controllers;

use App\Album;
use App\Article;
use App\Capital;
use App\Comment;
use App\Gallery;
use App\heading;
use App\Note;
use App\Video;
use Verta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tehran=Capital::where('Ostan',8)->first();
        $hotnews=Article::orderBy("created_at")->take(5)
        ->join('comisions', 'articles.comision_id', '=', 'comisions.id')
        ->select('articles.*','comisions.name AS comisionname')
        ->get();
        $hotnews=$hotnews->where('publish',1);

        $topviews=Article::orderBy("viewCount")->take(5)->get();
        $videos[1]=Video::find(1);
        $videos[2]=Video::find(2);
        $videos[3]=Video::find(3);
        $videos[4]=Video::find(4);
        $heading=heading::find(1);
        $notes=Note::where('publish','1')->orderBy("updated_at")->take(4)->get();
        
        
        
        return view('front.index',compact('hotnews','topviews','videos','heading','notes','tehran'));
        
    }
    public function search()
    {
        
        $key = request('keyword');
        if($key){
            $articles = Article::search($key)->latest('updated_at')
            ->join('capitals', 'articles.capital_id', '=', 'capitals.id')
            ->join('comisions', 'articles.comision_id', '=', 'comisions.id')
            ->select('articles.*','capitals.name AS capitalname','comisions.name AS comisionname')
            ->paginate(10);
            if(count($articles)==0){
            return redirect('/newsarchive')->with('failed',
            'تیتر و محتوای هیچ خبری با عبارت مورد نظر شما تطبیق نداشت.'
                );
            }

            
        }
        else{

            $articles= Article::latest('updated_at')
            ->join('capitals', 'articles.capital_id', '=', 'capitals.id')
            ->join('comisions', 'articles.comision_id', '=', 'comisions.id')
            ->select('articles.*','capitals.name AS capitalname','comisions.name AS comisionname')
            ->paginate(10);
        }
        
        

        
        return view('front.newsarchive', compact('articles','key'));
    

        
       
        
    }

    public function cities($id)
    {
        $capital=Capital::where('Ostan',$id)->first();
        return response([
            'city_name' => 'کلانشهر '.$capital->name,
            'city_people_amount' => $capital->city_people_amount,
            'city_places' => $capital->city_places,
            'city_address' => $capital->city_address,
            'city_tel' => $capital->city_tel,
            'city_website' => $capital->city_website,
            'city_website_url' => $capital->city_website_url,
            'imageUrl' => $capital->imageUrl,
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function newsdetails($article_id)
    {
        
        
        $article= Article::where('articles.id',$article_id)
            ->join('capitals', 'articles.capital_id', '=', 'capitals.id')
            ->join('comisions', 'articles.comision_id', '=', 'comisions.id')
            ->join('tags', 'articles.tags_id', '=', 'tags.id')
            ->select('articles.*',
            'capitals.name AS capitalname',
            'comisions.name AS comisionname',
            'tags.tags AS tagsname')->first();
        $article->increment('viewCount');
            
        $comments = Comment::where('article_id',$article_id)
        ->where('confirmStatus' , '1')
        ->where('parent_id', '0')->latest()->with(['comments' => function($query) {
            $query->where('confirmStatus' , '1')->latest();
        }])->get();
        
        $v=new Verta();

        $previous = Article::where('id', '<', $article_id)->max('id');
        
        $next = Article::where('id', '>', $article_id)->min('id');
        
        
        
        return view('front.newsdetails', compact('article','v','comments','previous','next'));
    }
    public function notedetails($note_id)
    {
        
        $topviews=Article::orderBy("viewCount")->take(5)->get();
        $note= Note::find($note_id)
        ->join('tags', 'notes.tags_id', '=', 'tags.id')
        ->select('notes.*','tags.tags AS tags')->first();

        $note->increment('viewCount');
            
        // $comments = Comment::where('article_id',$article_id)
        // ->where('confirmStatus' , '1')
        // ->where('parent_id', '0')->latest()->with(['comments' => function($query) {
        //     $query->where('confirmStatus' , '1')->latest();
        // }])->get();
        
        

        $previous = Article::where('id', '<', $note_id)->max('id');
        
        $next = Article::where('id', '>', $note_id)->min('id');
        
        
        
        return view('front.notedetails', compact('note','previous','next','topviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function comment(){
        
        
        $this->validate(request(),[
            'comment' => 'required|min:5'
        ]);

        auth()->user()->comments()->create(\request()->all());

        // auth()->user()->comments()->create();
        return back()->with('success','نظر شما با موفقیت درج شد و در انتظار تایید است.');
    }
    public function images(){
        $albums=Album::orderBy('updated_at')->take(5)->get();
        $images=Gallery::latest('updated_at')->paginate(18);
        return view('front.gallery',compact('albums','images'));
    }
}
