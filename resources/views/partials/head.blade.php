<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if(strlen($__env->yieldContent('seo_title')) > 2) @yield('seo_title') @else @yield('page_title') @endif</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="title" content="@yield('seo_title')"/>
    <!--<link rel="canonical" href="{{url()->current()}}">-->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta property="og:title" content="@yield('seo_title')"/>
    <meta property="og:type" content="{{strlen($__env->yieldContent('ogType')) > 2 ? $__env->yieldContent('ogType') : 'website' }}" />
    <meta property="og:description" content="@yield('meta_description')"/>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:image" content="@yield('image')"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="300"/>   

    <link rel="shortcut icon" type="image/png" href="{{ Voyager::image(setting('site.favicon')) }}"/>
    <script async src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>