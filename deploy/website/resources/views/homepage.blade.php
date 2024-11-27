<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head :includeHomePage='true'></x-head>
    <body>
        <header>
            <video class="headerVideo" muted loop> {{-- autoplay --}}
                <source src="/videos/headerHomepage.mp4">
            </video>
            <nav>
                <x-logo-colloquium></x-logo-colloquium>
                <ul class="navbarList">
                    <li><a class="navbarItem" href="">@lang('homepage.navbar.1')</a></li>
                    <li><a class="navbarItem" href="">@lang('homepage.navbar.2')</a></li>
                    <li><a class="navbarItem" href="">@lang('homepage.navbar.3')</a></li>
                </ul>
                <ul class="headerBtn">
                    <li>
                        <a class="earthIconCtn" href="">
                            <img class="earthIcon" src="/images/icons/earthBlack.svg" alt="">
                        </a>
                    </li>
                    <li><a class="registerBtn" href="">@lang('homepage.navbar.register')</a></li>
                </ul>
            </nav>
        </header>
    </body>
</html>
