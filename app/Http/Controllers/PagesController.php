<?php

namespace App\Http\Controllers;
use App\Page;
use App\Http\Requests;
use App\Model;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;

class PagesController extends Controller {

public function Index () {
  $pages = Page::all();
  return view ('show')->with('pages',$pages);
}

public function getAbout () {
    
}

public function getContact () {
  return "Hello contact page";  
}

public function getShow () {
  $pages = Page::all();
  return view ('show')->with('pages',$pages);

}

public function show () {
  //$post = Page::find($id);
  $pages = Page::all();
  return view ('show')->with('pages', $pages);
}

public function create () {
 
  return view('create');
}  

public function store (Request $request) {


$request->validate([
'title' => 'required',
'slug' => 'required',
'content' => 'required|min:3',
]);
//dd($request->all());

$Page = new Page;
$Page->title = request('title');
$Page->slug = request('slug');
$Page->content = request('content');
$Page->save;
Page::create($request->all());

return redirect('/create'); 
}




}