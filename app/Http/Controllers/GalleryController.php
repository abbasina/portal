<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Gallery;
use Illuminate\Http\Request;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request, [
            'image' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif|max:8000'
        ]);

        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $org_img = $thm_img = true;

            if( ! File::exists('images/gallery/originals/')) {
                $org_img = File::makeDirectory(public_path('images/gallery/originals/'), 0777, true);
            }
            if ( ! File::exists('images/gallery/thumbnails/')) {
                $thm_img = File::makeDirectory(public_path('images/gallery/thumbnails'), 0777, true);
            }

            foreach($images as $key => $image) {

                $gallery = new Gallery;

                $filename = rand(1111,9999).time().'.'.$image->getClientOriginalExtension();

                $org_path = 'images/gallery/originals/' . $filename;
                $thm_path = 'images/gallery/thumbnails/' . $filename;

                $gallery->image     = 'images/gallery/originals/'.$filename;
                $gallery->thumbnail = 'images/gallery/thumbnails/'.$filename;
                $gallery->title     = $request->title;
                $gallery->status    = $request->status;
                $gallery->album_id    = $request->album_id;

                if ( ! $gallery->save()) {
                    
                    return redirect()->back()->with('faild','Gallery could not be updated.')->withInput();
                }

               if (($org_img && $thm_img) == true) {
                   Image::make($image)->fit(900, 500, function ($constraint) {
                           $constraint->upsize();
                       })->save($org_path);
                   Image::make($image)->fit(270, 160, function ($constraint) {
                       $constraint->upsize();
                   })->save($thm_path);
               }
            }
        }

        
        return redirect()->route('manager.albums.upload',$gallery->album_id )->with('success','تصاویر مربوطه با موفقیت در این آلبوم آپلود شد.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $this->validate($request, [
            'id' => 'required|exists:galleries,id',
            
        ]);
        $image = Gallery::findOrFail($request->id);
        $index=$image->image;
        
        $image->album->update([
            'index' => $index,
        ]);

        if ( ! $image->save()) {
            
            return redirect()->back()->with('failed','انتخاب شاخص شکست خورد.');
        }

        return redirect()->back()->with('success','تصویر شاخص این آلیوم با موفقیت انتخاب شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Gallery::findOrFail($id);

        if ($post->delete()) {
            
            return redirect()->back()->with('success','تصویر مورد نظر با موفقیت حذف شد.');
        }
           
            return redirect()->back()->with('failed','حذف تصویر مورد نظر با شکست مواجه شد.');
        

    }
}