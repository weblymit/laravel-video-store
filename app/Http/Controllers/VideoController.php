<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $videos = Video::paginate(10);
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
  public function destroy(Video $video)
  {
    $video->delete();
    return redirect()->route('home')->with('status', 'Video deleted!');
  }
}
