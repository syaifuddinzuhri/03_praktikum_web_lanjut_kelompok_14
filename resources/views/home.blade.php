@extends('layouts.layout')

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>HOME</h4>
                            <h2>WELCOME TO OUR WEBSITE</h2>
                            <h4>Farel putra Hidayat | Mochammad Syaifuddin Zuhri</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="all-blog-posts">
                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-lg-12">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img src="{{ $post->image }}" alt="">
                                        </div>
                                        <div class="down-content">
                                            <a href="{{ route('news.show', ['slug' => $post->slug]) }}">
                                                <h4>{{ $post->title }}</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#">Admin</a></li>
                                                <li><a
                                                        href="#">{{ isset($post->created_at) ? $post->created_at->format('d M Y H:i:s') : '' }}</a>
                                                </li>
                                            </ul>
                                            <p>{{ $post->content }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-lg-12">
                                <div class="main-button">
                                    <a href="{{ route('news.index') }}">View All Posts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         
            </div>
        </div>
    </section>
@endsection
