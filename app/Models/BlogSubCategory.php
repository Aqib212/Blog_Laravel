<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogSubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','sub_category_name','status'];

    public static function saveOrUpdate($request, $id = null)
    {
        BlogSubCategory::updateOrCreate(['id'  => $id], [
            'category_id'   => $request->category_id,
            'sub_category_name' => $request->sub_category_name,
            'status'        => $request->status
        ]);
    }

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class,'category_id');
    }
}
