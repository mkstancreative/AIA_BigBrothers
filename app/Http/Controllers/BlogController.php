<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function createBlog(){
        return view('pages.blogs');
    }
    

    public function storeBlog(Request $request){}

    public function showBlog($id){}

    public function updateBlog(Request $request){}

    public function destroyBlog($id){
        
    }
}
