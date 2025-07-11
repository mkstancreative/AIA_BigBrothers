<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function createBlog(){
        $Blogs = Blog::latest()->get();
        return view('pages.blogs', ['Blogs'=> $Blogs]);
    }
    
    public function storeBlog(Request $request){

        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        
        $imagePath = $request->file('image')->store('blog_images', 'public');

        Blog::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'images' => $imagePath
        ]);

        return back()->with('success', 'Post Created Successfully');
    }

    public function showBlog($id){
        $Blog = Blog::FindOrFail($id);
        return view('pages.blog-edit', ['blog' => $Blog]);
    }

    public function updateBlog(Request $request, $id){

        $blog = Blog::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $blog->update([
            'title' => $validated['title'],
            'description' => $validated['description']
        ]);

        return back()->with('success', 'Post Updated Successfully');
    }

    public function destroyBlog($id){
        
        $Blogs = Blog::findOrFail($id);
        $Blogs->delete();

        return back();
        
    }
}
