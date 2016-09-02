{{-- Main Header --}}
<header class="main-header">

    {{-- Logo --}}
    <a href="/" class="logo">
        {{-- mini logo for sidebar mini 50x50 pixels --}}
        <span class="logo-mini"><b>L</b>FR</span>
        {{-- logo for regular state and mobile devices --}}
        <span class="logo-lg"><b>Lara</b>Frame</span>
    </a>

    {{-- Header Navbar --}}
    <nav class="navbar navbar-static-top" role="navigation">
        {{-- Sidebar toggle button--}}
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        {{-- Navbar Right Menu --}}
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    {{-- User Account Menu --}}
                    <li class="dropdown user user-menu">
                        {{-- Menu Toggle Button --}}
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{-- The user image in the navbar--}}
                            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                            {{-- hidden-xs hides the username on small devices so only the image appears. --}}
                            <span class="hidden-xs">{{ strtoupper(substr($user->username, 0, 1)) . substr($user->username, 1) }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            {{-- The user image in the menu --}}
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    {{ $user->biodata->nama }} - {{ $user->roles()->first()->label }}
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            {{-- Menu Body --}}
                            <li class="user-body">
                                <div class="row">
                                    @can('view-dashboard')
                                    <div class="col-xs-4 text-center">
                                        <a href="/home">Dashboard</a>
                                    </div>
                                    @endcan
                                    @can('view-catering')
                                    <div class="col-xs-4 text-center">
                                        <a href="{{url('catering')}}">Catering</a>
                                    </div>
                                    @endcan
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                {{-- /.row --}}
                            </li>
                            {{-- Menu Footer--}}
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif
                @can('view-dashboard')
                        {{-- Control Sidebar Toggle Button --}}
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
                @endcan
            </ul>
        </div>
    </nav>
</header>