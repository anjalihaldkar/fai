<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ url('/') }}/">
    <title>@yield('title', 'Future Agri Infra | Complete Controlled Agriculture Solution')</title>
    <meta name="description" content="@yield('meta_description', 'Future Agri Infra provides complete controlled environment agriculture solutions including commercial polyhouse, precision hydroponics, automated fertigation, and turn-key agricultural infrastructure.')">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:title" content="@yield('og_title', View::yieldContent('title'))">
    <meta property="og:description" content="@yield('og_description', View::yieldContent('meta_description'))">
    <meta property="og:image" content="@yield('og_image', asset('images/logo.png'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="@yield('twitter_url', url()->current())">
    <meta property="twitter:title" content="@yield('twitter_title', View::yieldContent('title'))">
    <meta property="twitter:description" content="@yield('twitter_description', View::yieldContent('meta_description'))">
    <meta property="twitter:image" content="@yield('twitter_image', asset('images/logo.png'))">

    <!-- Local Typography (Cormorant Garamond & Manrope self-hosted) -->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}?v={{ file_exists(public_path('css/fonts.css')) ? filemtime(public_path('css/fonts.css')) : '1.0' }}">

    <!-- Google Fonts & Preconnects -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Manrope:wght@400;500;600;700&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Shared Stylesheets with dynamic cache-busting -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ file_exists(public_path('css/style.css')) ? filemtime(public_path('css/style.css')) : '1.0' }}">
    <link rel="stylesheet" href="{{ asset('css/resstyle.css') }}?v={{ file_exists(public_path('css/resstyle.css')) ? filemtime(public_path('css/resstyle.css')) : '1.0' }}">

    @stack('styles')
    @stack('head')
</head>
<body class="@yield('body_class')" id="@yield('body_id')">
    <div class="afm-scope" id="afmScope">
        <div class="afm-scrim" id="afmScrim"></div>

        @include('partials.header')

        <main id="main-content">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    <!-- Core CDN Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- Global App Script with cache-busting -->
    <script src="{{ asset('js/script.js') }}?v={{ file_exists(public_path('js/script.js')) ? filemtime(public_path('js/script.js')) : '1.0' }}"></script>

    @stack('scripts')
</body>
</html>
