<x-head :includeDashboard='true'></x-head>

<body>
    <header>
        <x-logo-colloquium></x-logo-colloquium>
        <div class="profilCircle">
            <span>{{ substr(Auth::user()->first_name, 0, 1) }}</span>
        </div>
        <div class="menu open">
            <div class="headerMenu">
                <div class="profilCircle pMenu">
                    <span>{{ substr(Auth::user()->first_name, 0, 1) }}</span>
                </div>
                <div class="menuNameCtn">
                    <span>{{ Auth::user()->first_name }}</span>
                    <span>{{ Auth::user()->last_name }}</span>
                </div>
            </div>
            <ul>
                <li><a href="">@lang('dashboard.burgerMenu.1')</a></li>
            </ul>
                <form class="menu-footer" method="POST" action="{{ route('user.logout') }}" style="display: inline;">
                    @csrf
                    <button class="disconnect_btn" type="submit">
                        @lang('dashboard.disconnect')
                    </button>
                </form>
        </div>
    </header>
    
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>
