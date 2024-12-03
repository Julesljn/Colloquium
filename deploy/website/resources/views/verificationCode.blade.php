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
                <div class="code-inputs">
                    <input type="text" maxlength="1" class="code-input"/>
                    <input type="text" maxlength="1" class="code-input"/>
                    <input type="text" maxlength="1" class="code-input"/>
                    <input type="text" maxlength="1" class="code-input"/>
                    <input type="text" maxlength="1" class="code-input"/>
                    <input type="text" maxlength="1" class="code-input"/>
                </div>
                <button id="submit-code">@lang('register.submitBtn')</button>
            </div>
        </div>
    </main>
    <script src="/js/verificationCode.js"></script>
</body>

</html>
