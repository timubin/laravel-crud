<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller



{
    
    protected $blogs;
    protected $blog;
    public function addBlog (){
        return view ('blog.add-blog');
    }
    public function newBlog (Request $request){
       
     Blog::createBlog($request);
  
     return redirect()->back()->with('message','Blog Created Successfully......');
       /*  another method  */
       /*  Blog::create($request->all()); */
    }

    public function manageBlog(){
        $this->blogs= Blog::all();
        
        return view('blog.manage-blog', ['blogs'=> $this->blogs]);
    }

    public function deleteBlog($blogId){
       $this->blog=Blog::find($blogId);
       if(file_exists($this->blog->image)){
           unlink($this->blog->image);
       }
       $this->blog->delete();
       return redirect()->back()->with('message','Blog Deleted Successfully');
    }

    public function editBlog($id){
        $this->blog =Blog::find($id);
        return view('blog.edit',['blog'=>$this->blog]);
    }

    public function updateBlog (Request $request){
        Blog::updateBlog($request);
        return redirect('/manage-blog')->with('message', 'Blog update successfully...');
    }
}
