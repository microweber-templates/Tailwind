<!DOCTYPE html>
<html {!! lang_attributes() !!}>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {!! meta_tags_head() !!}

    <link rel="stylesheet" href="{{ asset('templates/tailwind/dist/build/bootstrap-classes.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/tailwind/dist/build/buttons.css') }}">


    @if(!lang_is_rtl())
        <link rel="stylesheet" href="{{ asset('templates/tailwind/dist/build/theme.css') }}">
    @else

        <link rel="stylesheet" href="{{ asset('templates/tailwind/dist/build/theme-rtl.css') }}">
    @endif

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>


</head>

<body class="{!! helper_body_classes() !!}">

    @include('templates.tailwind::header')

    @yield('content')


    @include('templates.tailwind::footer')


    <script src="{{ asset('templates/tailwind/dist/build/theme.js') }}"></script>

    {!! meta_tags_footer() !!}
    <script>
         mw.top().app?.strictMode(true);
    </script>
</body>
