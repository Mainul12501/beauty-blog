@extends('front.master')

@section('title')
    Beauty Blog  |  Single
@endsection

@section('ptitle')
    Home
@endsection

@section('atitle')
    Single
@endsection

@section('body')
    <!-- single -->
    <div class="single-w3l py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row inner_sec_info pt-md-4">
                <!-- left side -->
                <div class="col-lg-8 single-left">
                    <div class="single-left1">
                        <img src="{{ asset('/') }}front/images/blog.jpg" alt=" " class="img-fluid" />
                        <h6 class="blog-first text-dark my-4">
                            <i class="far fa-user mr-2"></i>Jenny Joy
                        </h6>
                        <ul class="blog_list my-3">
                            <li>June 02, 2018</li>
                            <li class="mx-3">
                                <a href="#">
                                    <i class="far fa-heart mr-1"></i>
                                    22</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-comments mr-1"></i>
                                    16</a>
                            </li>
                        </ul>
                        <h5 class="card-title">
                            <a href="{{ route('single') }}" class="text-dark">Sed ut perspiciatis unde omnis iste natus error sit facilisis erat posuere erat</a>
                        </h5>
                        <p>In consectetur, elit in scelerisque malesuada, tellus leo viverra massa, nec malesuada turpis lectus
                            ac urna. Suspendisse ut neque orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, fermentum
                            viverra eros. Praesent neque purus, rhoncus nec nibh non, mollis sodales odio. Nullam facilisis
                            diam non magna porta luctus. Aenean facilisis erat posuere erat ornare ultrices. Aliquam ac arcu
                            interdum, dapibus nibh convallis, semper augue.
                            <i class="my-3 font-weight-bold">Nunc a urna turpis. Aenean vestibulum elementum nisi. Aenean aliquet nec mi et lacinia. Aliquam
                                maximus iaculis mi elit in scelerisque malesuada, tellus leo viverra massa, sed efficitur
                                orci efficitur nec.</i> In consectetur, elit in scelerisque malesuada, tellus leo viverra
                            massa, nec malesuada turpis lectus ac urna. Suspendisse ut neque orci. Phasellus tellus diam,
                            pulvinar sit amet elit sit amet, fermentum viverra eros. Praesent neque purus, rhoncus nec nibh
                            non, mollis sodales odio.</p>
                    </div>
                    <div class="admin p-4 my-4">
                        <p>
                            <i class="fas fa-quote-left mr-2"></i>nibh eu consequat magna ipsum ac ex. Nulla iaculis tincidunt elit, tortor luctus sit amet.
                            Morbi in porta dolor. Morbi eget dui elit. consequat magna ipsum ac ex, Nulla iaculis consequat
                            magna ipsum ac ex Nulla iaculis.
                            <i class="fas fa-quote-right ml-2"></i>
                        </p>
                        <a href="#" class="mt-3 font-weight-bold text-right blockquote-footer">James Doe</a>
                    </div>
                    <div class="row single-left2">
                        <div class="col-md-6 single-left2-left">
                            <ul>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">At vero eos et accusamus iusto</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Sed ut perspiciatis unde omnis</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Accusantium doloremque lauda</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Vel illum qui dolorem fugiat quo</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Quis autem vel eum repreh</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Neque porro quisquam est qui</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 single-left2-left">
                            <ul>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">At vero eos et accusamus iusto</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Sed ut perspiciatis unde omnis</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Accusantium doloremque lauda</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Vel illum qui dolorem fugiat quo</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Quis autem vel eum repreh</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Neque porro quisquam est qui</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="comments my-5">
                        <h3 class="blog-title ">Our Recent Comments</h3>
                        <div class="comments-grids mt-4">
                            <div class="media mt-4">
                                <img class="mr-3" src="{{ asset('/') }}front/images/m.png" alt="Generic placeholder image">
                                <div class="media-body comments-grid-right">
                                    <h4>Parker Moe</h4>
                                    <ul class="my-2">
                                        <li class="font-weight-bold">6 June 2018
                                            <i>|</i>
                                        </li>
                                        <li>
                                            <a href="#" class="font-weight-bold">Reply</a>
                                        </li>
                                    </ul>
                                    <p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor.
                                        Phasellus bibendum eu.</p>
                                    <div class="media mt-5">
                                        <a class="pr-3" href="#">
                                            <img src="{{ asset('/') }}front/images/f.png" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body comments-grid-right">
                                            <h4>Parker Moe</h4>
                                            <ul class="my-2">
                                                <li class="font-weight-bold">6 June 2018
                                                    <i>|</i>
                                                </li>
                                                <li>
                                                    <a href="#" class="font-weight-bold">Reply</a>
                                                </li>
                                            </ul>
                                            <p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis
                                                tempor. Phasellus bibendum eu.</p>
                                        </div>
                                    </div>
                                    <div class="media mt-5">
                                        <a class="pr-3" href="#">
                                            <img src="{{ asset('/') }}front/images/f.png" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body comments-grid-right">
                                            <h4>Parker Moe</h4>
                                            <ul class="my-2">
                                                <li class="font-weight-bold">6 June 2018
                                                    <i>|</i>
                                                </li>
                                                <li>
                                                    <a href="#" class="font-weight-bold">Reply</a>
                                                </li>
                                            </ul>
                                            <p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis
                                                tempor. Phasellus bibendum eu.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mt-4">
                                <img class="mr-3" src="{{ asset('/') }}front/images/m.png" alt="Generic placeholder image">
                                <div class="media-body comments-grid-right">
                                    <h4>Parker Moe</h4>
                                    <ul class="my-2">
                                        <li class="font-weight-bold">6 June 2018
                                            <i>|</i>
                                        </li>
                                        <li>
                                            <a href="#" class="font-weight-bold">Reply</a>
                                        </li>
                                    </ul>
                                    <p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor.
                                        Phasellus bibendum eu.</p>
                                    <div class="media mt-5">
                                        <a class="pr-3" href="#">
                                            <img src="{{ asset('/') }}front/images/f.png" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body comments-grid-right">
                                            <h4>Parker Moe</h4>
                                            <ul class="my-2">
                                                <li class="font-weight-bold">6 June 2018
                                                    <i>|</i>
                                                </li>
                                                <li>
                                                    <a href="#" class="font-weight-bold">Reply</a>
                                                </li>
                                            </ul>
                                            <p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis
                                                tempor. Phasellus bibendum eu.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mt-4">
                                <img class="mr-3" src="{{ asset('/') }}front/images/m.png" alt="Generic placeholder image">
                                <div class="media-body comments-grid-right">
                                    <h4>Parker Moe</h4>
                                    <ul class="my-2">
                                        <li class="font-weight-bold">6 June 2018
                                            <i>|</i>
                                        </li>
                                        <li>
                                            <a href="#" class="font-weight-bold">Reply</a>
                                        </li>
                                    </ul>
                                    <p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor.
                                        Phasellus bibendum eu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leave-coment-form">
                        <h3 class="blog-title  mb-4">Leave a Reply</h3>
                        <form action="{{ route('new-reply') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required="">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Your comment here..." required=""></textarea>
                            </div>
                            <div class="mm_single_submit">
                                <input type="submit" value="Post Comment">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- //left side -->
                <!-- right side -->
                <div class="col-lg-4 event-right mt-lg-0 mt-sm-5 mt-4">
                    <div class="event-right1">
                        <div class="search1">
                            <form class="form-inline" action="#" method="post">
                                <input class="form-control rounded-0 mr-sm-2" type="search" placeholder="Search Here" aria-label="Search" required>
                                <input class="btn bg-dark text-white rounded-0 mt-3 w-100" type="submit" value="Search">
                            </form>
                        </div>
                        <div class="categories my-4 p-4 border">
                            <h3 class="blog-title ">Categories</h3>
                            <ul>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">At vero eos et accusamus iusto</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Sed ut perspiciatis unde omnis</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Accusantium doloremque lauda</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Vel illum qui dolorem fugiat quo</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Quis autem vel eum repreh</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{ route('single') }}">Neque porro quisquam est qui</a>
                                </li>
                            </ul>
                        </div>
                        <div class="posts p-4 border">
                            <h3 class="blog-title ">Our Events</h3>
                            <div class="posts-grids">
                                @foreach($postThrees as $postThree)
                                <div class="row posts-grid mt-4">
                                    <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                                        <a href="{{ route('single') }}">
                                            <img src="{{ asset($postThree->post_image) }}" alt=" " class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                        <h4>
                                            <a href="{{ route('single') }}" class="text-dark">{{ $postThree->post_title }}</a>
                                        </h4>
                                        <ul class="wthree_blog_events_list mt-2">
                                            <li class="mr-2 text-dark">
                                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i>15/05/18</li>
                                            <li>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <a href="{{ route('single') }}" class="text-dark ml-2">Admin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach                                
                            </div>
                        </div>
                        <div class="tags mt-4 p-4 border">
                            <h3 class="blog-title text-dark">Recent Tags</h3>
                            <ul class="mt-4">
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">dfre</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">Gahydwq</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">qeers</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">hysert</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">hjwsa</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">sumgr</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">nhyewq</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">njyra</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">laiuwa</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">loghw</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">mhyu</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">mojjs</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">suisq</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-dark border">bhyfgh</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <aside class="side-bar my-4">
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
                                @foreach($postThrees as $postThree)
                                <div class="media mb-3">
                                    <a href="{{ route('single') }}">
                                        <img class="d-flex mr-3 img-fluid" src="{{ asset($postThree->post_image) }}" alt="Generic placeholder image" />
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h2 class="title-small">
                                                <a href="{{ route('single') }}" class="text-black">{{ $postThree->post_title }}</a>
                                            </h2>
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
                                @foreach($postThrees as $postThree)
                                <div class="media">
                                    <a href="{{ route('single') }}">
                                        <img class="d-flex mr-3 img-fluid" src="{{asset( $postThree->post_image) }}" alt="Generic placeholder image" />
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h2 class="title-small">
                                                <a href="{{ route('single') }}" class="text-black">{{ $postThree->post_title }}</a>
                                            </h2>
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
                                @foreach($postThrees as $postThree)
                                <div class="media">
                                    <a href="{{ route('single') }}">
                                        <img class="d-flex mr-3 img-fluid" src="{{ asset($postThree->post_image) }}" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h2 class="title-small">
                                                <a href="{{ route('single') }}" class="text-black">{{ $postThree->post_title }}</a>
                                            </h2>
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
                                <input type="email" name="email" placeholder="Email" required="">
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
                    <div class="tags mt-4 p-4 border">
                        <div class="footerv2-w3ls">
                            <h3 class="blog-title">Over 500k + Readers</h3>
                            <ul class="social-iconsv2 agileinfo pt-3">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- //right side -->
            </div>
        </div>
    </div>
    <!-- //single -->
@endsection

