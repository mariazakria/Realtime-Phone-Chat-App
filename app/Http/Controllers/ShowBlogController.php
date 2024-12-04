<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;


use App\Models\BlogsModel;

use App\Services\CompressorService;

class ShowBlogController extends Controller
{

    function __construct(CompressorService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $blogs = BlogsModel::latest()->paginate(6);
        if ($request->ajax()) {
            return view('app.pagination.blogs.index', compact('blogs'))->render();
        }


        return view("app.index_blog", compact('blogs'));
    }


    public function blog($slug)
    {


        $blog = BlogsModel::where('slug', $slug)->get()[0] ?? abort(404);
        $blogs = BlogsModel::latest()->limit(4)->get();

        $imageExists = Storage::disk('public')->exists($blog->image);

        if ($imageExists) {
            $imagePath = public_path('storage' . $blog->image);
            // dd($imagePath);
            $imageSize = getimagesize($imagePath);
            $imageWidth = $imageSize[0];
            $imageHeight = $imageSize[1];
            $service = $this->service;
        } else {
            $imageWidth = 0;
            $imageHeight = 0;
            $service = false;
        }


        // dd($imageWidth, $imageHeight);
        return view('app.blog', compact('blog', 'blogs', 'imageWidth', 'imageHeight', 'service'));
    }
}
