<x-head :includeRegisterLogin='true'></x-head>

<body>
    <main>
        <div class="textCtn">
            <h2>@lang('register.title')</h2>
            <p>@lang('register.subtitle')</p>
        </div>
        <div class="mainFormCtn">
            <x-logo-colloquium color='#1a1a1d'></x-logo-colloquium>
            <form action="{{ route('register.store') }}" method="POST" class="formCtn">
                @csrf
                <div class="mainDirectionCtn">
                    <div class="directionCtn">
                        <div>
                            <label for="first_name">@lang('register.label.firstName')</label>
                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" {{-- #6936381 --}}
                                placeholder="@lang('register.placeholder.firstName')">
                            <div class="errorCtn">
                                <span class="{{ $errors->has('first_name') ? '' : 'vanish' }}">
                                    {{ $errors->has('first_name') ? $errors->first('first_name') : __('register.inputError.empty') }}
                                </span>
                            </div>
                        </div>
                        <div>
                            <label for="last_name">@lang('register.label.lastName')</label>
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}"
                                placeholder="@lang('register.placeholder.lastName')">
                            <div class="errorCtn">
                                <span class="{{ $errors->has('last_name') ? '' : 'vanish' }}">
                                    {{ $errors->has('last_name') ? $errors->first('last_name') : __('register.inputError.empty') }}
                                </span>
                            </div>
                        </div>
                        <div>
                            <label for="birthday">@lang('register.label.birthday')</label>
                            <input type="date" name="birthday" id="birthday" value="{{ old('birthday') }}"
                                placeholder="@lang('register.placeholder.birthday')">
                            <div class="errorCtn">
                                <span class="{{ $errors->has('birthday') ? '' : 'vanish' }}">
                                    {{ $errors->has('birthday') ? $errors->first('birthday') : __('register.inputError.date_invalid') }}
                                </span>
                            </div>
                        </div>
                        <div>
                            <label for="phone">@lang('register.label.phoneNumber')</label>
                            <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"
                                placeholder="@lang('register.placeholder.phoneNumber')">
                            <div class="errorCtn">
                                <span class="{{ $errors->has('phone') ? '' : 'vanish' }}">
                                    {{ $errors->has('phone') ? $errors->first('phone') : __('register.inputError.phone_invalid') }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="directionCtn">
                        <div>
                            <label for="gender">@lang('register.label.gender')</label>
                            <select name="gender" id="gender">
                                <option value="" disabled selected>@lang('register.placeholder.gender')</option>
                                <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>
                                    @lang('register.select.1')</option>
                                <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>
                                    @lang('register.select.2')</option>
                            </select>
                            <div class="errorCtn">
                                <span class="{{ $errors->has('gender') ? '' : 'vanish' }}">
                                    {{ $errors->has('gender') ? $errors->first('gender') : __('register.inputError.empty') }}
                                </span>
                            </div>
                        </div>
                        <div>
                            <label for="corporation">@lang('register.label.corporation')</label>
                            <input type="text" name="corporation" id="corporation" value="{{ old('corporation') }}"
                                placeholder="@lang('register.placeholder.corporation')">
                            <div class="errorCtn">
                                <span class="{{ $errors->has('corporation') ? '' : 'vanish' }}">
                                    {{ $errors->has('corporation') ? $errors->first('corporation') : __('register.inputError.empty') }}
                                </span>
                            </div>
                        </div>
                        <div>
                            <label for="email">@lang('register.label.email')</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                placeholder="@lang('register.placeholder.email')">
                            <div class="errorCtn">
                                <span class="{{ $errors->has('email') ? '' : 'vanish' }}">
                                    {{ $errors->has('email') ? $errors->first('email') : __('register.inputError.email_invalid') }}
                                </span>
                            </div>
                        </div>
                        <div>
                            <label for="password">@lang('register.label.password')</label>
                            <input type="password" name="password" id="password" placeholder="@lang('register.placeholder.password')">
                            <div class="errorCtn">
                                <span class="{{ $errors->has('password') ? '' : 'vanish' }}">
                                    {{ $errors->has('password') ? $errors->first('password') : __('register.inputError.password_weak') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btnCtn">
                    <button>@lang('register.submitBtn')</button>
                </div>
            </form>
            <a class="switchForm" href="/login">@lang('register.switchForm')</a>
        </div>
        <x-langue-switcher></x-langue-switcher>
    </main>
    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>
