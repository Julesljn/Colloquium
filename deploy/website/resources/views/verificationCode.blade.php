<x-head :includeRegisterLogin='true'></x-head>

<body>
    <main>
        <div class="textCtn">
            <h2>@lang('register.title')</h2>
            <p>@lang('register.subtitle')</p>
        </div>
        <div class="mainFormCtn">
            <x-logo-colloquium color='#1a1a1d'></x-logo-colloquium>
            <div class="ctnVerifCode">
                <div class="ctnVerifCodeText">
                    <h2>@lang('register.activateCode')</h2>
                    <a href="">@lang('register.noCode')</a>
                </div>
                <form class="formValidationCode" action="{{ route('verification.verify') }}" method="POST"
                    id="verification-form">
                    @csrf
                    <div class="code-inputs">
                        <input type="text" name="code[]" maxlength="1" class="code-input" />
                        <input type="text" name="code[]" maxlength="1" class="code-input" />
                        <input type="text" name="code[]" maxlength="1" class="code-input" />
                        <input type="text" name="code[]" maxlength="1" class="code-input" />
                        <input type="text" name="code[]" maxlength="1" class="code-input" />
                        <input type="text" name="code[]" maxlength="1" class="code-input" />
                    </div>
                    <div class="ctnCodeErreur">
                        @if ($errors->has('code'))
                            <span>{{ $errors->first('code') }}</span>
                        @endif
                    </div>
                    <button type="submit" id="submit-code">@lang('register.submitBtn')</button>
                </form>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/verificationCode.js') }}"></script>
</body>

</html>
