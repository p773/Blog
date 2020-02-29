<?php

namespace App\Http\Controllers;
use App\Page;
use App\Category;
use App\Http\Requests;
use App\Model;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;

class PagesController extends Controller {

            public function Index () {
              $pages = Page::paginate(4);
              return view ('show')->with('pages',$pages);

            }

            public function getAbout () {
                
            }

            public function getContact () {
              return "Hello contact page";  
            }

            public function getShow () {
              $pages = Page::paginate(4);
              return view ('show')->with('pages',$pages);

            }

            public function show () {
              //$post = Page::find($id);
              //$pages = Page::all();
              $pages = Page::paginate(4);
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

            public function Cat () {
              //$post = Page::find($id);
              $categories = Category::all();
              return view ('create')->with('categories', $categories);
           }

           public function showcat ($category) {
            //var_dump($category);
            //die;
            $pages = Page::where('slug', $category)
            //->take(10)
              
            //->get()
            ->paginate(4);
            //var_dump($pages);
            //die;
            return view ('showcat')->with('pages', $pages);

                   //$post = Page::find($id);
            //$pages = Page::all();
            //$cat = $_GET['cat'];
            //$pages = Page::find($category);
          }



}