<div class="navbar-area" id="stickymenu">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{asset('uploads/logo.png')}}" alt="">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{asset('uploads/logo.png')}}" alt="">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                                    <a href="{{route(name: 'home')}}" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                                    <a href="{{route(name: 'about')}}" class="nav-link">About</a>
                                </li>
                                <li class="nav-item {{ Route::is('destinations') ? 'active' : '' }}">
                                    <a href="{{route(name: 'destinations')}}" class="nav-link">Destinations</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route(name: 'packages')}}" class="nav-link">Packages</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route(name: 'team-members')}}" class="nav-link">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route(name: 'faq')}}" class="nav-link">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route(name: 'blog')}}" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route(name: 'contact')}}" class="nav-link">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>