<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ResizeImage;
;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::all();
        // dd($galleries);
        return view("gallery.index",compact('galleries'));
    }

    public function create(){
        return view("gallery.create");
    }

    public function store(Request $request){
       // dd($request->all());
       $request->validate([
        'title'       => 'required',
        'status'   => 'required',
        'image'        => 'required|image|mimes:jpg,png,jpeg,webp'
    ]);

    if ($request->hasFile('image')) {

        $path = public_path('wgdm/images/gallery/');
        !is_dir($path) &&
            mkdir($path, 0777, true);

        // $name = time() . '.' . $request->image->extension();
        $imageName = 'gallery'.'_'.time().uniqid().'.'.$request->image->extension();
        ResizeImage::make($request->file('image'))
            ->resize(570,480)
            ->save($path . $imageName);
    }

    Gallery::create([
        'partner'           => $request->partner,
        'title'             => $request->title,
        'image'              => $imageName,
        'status'             => $request->status,
       
    ]);

    return redirect()->back()->with('success','Gallery created successfully!');
    }


    public function edit($id)
    {
        $gallery = Gallery::where('id',$id)->first();
        // $partners = Service::where('status',1)->get();
        return view('gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($request->all());
        $gallery = Gallery::where('id',$id)->first();
        // dd($gallery);
            // dd($request->all());
          
            $image_path = public_path('wgdm/images/gallery/'.$gallery->image);
            if(file_exists($image_path)){
              unlink($image_path);
            }
     
         if ($request->hasFile('image')) {
             $path = public_path('wgdm/images/gallery/');
             !is_dir($path) &&
                 mkdir($path, 0777, true);
     
             // $name = time() . '.' . $request->image->extension();
             $imageName = 'gallery'.'_'.time().uniqid().'.'.$request->image->extension();
             ResizeImage::make($request->file('image'))
             ->resize(570,480)
                 ->save($path . $imageName);


                    $gallery->title    = $request->title;
                    $gallery->partner   = $request->partner;
                    $gallery->image       = $imageName;
                    $gallery->status    = $request->status;
                    $gallery->save();
                
         }else{
            $gallery->title    = $request->title;
            $gallery->partner   = $request->partner;
            $gallery->status    = $request->status;
            $gallery->save();
         }
         
                   

         return redirect()->back()->with('success','Gallery updated successfully!');
    }
}
