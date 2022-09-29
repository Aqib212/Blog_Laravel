<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home ()
    {
        return view('front.home.home',[
            'articles'      => Article::where('status', 1)->latest()->take(3)->get(),
            'blogs'      => Blog::where('status', 1)->latest()->take(3)->get(),
        ]);
    }

    public function articleDetails ($slug)
    {
        return view('front.articles.details', [
            'article'           => Article::where('slug', $slug)->first(),
            'recentArticles'    => Article::where('status', 1)->latest()->take(3)->get(),
        ]);
    }

    public function blogDetails ($slug)
    {
        return view('front.blogs.details',[
            'blog'           => Blog::where('slug', $slug)->first(),
            'recentblogs'    => Blog::where('status', 1)->latest()->take(3)->get(),
        ]);
    }
}
