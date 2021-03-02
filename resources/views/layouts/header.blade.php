<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <h2>Stand Blog<em>.</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home.index') }}">Home
                        </a>
                    </li>
                    <li class="nav-item  {{ Request::is('category') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('category.index') }}">Products</a>
                    </li>
                    <li class="nav-item  {{ Request::is('news') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('news.index') }}">News</a>
                    </li>
                    <li class="nav-item  {{ Request::is('program') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('program.index') }}">Program</a>
                    </li>
                    <li class="nav-item  {{ Request::is('about-us') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about.index') }}">About Us</a>
                    </li>
                    <li class="nav-item  {{ Request::is('contact-us') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact-us.index') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
