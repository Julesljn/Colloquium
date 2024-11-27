<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-head :includeHomePage='true'></x-head>

<body>
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
                    <img class="earthIcon" src="/images/icons/earthWhite.svg" alt="">
                </a>
            </li>
            <li>
                <a class="registerBtn" href="">@lang('homepage.navbar.register')</a>
            </li>
        </ul>
    </nav>

    <div class="parallaxe">
        <header>
            <video class="headerVideo" autoplay muted loop>
                <source src="/videos/headerHomepage.mp4">
            </video>
        </header>
        <section class="home">
            <ul class="home_BtnCtn">
                <li><a class="homeBtn" href="">@lang('homepage.navbar.register')</a></li>
                <li><a class="homeBtn" href="">@lang('homepage.navbar.login')</a></li>
            </ul>
            <div class="home_textCtn">
                <x-logo-colloquium></x-logo-colloquium>
                <p class="home_subtitle">@lang('homepage.homeSection.subtitle')</p>
                <p class="home_text">@lang('homepage.homeSection.text')</p>
            </div>
        </section>
    </div>
    <section class="services">
        <ul>
            <li><a href=""><img src="/images/brands/alstom.svg" alt=""></a></li>
            <li><a href=""><img src="/images/brands/apple.svg" alt=""></a></li>
            <li><a href=""><img src="/images/brands/coca-cola.svg" alt=""></a></li>
            <li><a href=""><img src="/images/brands/github.svg" alt=""></a></li>
            <li><a href=""><img src="/images/brands/meta-quest.svg" alt=""></a></li>
            <li><a href=""><img src="/images/brands/nike.svg" alt=""></a></li>
            <li><a href=""><img src="/images/brands/tiktok.svg" alt=""></a></li>
            <li><a href=""><img src="/images/brands/xbox.svg" alt=""></a></li>
        </ul>
        <div class="brand_alertCtn">
            <span class="brand_alert">*</span>
            <p class="brand_alert_text">Fake brands / Fausses marques</p>
        </div>
    </section>
    <script src="/js/homepage.js"></script>
</body>

</html>
