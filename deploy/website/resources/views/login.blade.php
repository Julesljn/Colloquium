<x-head :includeRegisterLogin='true'></x-head>

<body>
    <main>
        <div class="textCtn">
            <h2>@lang('login.title')</h2>
            <p>@lang('login.subtitle')</p>
        </div>
        <div class="mainFormCtn">
            <x-logo-colloquium color='#1a1a1d'></x-logo-colloquium>
            <form action="{{ route('user.login') }}" method="POST" class="formCtn">
                @csrf
                <div class="loginErrorCtn">
                    <span class="{{ $errors->has('login') ? '' : 'vanish' }}">
                        {{ $errors->has('login') ? $errors->first('login') : __('login.inputError') }}
                    </span>
                </div>
                <div class="mainDirectionCtn">
                    <div class="directionCtn">
                        <div>
                            <label for="email">@lang('login.label.email')</label>
                            <input type="email" name="email" id="email" placeholder="@lang('login.placeholder.email')"
                                value="{{ old('email') }}"> {{-- #6936381 --}}
                        </div>
                        <div>
                            <label for="password">@lang('login.label.password')</label>
                            <input type="password" name="password" id="password" placeholder="@lang('login.placeholder.password')">
                        </div>
                    </div>
                </div>
                <div class="btnCtn">
                    <button>@lang('login.submitBtn')</button>
                </div>
            </form>
            <a class="switchForm" href="/register">@lang('login.switchForm')</a>
        </div>
        <x-langue-switcher></x-langue-switcher>
    </main>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
