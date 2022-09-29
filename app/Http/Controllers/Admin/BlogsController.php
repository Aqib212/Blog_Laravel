<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogSubCategory;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    private $blog;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blogs.index',[
            'blogs'             => Blog::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return BlogSubCategory::where('status', 1)->get();
        return view('admin.blogs.create',[
            'blogCategories'   => BlogCategory::where('status', 1)->get(),
            'blogSubCategories'   => BlogSubCategory::where('status', 1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Blog::createBlog($request);
        return back()->with('success','Blog Created Successfully');
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
    public function edit($id)
    {
        return view('admin.blogs.edit',[
            'blogCategories'   => BlogCategory::where('status', 1)->get(),
            'blogSubCategories'   => BlogSubCategory::where('status', 1)->get(),
            'blog'              => Blog::find($id),
        ]);
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
        Blog::updateBlog($request,$id);
        return redirect('/blogs')->with('success','Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->blog = Blog::find($id);
        if ($this->blog->image)
        {
            if (file_exists($this->blog->image))
            {
                unlink($this->blog->image);
            }
        }
        $this->blog->delete();
        return back()->with('success','Blog Deleted Successfully');
    }

    public function getSubCategory ($id)
    {
        $subCategories = BlogSubCategory::where('category_id',$id)->get();
        return json_encode($subCategories);
    }
}
