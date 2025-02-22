<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/navbar.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Document</title>
</head>
<body>
@if(@auth()->user())
    <div class="wrapper">
        <nav class="nav">
            <!------LOGO SECTION---->
            <div class="nav-logo-section">
                <img id="nav_logo" src="/Images/logo.png">
            </div>
            <!------MENU SECTION---->
            <div class="nav-menu">
                <ul>
                    <!--Search option-->
                    <section id="search">
                        <div class="search-box">
                            <form id="form">
                                <div class="from-group">
                                    <input class="form-control"  type="text" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                    </section>
                    <li><a href="{{ route('home') }}" class="link" target="_parent"><i class='nav-menu-icon bx bx-home'></i> HOME</a></li>
                    <li><a href="{{ route('show-contact') }}" target="_parent" class="link"><i class='nav-menu-icon bx bxs-phone-call'></i> CONTACT</a> </li>
                    <li class="dropdown">
                        <input type="checkbox" id="profile-dropdown-toggle" class="dropdown-toggle" >

                        <label for="profile-dropdown-toggle"  class="dropdown-options link">
                            <i class='nav-menu-icon bx bx-user-circle'></i>  PROFILE
                        </label>
                        <div class="dropdown-content">
                            <a href="{{route('profile')}}" target="_parent">View Profile</a>
                            <a href="{{route('prescription.latest')}}">Last Prescription</a>
                            <a href="{{route('history')}}"target="_parent">History</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
@endif
</body>
</html>
