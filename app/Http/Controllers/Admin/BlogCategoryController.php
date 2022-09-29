<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    private $blogCategories;

    public function addCategory ()
    {
        return view('admin.blog-category.create');
    }

    public function newCategory (Request $request)
    {
//        return $request;
        BlogCategory::saveBlogCategory($request);
        return redirect()->back()->with('success','Blog Category Created Successfully');
    }

    public function manageCategory ()
    {
        $this->blogCategories = BlogCategory::latest()->get();
        return view('admin.blog-category.manage',[
            'blogCategories'    => $this->blogCategories
        ]);
    }

    public function editCategory ($id)
    {
        return view('admin.blog-category.edit',[
            'blogCategory'  => BlogCategory::find($id),
        ]);
    }

    public function updateCategory (Request $request, $id)
    {
        BlogCategory::updateCategory($request,$id);
        return redirect('/manage-blog-category')->with('success','Blog Category Edited Successfully');
    }

    public function deleteCategory ($id)
    {
        BlogCategory::find($id)->delete();
        return redirect('/manage-blog-category')->with('success','Blog Category Deleted Successfully');
    }
}
