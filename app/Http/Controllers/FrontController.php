<?php

namespace App\Http\Controllers;

use App\FeaturedVideo;
use App\Post;
use App\sliderImage;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index ()
    {
        $sliderImages   = sliderImage::orderBy('id','DESC')->get();
        $post2          = Post::orderBy('id','DESC')->take(2)->get();
        $post3          = Post::orderBy('id','DESC')->take(3)->get();
        $post4          = Post::orderBy('id','DESC')->take(4)->get();
        $posts          = Post::orderBy('id','DESC')->get();
        $videos         = FeaturedVideo::orderBy('id','DESC')->first();
        return view('front.home.home',[
            'sliderImages'  => $sliderImages,
            'post2'         => $post2,
            'post3'         => $post3,
            'post4'         => $post4,
            'posts'         => $posts,
            'videos'        =>  $videos,
        ]);
    }

    public function contact ()
    {
        return view('front.contact.contact');
    }

    public function blog ()
    {
        $videos = FeaturedVideo::orderBy('id','DESC')->first();
        $post4  = Post::orderBy('id','DESC')->take(4)->get();
        $posts  = Post::orderBy('id','DESC')->get();
        return view('front.blog.blog',[
            'videos'  =>  $videos,
            'post4'   =>  $post4,
            'posts'   =>  $posts,
        ]);
    }

    public function about ()
    {
        $post2  = Post::orderBy('id','DESC')->take(2)->get();
        $post3  = Post::orderBy('id','ASC')->take(3)->get();
        $post4  = Post::orderBy('id','DESC')->take(4)->get();
        $videos = FeaturedVideo::orderBy('id','DESC')->first();
        return view('front.about.about',[
            'post2'     => $post2,
            'post3'     => $post3,
            'post4'     => $post4,
            'videos'    =>  $videos,
        ]);
    }

    public function single ()
    {
        $post3  = Post::orderBy('id','DESC')->take(3)->get();
        $videos = FeaturedVideo::orderBy('id','DESC')->first();
        return view('front.single.single',[
            'postThrees'     => $post3,
            'videos'         => $videos,
        ]);
    }

    public function typo ()
    {
        return view('front.typo.typo');
    }
}
