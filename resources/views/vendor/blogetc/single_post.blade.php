@include('layouts.bloghead', ['title'=>$post->gen_seo_title()])
@include('layouts.menu')

        <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg09">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Logistix.ng - News</h1>
@if(\Auth::check() && \Auth::user()->canManageBlogEtcPosts())

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix"> 
                                <li>
                                    <a href="{{$post->edit_url()}}">Edit Post</a>
                                </li>
                            </ul><!-- .breadcrumb end -->
                        </div><!-- .breadcrumb-container end -->
                        @endif
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-title-style01.page-title-negative-top end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 blog-posts post-single">
                        <div class="blog-post clearfix">
                            <div class="post-media">
                                <a href="#" class="post-img">
                                    <?=$post->image_tag("medium", false, 'd-block mx-auto'); ?>
                                </a>
                            </div><!-- .post-media end -->

                            <div class="post-date"> 
                                @foreach($post->categories as $category)
                            <a href='{{$category->url()}}'>
                                <p class="month">{{$category->category_name}}</p>
                            </a>
                        @endforeach
                                <p class="day">{{$post->posted_at->format('d')}}</p>
                                <p class="month">{{$post->posted_at->format('F')}}</p>
                                
                            </div><!-- .post-date end -->
                            

                            <div class="post-body">
                                <strong> Posted by </strong> : <strong>{{$post->author->name}}</strong> 
                                
                                <a href="news-single.html">
                                    <h2>{{$post->title}} : {{$post->subtitle}}</h2>
                                </a>

                                <p>
                                    {!! $post->post_body_output() !!}

                    {{--@if(config("blogetc.use_custom_view_files")  && $post->use_view_file)--}}
                    {{--                                // use a custom blade file for the output of those blog post--}}
                    {{--   @include("blogetc::partials.use_view_file")--}}
                    {{--@else--}}
                    {{--   {!! $post->post_body !!}        // unsafe, echoing the plain html/js--}}
                    {{--   {{ $post->post_body }}          // for safe escaping --}}
                    {{--@endif--}}
                                </p>
                                
                            </div><!-- .post-body end -->

                            <!-- .post-comments start -->
                            <div class="post-comments">
                                <div class="custom-heading">
                                    <h3>Comments</h3>
                                </div><!-- .custom-heading end -->

                                <!-- .comments-li start -->
                                <ul class="comments-li">
                                    @forelse($comments as $comment)
                                    <li> 
                                        <div class="comment">
                                            <div class="avatar">
                                                <img src="img/blog/avatar01.png" alt="author" />
                                            </div>

                                            <ul class="comment-meta">
                                                <li>
                                                    <a href="#" class="author">{{$comment->author()}}</a> 
                                                </li>

                                                <li class="date">
                                                    {{$comment->created_at->diffForHumans()}}
                                                </li>
                                            </ul>

                                            <div class="comment-body">
                                                <p>
                                                    {!! nl2br(e($comment->comment))!!} 
                                                </p>

                                            </div>                                        
                                        </div><!-- comment end -->
                                    </li><!-- li end -->
                                    @empty
    <div class='alert alert-info'>No comments yet! Why don't you be the first?</div>
@endforelse

@if(count($comments)> config("blogetc.comments.max_num_of_comments_to_show",500) - 1)
    <p><em>Only the first {{config("blogetc.comments.max_num_of_comments_to_show",500)}} comments are
            shown.</em>
    </p>
@endif
                                </ul><!-- .comments-li end -->
                            </div><!-- .post-comments end -->

                            <!-- .comment-form start -->
                            <div class="comment-form">                                
                                <div id="respond">

                                    <div class="custom-heading">
                                        <h3>leave a comment</h3>
                                    </div><!-- .custom-heading end -->

                            <form id="commentform" method='post' action='{{route("blogetc.comments.add_new_comment", $post->slug)}}'>
                            @csrf
                                @if(config("blogetc.comments.save_user_id_if_logged_in", true) == false || !\Auth::check())
                                        <fieldset>
                                            <label>
                                                <span class="required">"{{old("author_name")}}"</span> Full Name:
                                            </label>

                                            <input name="author_name" class="wpcf7-text" id="author_name" type="text">
                                        </fieldset>
                                        @if(config("blogetc.comments.ask_for_author_email"))
                                        <fieldset>
                                            <label>
                                                <span class="required">{{old("author_email")}}"</span> Email address:
                                            </label>

                                            <input name="author_email" class="wpcf7-text" id="author_email" type="email">
                                        </fieldset>
                                    @endif
                                @endif

                                        <fieldset class="wpcf7-message">
                                            <label>
                                                <span class="required">{{old("comment")}}</span> Message:
                                            </label>

                                            <textarea name="comment"  class="wpcf7-textarea" id="comment" rows="8"></textarea>
                                        </fieldset>

                                         @if($captcha)
            {{--Captcha is enabled. Load the type class, and then include the view as defined in the captcha class --}}
            @include($captcha->view())
        @endif

                                        <input type="submit" class="comment-reply" value="Add Comment" />
                                    </form>
                                </div><!-- 3respond end -->
                            </div><!-- .comment-form end -->
                        </div><!-- .blog-post end -->                        
                    </div><!-- .col-md-9.blog-posts.post-list end -->

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
                // COMMENT FORM AJAX SUBMIT START
                $('#commentform .comment-reply').on('click', function (event) {
                    event.preventDefault();
                    var name = $('#comment-name').val();
                    var email = $('#comment-email').val();
                    var message = $('#comment-message').val();
                    var form_data = new Array({'Name': name, 'Email': email, 'Message': message});
                    $.ajax({
                        type: 'POST',
                        url: "contact.php",
                        data: ({'action': 'comment', 'form_data': form_data})
                    }).done(function (data) {
                        alert(data);
                    });
                }); // COMMENT FORM AJAX SUBMIT END
            });
            /* ]]> */
        </script>
    </body>
</html>
