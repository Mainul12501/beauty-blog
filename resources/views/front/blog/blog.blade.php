@extends('front.master')

@section('title')
    Beauty Blog | Default Blog
@endsection

@section('ptitle')
    Home
@endsection

@section('atitle')
    Default Blog
@endsection

@section('body')
    <!-- blog -->
    <div class="container">
        <!-- flexisel slider -->
        <div class="blog-mid-sec py-sm-5">
            <div class="mx-auto">
                <h5 class="beauty-center-title my-5 text-center text-capitalize">looking for our best posts?</h5>
            </div>
            <ul id="flexiselDemo2">
                @foreach($posts as $post)
                <li>
                    <div class="blog-item">
                        <img src="{{ asset($post->post_image) }}" alt=" " class="img-fluid"/>
                        <div class="floods-text">
                            <h3>
                                <a href="{{ route('single') }}">{{ $post->post_title }}
                                    <span>Blogger |
                                        <b>{{ $post->writer_name }}</b>
                                    </span>
                                </a>
                            </h3>
                        </div>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
        <!--//flexisel silder-->
        <!-- slide bottom -->
        <section class="section-01 py-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            @foreach($post4 as $posts)
                            <div class="col-lg-6 mt-lg-5">
                                <div class="card">
                                    <img class="img-fluid" src="{{ asset($posts->post_image) }}" alt=""/>
                                    <div class="card-body">
                                        <div class="news-title">
                                            <a href="{{ route('single') }}">
                                                <h4 class="title-small">{{ $posts->post_title }}</h4>
                                            </a>
                                        </div>
                                        <p class="card-text">{{ $posts->post_details }}</p>
                                        <p class="card-text">
                                            <small class="text-time">
                                                <em>3 mins ago</em>
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- tabs -->
                    <aside class="col-lg-4 side-bar col-md-12 mt-sm-5">
                        <ul class="nav nav-tabs" role="tablist" id="myTab">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Latest</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Top</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Featured</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content sidebar-tabing mt-3" id="nav-tabContent">
                            <div class="tab-pane active" id="home" role="tabpanel">
                                @foreach($post4 as $posts)
                                <div class="media">
                                    <a href="{{ route('single') }}">
                                        <img class="d-flex mr-3 img-fluid" src="{{ asset($posts->post_image) }}" alt="Generic placeholder image" />
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h4 class="title-small">
                                                <a href="{{ route('single') }}" class="text-black">{{ $posts->post_title }}</a>
                                            </h4>
                                        </div>
                                        <div class="news-auther">
                                            <small class="text-time">
                                                <em>10 mins ago</em>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel">
                                @foreach($post4 as $posts)
                                <div class="media">
                                    <a href="{{ route('single') }}">
                                        <img class="d-flex mr-3 img-fluid" src="{{ asset($posts->post_image) }}" alt="Generic placeholder image" />
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h4 class="title-small">
                                                <a href="{{ route('single') }}" class="text-black">{{ $posts->post_title }}</a>
                                            </h4>
                                        </div>
                                        <div class="news-auther">
                                            <small class="text-time">
                                                <em>10 mins ago</em>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel">
                                @foreach($post4 as $posts)
                                <div class="media">
                                    <a href="{{ route('single') }}">
                                        <img class="d-flex mr-3 img-fluid" src="{{ asset($posts->post_image) }}" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h4 class="title-small">
                                                <a href="{{ route('single') }}" class="text-black">{{ $posts->post_title }}</a>
                                            </h4>
                                        </div>
                                        <div class="news-auther">
                                            <small class="text-time">
                                                <em>40 mins ago</em>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="bc_sub mt-3 my-4">
                            <h4>Sign up to our newsletter</h4>
                            <p>Praesent sapien masspien aco nvallis </p>
                            <form action="{{ route('newsletter') }}" method="post">
                                @csrf
                                <input type="email" placeholder="Email"  name="newsletter" required="">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                        <div class="video-sec bc_sub">
                            <h4>Featured Video</h4>
                            <div class="video-block">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe width="460" height="250" src="{{ asset($videos->featured_video) }}" allowfullscreen ></iframe>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- //tabs -->
                </div>
            </div>
        </section>
        <!-- //slide bottom -->
    </div>
    <!-- //blog -->
@endsection

