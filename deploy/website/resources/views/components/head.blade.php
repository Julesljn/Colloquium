<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @php
        $styles = [
            'css/index.css',
            $includeHomePage ? 'css/homepage.css' : null,
            $includeRegisterLogin ? 'css/register-login.css' : null,
        ];
    @endphp

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @foreach ($styles as $style)
        @if ($style)
            <link rel="stylesheet" href="{{ asset($style) }}">
        @endif
    @endforeach

</head>
