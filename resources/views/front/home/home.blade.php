@extends('front.home-master')

@section('title')
    Beauty Blog  |  Home
@endsection

@section('body')
    <!-- banner bottom -->
    <section class="banner-sec py-5">
        <div class="container">
            <div class="row pt-md-5">

                <div class="col-lg-3">
                    @foreach($post2 as $postTwo)
                    <div class="card mb-3">
                        <img class="img-fluid" src="{{ asset($postTwo->post_image) }}" alt="" />
                        <div class="card-img-overlay">
                            <span class="badge-pill badge-pos">Tips</span>
                        </div>
                        <div class="card-body">
                            <div class="news-title">
                                <h4 class="title-small">
                                    <a href="{{ route('single') }}" class="text-dark">{{ $postTwo->post_title }}</a>
                                </h4>
                            </div>
                            <p class="card-text">
                                <small class="text-time">
                                    <em>3 mins ago</em>
                                </small>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-3 mt-lg-0 mt-5">
                    @foreach($post2 as $postTwo)
                    <div class="card mb-3">
                        <img class="img-fluid" src="{{ asset($postTwo->post_image) }}" alt="" />
                        <div class="card-img-overlay">
                            <span class="badge-pill badge-pos">Travel</span>
                        </div>
                        <div class="card-body">
                            <div class="news-title">
                                <h4 class="title-small">
                                    <a href="{{ route('single') }}" class="text-dark">{{ $postTwo->post_title }}</a>
                                </h4>
                            </div>
                            <p class="card-text">
                                <small class="text-time">
                                    <em>14 mins ago</em>
                                </small>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="col-lg-6 top-slider mt-lg-0 mt-5">
                    <!-- carousel -->
                    <div id="carousel-example-generic" class="carousel slide bg-light" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="news-block p-3">
                                    <div class="news-media">
                                        <img class="img-fluid" src="{{ asset('/') }}front/images/g6.jpg" alt="" />
                                    </div>
                                    <div class="news-title">
                                        <h4 class="title-large border-bottom">
                                            <a href="{{ route('single') }}" class="text-theme text-dark">Quisque velit nisi, pretium ut lacinia in, elementum id enim.</a>
                                        </h4>
                                    </div>
                                    <div class="news-des my-3">
                                        <p>Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes
                                            vel. Mauris nam suspendisse consectetur mus...</p>
                                    </div>
                                    <small class="text-time">
                                        <em>
                                            <i class="far fa-clock mr-2"></i>1hr ago</em>
                                    </small>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="news-block p-3">
                                    <div class="news-media">
                                        <img class="img-fluid" src="{{ asset('/') }}front/images/g5.jpg" alt="" />
                                    </div>
                                    <div class="news-title">
                                        <h4 class="title-large border-bottom">
                                            <a href="{{ route('single') }}" class="text-theme text-dark">Quisque velit nisi, pretium ut lacinia in, elementum id enim.</a>
                                        </h4>
                                    </div>
                                    <div class="news-des my-3">
                                        <p>Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes
                                            vel. Mauris nam suspendisse consectetur mus...</p>
                                    </div>
                                    <small class="text-time">
                                        <em>
                                            <i class="far fa-clock mr-2"></i>2 hrs ago</em>
                                    </small>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="news-block p-3">
                                    <div class="news-media">
                                        <img class="img-fluid" src="{{ asset('/') }}front/images/g4.jpg" alt="" />
                                    </div>
                                    <div class="news-title">
                                        <h4 class="title-large border-bottom">
                                            <a href="{{ route('single') }}" class="text-theme text-dark">Quisque velit nisi, pretium ut lacinia in, elementum id enim.</a>
                                        </h4>
                                    </div>
                                    <div class="news-des my-3">
                                        <p>Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes
                                            vel. Mauris nam suspendisse consectetur mus...</p>
                                    </div>
                                    <div class="time-text">
                                        <small class="text-time">
                                            <em>
                                                <i class="far fa-clock mr-2"></i>yesterday</em>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //carousel -->
                </div>
            </div>
            <!-- flexisel slider -->
            <div class="blog-mid-sec py-sm-5">
                <div class="mx-auto">
                    <h5 class="beauty-center-title my-5 text-center text-capitalize">looking for our best posts?</h5>
                </div>
                <ul id="flexiselDemo2">
                    @foreach($posts as $post)
                    <li>
                        <div class="blog-item">
                            <img src="{{ asset($post->post_image) }}" alt=" " class="img-fluid" />
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
        </div>
    </section>
    <!-- //banner bottom -->
    <!-- slide -->
    <section class="diagonal-stripe-one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('/') }}front/images/slide.png" alt="beauty_img" class="img-fluid" />
                </div>
                <div class="col-md-8 d-flex flex-column  my-auto">
                    <h4 class="slide-text align-self-center">click here to find out more</h4>
                    <a href="{{ route('about') }}" class="w3ls-button mx-auto">
                        <span>read more</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- //slide -->
    <!-- slide bottom -->
    <section class="section-01 py-sm-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        @foreach($post4 as $postFour)
                        <div class="col-lg-6 mt-sm-5">
                            <div class="card">
                                <img class="img-fluid" src="{{ asset($postFour->post_image) }}" alt="" />
                                <div class="card-body">
                                    <div class="news-title">
                                        <a href="{{ route('single') }}">
                                            <h4 class="title-small">{{ $postFour->post_title }}</h4>
                                        </a>
                                    </div>
                                    <p class="card-text">{{ $postFour->post_details }}</p>
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
                            @foreach($post3 as $postThree)
                            <div class="media mb-2">
                                <a href="{{ route('single') }}">
                                    <img class="d-flex mr-3 img-fluid" src="{{ asset($postThree->post_image) }}" alt="Generic placeholder image" />
                                </a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h4 class="title-small">
                                            <a href="{{ route('single') }}" class="text-black">{{ $postThree->post_title }}</a>
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
                            @foreach($post3 as $postThree)
                            <div class="media mb-2">
                                <a href="{{ route('single') }}">
                                    <img class="d-flex mr-3 img-fluid" src="{{ asset($postThree->post_image) }}" alt="Generic placeholder image" />
                                </a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h4 class="title-small">
                                            <a href="{{ route('single') }}" class="text-black">{{ $postThree->post_title }}</a>
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
                            @foreach($post3 as $postThree)
                            <div class="media mb-2">
                                <a href="{{ route('single') }}">
                                    <img class="d-flex mr-3 img-fluid" src="{{ asset($postThree->post_image) }}" alt="Generic placeholder image">
                                </a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h4 class="title-small">
                                            <a href="{{ route('single') }}" class="text-black">{{ $postThree->post_title }}</a>
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
                            <input type="email" placeholder="Email" required="">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                    <div class="video-sec bc_sub">
                        <h4>Featured Video</h4>
                        <div class="video-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe width="460" height="250" src="{{ $videos->featured_video }}" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- //tabs -->
            </div>
        </div>
    </section>
    <!-- //slide bottom -->
@endsection
