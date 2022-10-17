<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $videos = Video::orderBy('updated_at', 'DESC')->paginate(10);
    return view('pages.home', compact('videos'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('pages.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // validation form
    $request->validate([
      'title' => 'required|max:255',
      'description' => 'required|max:1000',
      'url_img' => 'required|max:2000|mimes:png,jpg|image',
    ]);

    $validateImg = $request->file('url_img')->store('cover');
    // save to DB
    Video::create([
      'title' => $request->title,
      'description' => $request->description,
      'url_img' => $validateImg,
      'actor' => $request->actor,
      'nationality' => $request->nationality,
      'year_created' => $request->year_created,
      'created_at' => now()
    ]);

    // redirect
    return redirect()->route('home')->with('status', 'Vidéo enregistrer');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Video $video)
  {
    // dd($video);
    return view('pages.show', compact('video'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Video $video)
  {
    return view('pages.edit', compact('video'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Video $video)
  {
    //1-validate form
    $request->validate([
      'title' => 'required|max:255',
      'description' => 'required|max:1000',
      'url_img' => 'required|sometimes|max:2000|mimes:png,jpg|image',
    ]);

    // 2-if image
    if ($request->hasFile('url_img')) {
      // delete the images
      Storage::delete($video->url_img);
      // store new image in storage
      $video->url_img = $request->file('url_img')->store('cover');
    }

    // 3-upadte and store to DB
    $video->update([
      'title' => $request->title,
      'description' => $request->description,
      'url_img' => $video->url_img,
      'actor' => $request->actor,
      'nationality' => $request->nationality,
      'year_created' => $request->year_created,
      'created_at' => now()
    ]);

    // 4-redirec
    return redirect()->route('videos.show', $video->id)->with('status', 'update ok');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Video $video)
  {
    $video->delete();
    return redirect()->route('home')->with('status', 'Video deleted!');
  }
}
