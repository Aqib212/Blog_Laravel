<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blog, $blogImage, $imageName, $imageDirectory, $imageUrl;

    public static function saveImage($request, $existImage = null)
    {
        self::$blogImage = $request->file('image');
        if (self::$blogImage)
        {
            if ($existImage)
            {
                if (file_exists($existImage))
                {
                    unlink($existImage);
                }
            }
            self::$imageName = 'biztrox'.time().'.'.self::$blogImage->getClientOriginalExtension();
            self::$imageDirectory = 'admin/assets/images/uploaded-images/blogs/';
            self::$blogImage->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {
            self::$imageUrl = $existImage;
        }
        return self::$imageUrl;
    }

    public static function createBlog ($request)
    {
        self::$blog                              = new Blog();
        self::$blog->blog_category_id            = $request->blog_category_id;
        self::$blog->blog_sub_category_id        = $request->blog_sub_category_id;
        self::$blog->blog_title                  = $request->blog_title;
        self::$blog->description                 = $request->description;
        self::$blog->image                       = self::saveImage($request);
        self::$blog->user_id                     = auth()->id();
        self::$blog->slug                        = str_replace(' ','-',$request->blog_title);
        self::$blog->status                      = $request->status;
        self::$blog->save();
    }

    public static function updateBlog ($request, $id)
    {
        self::$blog                              = Blog::find($id);
        self::$blog->blog_category_id            = $request->blog_category_id;
        self::$blog->blog_sub_category_id        = $request->blog_sub_category_id;
        self::$blog->blog_title                  = $request->blog_title;
        self::$blog->description                 = $request->description;
        self::$blog->image                       = self::saveImage($request, self::$blog->image);
        self::$blog->user_id                     = auth()->id();
        self::$blog->slug                        = str_replace(' ','-',$request->blog_title);
        self::$blog->status                      = $request->status;
        self::$blog->save();
    }

    public function blogCategory ()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function blogSubCategory ()
    {
        return $this->belongsTo(BlogSubCategory::class);
    }
}
