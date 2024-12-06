<x-head :includeHomePage='true'></x-head>

<body>
    <nav>
        <x-logo-colloquium></x-logo-colloquium>
        <ul class="navbarList">
            <li><a class="navbarItem" href="#brands">@lang('homepage.navbar.1')</a></li>
            <li><a class="navbarItem" href="#services">@lang('homepage.navbar.2')</a></li>
            <li><a class="navbarItem" href="#ia">@lang('homepage.navbar.3')</a></li>
        </ul>
        <ul class="headerBtn">
            <li>
                <x-langue-switcher></x-langue-switcher>
            </li>
            @auth
                <li>
                    <a class="navBarBtn" href="/">@lang('homepage.navbar.dashboard')</a>
                </li>
                <li>
                    <form id="logout-form" method="POST" action="{{ route('user.logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="navBarBtn">
                            @lang('homepage.navbar.disconnect')
                        </button>
                    </form>
                </li>
            @endauth
            @guest
                <li>
                    <a class="navBarBtn" href="{{ route('register') }}">@lang('homepage.navbar.register')</a>
                </li>
            @endguest
        </ul>
    </nav>

    <div class="parallaxe">
        <header>
            <video class="headerVideo" autoplay muted loop>
                <source src="{{ asset('videos/homepage/headerHomepage.mp4') }}">
            </video>
        </header>
        <section id="home" class="home">
            <ul class="home_BtnCtn">
                @guest
                    <li><a class="homeBtn" href="{{ route('register') }}">@lang('homepage.navbar.register')</a></li>
                    <li><a class="homeBtn" href="{{ route('login') }}">@lang('homepage.navbar.login')</a></li>
                @endguest
                @auth
                    <li>
                        <p class="welcomeText">@lang('homepage.welcome', ['first_name' => Auth::user()->first_name, 'last_name' => Auth::user()->last_name])</p>
                    </li>
                @endauth
            </ul>
            <div class="home_textCtn">
                <x-logo-colloquium></x-logo-colloquium>
                <p class="home_subtitle">@lang('homepage.homeSection.subtitle')</p>
                <p class="home_text">@lang('homepage.homeSection.text')</p>
            </div>
        </section>
    </div>
    <section id="brands" class="brands">
        <ul>
            <li><a href="https://www.alstom.com/"><img src="{{ asset('images/brands/alstom.svg') }}" alt="@lang('homepage.brandsAlt.alstom')"></a></li>
            <li><a href="https://www.apple.com/"><img src="{{ asset('images/brands/apple.svg') }}" alt="@lang('homepage.brandsAlt.apple')"></a></li>
            <li><a href="https://www.coca-cola.com/"><img src="{{ asset('images/brands/coca-cola.svg') }}" alt="@lang('homepage.brandsAlt.coca')"></a></li>
            <li><a href="https://github.com/"><img src="{{ asset('images/brands/github.svg') }}" alt="@lang('homepage.brandsAlt.github')"></a></li>
            <li><a href="https://www.meta.com/"><img src="{{ asset('images/brands/meta.svg') }}" alt="@lang('homepage.brandsAlt.meta')"></a></li>
            <li><a href="https://www.nike.com/"><img src="{{ asset('images/brands/nike.svg') }}" alt="@lang('homepage.brandsAlt.nike')"></a></li>
            <li><a href="https://www.tiktok.com/"><img src="{{ asset('images/brands/tiktok.svg') }}" alt="@lang('homepage.brandsAlt.tiktok')"></a></li>
            <li><a href="https://www.xbox.com/"><img src="{{ asset('images/brands/xbox.svg') }}" alt="@lang('homepage.brandsAlt.xbox')"></a></li>
        </ul>
        <div class="brand_alertCtn">
            <span class="brand_alert">*</span>
            <p class="brand_alert_text">@lang('homepage.fakeBrand')</p>
        </div>
    </section>
    <section id="services" class="services">
        <h2>@lang('homepage.navbar.2')</h2>
        <div class="servicesCtn">
            <div class="servicesCtnText">
                <p>@lang('homepage.servicesSection.title')</p>
                <p>@lang('homepage.servicesSection.subtitle')</p>
                <div class="servicesLine"></div>
                <ul>
                    <li>
                        <p>@lang('homepage.serviceSectionList.1')</p>
                    </li>
                    <li>
                        <p>@lang('homepage.serviceSectionList.2')</p>
                    </li>
                    <li>
                        <p>@lang('homepage.serviceSectionList.3')</p>
                    </li>
                    <li>
                        <p>@lang('homepage.serviceSectionList.4')</p>
                    </li>
                </ul>
            </div>
            <div class="servicesCtnImg">
                <img src="{{ asset('images/homepage/presentation.png') }}" alt="@lang('homepage.presentationPictureAlt')">
            </div>
        </div>
    </section>
    <section id="ia" class="ia">
        <h2>@lang('homepage.navbar.3')</h2>
        <div class="videoCtn">
            <video autoplay muted loop>
                <source src="{{ asset('/videos/homepage/brain.mp4') }}">
            </video>
        </div>
        <div class="videoTextCtn">
            <h2>@lang('homepage.iaSection.title')</h2>
            <ul>
                <li>
                    <p>@lang('homepage.iaSection.friendlyTagline.1')</p>
                </li>
                <li>
                    <p>@lang('homepage.iaSection.friendlyTagline.2')</p>
                </li>
                <li>
                    <p>@lang('homepage.iaSection.friendlyTagline.3')</p>
                </li>
            </ul>
            <div class="iaLine"></div>
            <div class="iaGeminiLogo">
                <a href="https://gemini.google.com/"><img class="geminiLogo" src="{{ asset('/images/brands/gemini.svg') }}"
                        alt="@lang('homepage.brandsAlt.gemini')"></a>
                <p>@lang('homepage.iaSection.proposedGemini')</p>
            </div>
        </div>
    </section>
    <footer>
        <x-logo-colloquium></x-logo-colloquium>
        <ul>
            <li>
                <a href="{{ route('terms') }}">@lang('homepage.footer.1')</a>
            </li>
            <li>
                <a href="{{ route('privacy') }}">@lang('homepage.footer.2')</a>
            </li>
            <li>
                <a href="{{ route('legal_notice') }}">@lang('homepage.footer.3')</a>
            </li>
        </ul>
    </footer>
    <script src="{{ asset('js/homepage.js') }}"></script>
</body>

</html>
