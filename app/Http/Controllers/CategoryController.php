<?php

namespace App\Http\Controllers;

use App\Models\ListCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $categories = ListCategory::orderBy('created_at', 'DESC')->get();
    return view('pages.category', compact('categories'));
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
    // validation
    $request->validate([
      'name' => 'required|max:150|string',
    ]);

    // save to DB
    ListCategory::create([
      'name' => $request->name,
      'created_at' => now()
    ]);

    // redirect
    return back()->with('status', 'Category add success!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(ListCategory $category)
  {
    return view('pages.edit-category', compact('category'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, ListCategory $category)
  {
    // validation
    $request->validate([
      'name' => 'required|max:150|string',
    ]);

    // save
    $category->update([
      'name' => $request->name,
      'updated_at' => now(),
    ]);
    // redirect
    return redirect()->route('categories.index')->with('status', 'category deleted!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(ListCategory $category)
  {
    $category->delete();
    return redirect()->route('categories.index')->with('status', 'category deleted!');
  }
}
