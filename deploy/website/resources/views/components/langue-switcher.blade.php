<div class="flagCtn">
    <a href="{{ route('change.language', ['locale' => $alternateLocale]) }}">
        @if ($currentLocale === 'fr')
            <img class="flag" src="/images/icons/frenchFlag.svg" alt="Drapeau Français">
        @else
            <img class="flag" src="/images/icons/americanFlag.svg" alt="American Flag">
        @endif
    </a>
</div>