<?php

namespace App\Http\Controllers;

use App\Comment;
use App\ContactMessage;
use App\FeaturedVideo;
use App\NewsLetter;
use App\Post;
use App\SliderImage;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index ()
    {
        return view('admin.home.home');
    }


    /*Add Posts*/

    public function addPost ()
    {
        return view('admin.post.add-post');
    }

    public function newPost (Request $request)
    {
        $image      = $request->file('post_image');
        $imageName  = $image->getClientOriginalName();
        $directory  = './Post-Images/';
        $save       = $image->move($directory,$imageName);
        $imageURL   = $directory.$imageName;

        $post = new Post();
        $post->post_title       = $request->post_title;
        $post->post_details     = $request->post_details;
        $post->writer_name      = $request->writer_name;
        $post->post_image       = $imageURL;
        $post->save();
        return redirect()->back()->with('message', 'Post saved successfully');
    }

    public function managePost ()
    {
        $posts   = Post::all();
        return view('admin.post.manage-post', [
            'posts' => $posts,
        ]);
    }

    public function deletePost ($id)
    {
        $Post  =   Post::find($id);
        unlink($Post->post_image);
        $Post->delete();
        return redirect()->back();
    }

    public function editPost ($id)
    {
        $post  = Post::find($id);

        return view('admin.post.edit-post',[
            'post'  => $post,
        ]);
    }

    public function updatePost (Request $request)
    {
        $post       = Post::find($request->id);
        $image      = $request->file('post_image');
        if ($image){
            unlink($post->post_image);
            $imageName  = $image->getClientOriginalName();
            $directory  = './Post-Images/';
            $save       = $image->move($directory,$imageName);
            $imageURL   = $directory.$imageName;
        }else {
            $imageURL   = $post->post_image;
        }

        $post->post_title       = $request->post_title;
        $post->post_details     = $request->post_details;
        $post->writer_name      = $request->writer_name;
        $post->post_image       = $imageURL;
        $post->save();
        return redirect('/manage-post')->with('message', 'Post Updated successfully');
    }

    /*/Add Post*/

    /*Image Slider*/

    public function addImage ()
    {
        return view('admin.slider-image.add-image');
    }

    public function newImage (Request $request)
    {
        $image                  = $request->file('slider_image');
        $imageName              = $image->getClientOriginalName();
        $directory              = './Slider-Image/';
        $move                   = $image->move($directory,$imageName);
        $imageURL               = $directory.$imageName;

        $slider                 = new SliderImage();
        $slider->slider_image   = $imageURL;
        $slider->save();
        return redirect()->back()->with('message','Image Saved Successfully');
    }

    public function viewImage ()
    {
        $images = SliderImage::all();
        return view('admin.slider-image.view-image',[
            'images' => $images,
        ]);
    }

    public function deleteImage ($id)
    {
        $delete = SliderImage::find($id);
        unlink($delete->slider_image);
        $delete->delete();
        return redirect()->back();
    }

    /*/Image Slider*/

    /*Add Video*/

    public function addVideo ()
    {
        return view('admin.featured-video.add-video');
    }

    public function newVideo (Request $request)
    {
        $video          = $request->file('featured_video');
        $videoName      = $video->getClientOriginalName();
        $directory      = './Featured-Video/';
        $move           = $video->move($directory,$videoName);
        $videoURL       = $directory.$videoName;

        $featuredVideo  = new FeaturedVideo();
        $featuredVideo->featured_video   = $videoURL;
        $featuredVideo->save();
        return redirect()->back()->with('message','Video Saved Successfully');
    }

    public function viewVideo ()
    {
        $videos = FeaturedVideo::all();
        return view('admin.featured-video.view-video',[
            'videos' => $videos,
        ]);
    }

    public function deleteVideo ($id)
    {
        $video  = FeaturedVideo::find($id);
        unlink($video->featured_video);
        $video->delete();
        return redirect()->back();
    }

    /*Contact Message*/

    public function newMessage (Request $request)
    {
        $message            = new ContactMessage();
        $message->name      = $request->name;
        $message->email     = $request->email;
        $message->message   = $request->message;
        $message->save();
        return redirect()->back();
    }

    public function viewMessage ()
    {
        $messages = ContactMessage::all();
        return view('admin.message.message',[
            'messages'  => $messages,
        ]);
    }

    public function deleteMessage ($id)
    {
        $message = ContactMessage::find($id);
        $message->delete();
        return redirect()->back();
    }
    /*/Contact Message*/

    /*NewsLetter*/

    public function newsletter(Request $request)
    {
        $newsletter = new NewsLetter();
        $newsletter->newsletter = $request->newsletter;
        $newsletter->save();
        return redirect()->back();
    }

    public function viewEmail ()
    {
        $newsletters = NewsLetter::orderBy('id','DESC')->get();
        return view('admin.newsletter.view-newsletter',[
            'newsletters'   => $newsletters,
        ]);
    }

    public function deleteEmail ($id)
    {
        $news = NewsLetter::find($id);
        $news->delete();
        return redirect()->back();
    }

    /*/NewsLetter*/

    /*Reply*/

    public function newReply (Request $request)
    {
        $message            = new Comment();
        $message->name      = $request->name;
        $message->email     = $request->email;
        $message->message   = $request->message;
        $message->save();
        return redirect()->back();
    }

    public function viewReply ()
    {
        $messages = Comment::all();
        return view('admin.reply.view-reply',[
            'messages'  => $messages,
        ]);
    }

    public function deleteReply ($id)
    {
        $message = Comment::find($id);
        $message->delete();
        return redirect()->back();
    }

    /*/Reply*/
}
