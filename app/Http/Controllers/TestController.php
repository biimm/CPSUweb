<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTag;
use App\Category;
use App\Tag;
use App\User;
use App\File;
use App\Research;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;
use App\Traits\ImageTrait;

class TestController extends Controller
{
    use ImageTrait;
    public function index()
    {
        /*$user = User::find(1);
        $user->blogs;
        return $user;*/

        /*$blog = Blog::find(1);
        $blog->user;
        $blog->category;
        $blog->tags;
        return $blog;*/

        $category = Category::find(1);
        $category->blogs->makeHidden('content');
        return $category;

        /*$tag = Tag::find(1);
        $tag->blogs;
        return $tag;*/
    }

    function slug()
    {
        $str = 'แข่งโน่นนี่นั่น';
        $str = strtolower(trim($str));
        $str = preg_replace('/[^a-z0-9-]/', '-', $str);
        $str = preg_replace('/-+/', "-", $str);
        return $str;
    }

    public function research()
    {
        $researches = Research::all();
        return $researches;
    }

    public function testExplode()
    {
        $name = 'ผศ.ดร.ปานใจ ธารทัศนวงศ์';
        print_r(explode('.', $name));
    }

    public function testTag()
    {
        $tags = Tag::all();
        foreach ($tags as $tag){
            $count = BlogTag::where('tag_id', $tag->id)->count();
            echo $tag->id.') '.$tag->name.' '.$count.'<br>';
        }
    }

    public function testImage()
    {
        $img = Image::cache(function($image) {
            return $image->make(storage_path().'\\app\\resize_3-1.jpg');
        }, 60, true);

        return $img->response('jpg');
    }

    public function resizeImg()
    {
        for ($i = 0; $i <= 0; $i++){
            $image = File::findOrFail(20);
            $file = Storage::disk('local')->get($image->original_name);

            $img = Image::make($file)->resize('400', null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->save(storage_path().'\\app\\resize_'.$image->name);
        }
        return 'resize complete';
    }

    public function testCompress()
    {
        $file = File::find(30);
        //$size = Storage::disk('local')->size($file->name);

        if (App::environment('local')) {
            //windows path
            $img_path = storage_path().'\\app\\'.$file->name;
        }else{
            //linux path
            $img_path = storage_path().'/app/'.$file->name;
        }

        if ($file->mime == 'image/jpeg')
            $image = imagecreatefromjpeg($img_path);

        elseif ($file->mime == 'image/gif')
            $image = imagecreatefromgif($img_path);

        elseif ($file->mime == 'image/png')
            $image = imagecreatefrompng($img_path);

        else
            return abort(500);

        if (App::environment('local')) {
            //windows path
            $des_path = storage_path().'\\app\\compress_'.$file->name;
        }else{
            //linux path
            $des_path = storage_path().'/app/compress_'.$file->name;
        }

        imagejpeg($image, $des_path, 25);

        return 'compress finish';

    }
}
