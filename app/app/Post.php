<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class Post extends Model
{
    //

    protected $fillable = [


        'title',
        'content',
        'image',
        'post_by',
        'views'

    ];

    public function image($image, $blog){
        if(request()->hasfile($image)){  
            $file = request()->file($image);
            $extention = $file->getClientOriginalExtension();
            $time = md5(time());
            $filename=$time.'.'.$extention;
            $ff = Image::make(request()->file($image))->resize(370,220)->save('images/'.$filename);
            $blog->image = $filename;
    }
  }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
