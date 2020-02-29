<?php

namespace App\Http\Controllers;
use App\Category;
use App\Http\Requests;
use App\Model;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;

class CategoriesController extends Controller {

            public function Index () {
               //$post = Page::find($id);
               $categories = Category::all();
               return view ('categories')->with('categories', $categories);
            }

            public function category () {
             
            }



}