<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    private static $service, $serviceImage, $imageName, $imageDirectory, $imageUrl;

    public static function saveImage($request, $existImage = null)
    {
        self::$serviceImage = $request->file('image');
        if (self::$serviceImage)
        {
            if ($existImage)
            {
                if (file_exists($existImage))
                {
                    unlink($existImage);
                }
            }
            self::$imageName = 'biztrox'.time().'.'.self::$serviceImage->getClientOriginalExtension();
            self::$imageDirectory = 'admin/assets/images/uploaded-images/services/';
            self::$serviceImage->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {
            self::$imageUrl = $existImage;
        }
        return self::$imageUrl;
    }

    public static function createService ($request)
    {
        self::$service              = new Service();
        self::$service->title       = $request->title;
        self::$service->description = $request->description;
        self::$service->image       = self::saveImage($request);
        self::$service->slug        = str_replace(' ','-', $request->title);
        self::$service->status      = $request->status;
        self::$service->save();
    }

    public static function updateService ($request, $id)
    {
        self::$service              = Service::find($id);
        self::$service->title       = $request->title;
        self::$service->description = $request->description;
        self::$service->image       = self::saveImage($request, self::$service->image);
        self::$service->slug        = str_replace(' ','-', $request->title);
        self::$service->status      = $request->status;
        self::$service->save();
    }
}
