<x-head :includeRegister='true'></x-head>

<body>
    <main>
        <div class="registerTextCtn">
            <h2>@lang('register.title')</h2>
            <p>@lang('register.subtitle')</p>
        </div>
        <div class="registerFormCtn">
            <x-logo-colloquium color='#1a1a1d'></x-logo-colloquium>
            <form action="" method="POST" class="formCtn">
                <div class="registerDirectionCtn">
                    <div class="directionCtn">
                        <div>
                            <label for="first_name">Prénom :</label>
                            <input type="text" name="first_name" id="first_name" placeholder="@lang('register.placeholder.firstName')">
                            <div class="errorCtn">
                                <span class="vanish">@lang('register.inputError.empty')</span>
                            </div>
                        </div>
                        <div>
                            <label for="last_name">Nom :</label>
                            <input type="text" name="last_name" id="last_name" placeholder="@lang('register.placeholder.lastName')">
                            <div class="errorCtn">
                                <span class="vanish">@lang('register.inputError.empty')</span>
                            </div>
                        </div>
                        <div>
                            <label for="birthday">Date de naissance :</label>
                            <input type="date" name="birthday" id="birthday" placeholder="@lang('register.placeholder.birthday')">
                            <div class="errorCtn">
                                <span class="vanish">@lang('register.inputError.date')</span>
                            </div>
                        </div>
                        <div>
                            <label for="phone">Téléphone :</label>
                            <input type="tel" name="phone" id="phone" placeholder="@lang('register.placeholder.phoneNumber')">
                            <div class="errorCtn">
                                <span class="vanish">@lang('register.inputError.phone')</span>
                            </div>
                        </div>
                    </div>
                    <div class="directionCtn">
                        <div>
                            <label for="gender">Genre :</label>
                            <select name="gender" id="gender">
                                <option value="" disabled selected>@lang('register.placeholder.gender')</option>
                                <option value="male">Homme</option>
                                <option value="female">Femme</option>
                            </select>
                            <div class="errorCtn">
                                <span class="vanish">@lang('register.inputError.empty')</span>
                            </div>
                        </div>
                        <div>
                            <label for="corporation">Société :</label>
                            <input type="text" name="corporation" id="corporation" placeholder="@lang('register.placeholder.corporation')">
                            <div class="errorCtn">
                                <span></span>
                            </div>
                        </div>
                        <div>
                            <label for="email">Email :</label>
                            <input type="email" name="email" id="email" placeholder="@lang('register.placeholder.email')">
                            <div class="errorCtn">
                                <span class="vanish">@lang('register.inputError.email')</span>
                            </div>
                        </div>
                        <div>
                            <label for="password">Mot de passe :</label>
                            <input type="password" name="password" id="password" placeholder="@lang('register.placeholder.password')">
                            <div class="errorCtn">
                                <span class="vanish">@lang('register.inputError.password')</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btnCtn">
                    <button>@lang('register.submitBtn')</button>
                </div>
            </form>
        </div>
    </main>
    <script src="/js/register.js"></script>
</body>

</html>