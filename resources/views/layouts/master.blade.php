<!DOCTYPE html>
<html {!! lang_attributes() !!}>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {!! meta_tags_head() !!}

    {{-- Vite CSS --}}
     {{ template_vite('templates/tailwind/dist', 'resources/assets/css/theme.css') }}
</head>

<body class="{!! helper_body_classes() !!}">


    @yield('content')

    {{-- Vite JS --}}
     {{ template_vite('templates/tailwind/dist', 'resources/assets/js/theme.js') }}

    {!! meta_tags_footer() !!}
</body>
