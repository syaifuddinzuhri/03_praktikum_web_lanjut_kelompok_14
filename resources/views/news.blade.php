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
                            <h4>Recent News</h4>
                            <h2>Our Recent News Entries</h2>
                            <h4>Farel putra Hidayat | Mochammad Syaifuddin Zuhri</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-lg-6">
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
                                            <p>{{ substr($post->content, 0, 50) }}...</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-lg-12">
                                {{ $posts->links('paginate') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar-item search">
                                    <form id="search_form" name="gs" method="GET" action="#">
                                        <input type="text" name="q" class="searchText" placeholder="type to search..."
                                            autocomplete="on">
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item recent-posts">
                                    <div class="sidebar-heading">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            @foreach ($recent_posts as $post)
                                                <li><a href="{{ route('news.show', ['slug' => $post->slug]) }}">
                                                        <h5>{{ $post->title }}</h5>
                                                        <span>{{ isset($post->created_at) ? $post->created_at->format('d M Y H:i:s') : '' }}</span>
                                                    </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
