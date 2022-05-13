@include('layouts.bloghead',['title'=>$title])
@include('layouts.menu')

        <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg09">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Our Blog</h1>
                        @if(\Auth::check() && \Auth::user()->canManageBlogEtcPosts()) 
                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are logged in as a blog admin user.</li>
                                <li>
                                    <a href="{{route('blogetc.admin.index')}}"> 
                                <i class="fa fa-cogs" aria-hidden="true">
                                    
                                </i>  Go To Blog Admin Panel</a>
                                </li> 
                            </ul><!-- .breadcrumb end -->
                        </div><!-- .breadcrumb-container end -->
                        @endif
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-title-style01.page-title-negative-top end -->

        <div class="page-content">
            @if(isset($blogetc_category) && $blogetc_category)
                <h2 class='text-center'>Viewing Category: {{$blogetc_category->category_name}}</h2>

                @if($blogetc_category->category_description)
                    <p class='text-center'>{{$blogetc_category->category_description}}</p>
                @endif

            @endif

            <div class="container">
                <div class="row">
                    <ul class="col-md-9 blog-posts post-list">
                        @forelse($posts as $post)
                        <li class="blog-post clearfix">
                            <div class="post-media">

                                <a href="{{$post->url()}}" class="post-img">
                                <?=$post->image_tag("medium", true, ''); ?>    
                                </a>
                            </div><!-- .post-media end -->

                            <div class="post-date">
                                <p class="day">{{$post->posted_at->format('d')}}</p></p>
                                <p class="month">{{$post->posted_at->format('F')}}</p></p>
                            </div><!-- .post-date end -->

                            <div class="post-body">
                                <a href="{{$post->url()}}">
                                    <h3>{{$post->title}}</h3>
                                    <p></p>
                                    <h5>{{$post->subtitle}}</h5>
                                </a>
                                @include("blogetc::partials.show_errors")
                                <p>{!! $post->generate_introduction(400) !!} </p>

                                <a href="{{$post->url()}}" class="read-more">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>                              
                                </a>
                            </div><!-- .post-body end -->
                        </li><!-- .blog-post end -->
                        @empty
                <div class='alert alert-danger'>No posts</div>
            @endforelse

                  {{$posts->appends( [] )->links()}}

                    </ul><!-- .col-md-9.blog-posts.post-list end -->

                    <!-- aside.aside-left start -->
                    <aside class="col-md-3 aside aside-left">
                        <!-- .aside-widgets start -->
                        <ul class="aside-widgets">
                            <!-- .widget.widget-search start -->
                            <li id="search-2" class="widget widget_search clearfix">
                                <div class="title">
                                    <h3>search</h3>
                                </div>

                                <form action="{{route('blogetc.search')}}" method="get">
                                    <input class="a_search" name="s" type="text" placeholder="Type and hit enter..." value='{{\Request::get("s")}}'/>
                                    <input class="search-submit" value='Search' type="submit" />
                                </form>
                            </li><!-- .widget.widget_search end -->

                            <!-- .widget.widget-categories start -->
                            <li class=" widget widget_categories">
                                <div class="title">
                                    <h3>categories</h3>
                                </div>

                                <ul>
                @foreach(\WebDevEtc\BlogEtc\Models\BlogEtcCategory::orderBy("category_name")->limit(200)->get() as $category)
                                    <li><a href="{{$category->url()}}">{{$category->category_name}}</a></li>
                                    @endforeach
                                </ul>  
                            </li><!-- .widget_categories end -->

                            <!-- .widget.rpw_posts_widget start -->
                            <li class="widget rpw_posts_widget">
                                <div class="title">
                                    <h3>latest posts</h3>
                                </div>

                                <ul>
                        @foreach(\WebDevEtc\BlogEtc\Models\BlogEtcPost::orderBy("posted_at","desc")->limit(5)->get() as $post)
                                    <li>
                                        <a href="{{$post->url()}}">
                                            <h4>
                                                {{$post->title}}
                                            </h4>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li><!-- .rpw_posts_widget end -->
                        </ul><!-- .aside-widgets end -->
                    </aside><!-- .aside.aside-left end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

@include('layouts.footer')
 @include('layouts.scripts')
        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                $('#slider-1').nivoSlider({
                    controlNav: false
                });
            });
            /* ]]> */
        </script>
    </body>
</html>
