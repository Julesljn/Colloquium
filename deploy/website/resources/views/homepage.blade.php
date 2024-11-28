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
    <section class="brands">
        <ul>
            <li><a href="https://www.alstom.com/"><img src="/images/brands/alstom.svg" alt="@lang('homepage.brandsAlt.alstom')"></a></li>
            <li><a href="https://www.apple.com/"><img src="/images/brands/apple.svg" alt="@lang('homepage.brandsAlt.apple')"></a></li>
            <li><a href="https://www.coca-cola.com/"><img src="/images/brands/coca-cola.svg" alt="@lang('homepage.brandsAlt.coca')"></a></li>
            <li><a href="https://github.com/"><img src="/images/brands/github.svg" alt="@lang('homepage.brandsAlt.github')"></a></li>
            <li><a href="https://www.meta.com/"><img src="/images/brands/meta.svg" alt="@lang('homepage.brandsAlt.meta')"></a></li>
            <li><a href="https://www.nike.com/"><img src="/images/brands/nike.svg" alt="@lang('homepage.brandsAlt.nike')"></a></li>
            <li><a href="https://www.tiktok.com/"><img src="/images/brands/tiktok.svg" alt="@lang('homepage.brandsAlt.tiktok')"></a></li>
            <li><a href="https://www.xbox.com/"><img src="/images/brands/xbox.svg" alt="@lang('homepage.brandsAlt.xbox')"></a></li>
        </ul>
        <div class="brand_alertCtn">
            <span class="brand_alert">*</span>
            <p class="brand_alert_text">Fake brands / Fausses marques</p>
        </div>
    </section>
    <section class="services">
        <h2>@lang('homepage.navbar.1')</h2>
        <div class="servicesCtn">
            <div class="servicesCtnText">
                <p>Piano's integrated platform completes the loop between segmentation, personalization, and analytics</p>
                <p>Identify a user cohort, target them with a personalized experience, and report on the results, all in real-time.</p>
                <a href="">Découvrir</a>
            </div>
            <div class="servicesCtnImg">
                <img src="/images/fakeImg.jpeg" alt="">
            </div>
        </div>
    </section>
    <script src="/js/homepage.js"></script>
</body>

</html>
