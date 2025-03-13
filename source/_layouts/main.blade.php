<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <!-- Alpine -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
      [x-cloak] { display: none; }
    </style>
    <!-- Font -->
    <link rel="stylesheet" href="https://use.typekit.net/nch1nsw.css">
    <!-- Splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" integrity="sha256-FZsW7H2V5X9TGinSjjwYJ419Xka27I8XPDmWryGlWtw=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide-core.min.css" integrity="sha256-ZAXImCY06SjVuIrJfWUETkyCctX5aGdL1AVEBX5CxZA=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.8.0/dist/js/splide-extension-video.min.js" integrity="sha256-SOsIHtfQvDlbWUkfsmrKeeclGbL2ehwxEATrrdtWNhY=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.8.0/dist/css/splide-extension-video.min.css" integrity="sha256-uJvNKReeecfthkBhNDLky4FXv742qoe4BgE9icJOePg=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-intersection@0.2.0/dist/js/splide-extension-intersection.min.js" integrity="sha256-JKADUEtliYhbM/9Tqt7qaeQb7T2XmLEKqJ068n6tcq0=" crossorigin="anonymous"></script>
    <!-- Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/images/favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/assets/images/favicons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/images/favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/images/favicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/images/favicons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/assets/images/favicons/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="/assets/images/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/assets/images/favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/assets/images/favicons/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/assets/images/favicons/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="UHY"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="/assets/images/favicons/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="/assets/images/favicons/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="/assets/images/favicons/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="/assets/images/favicons/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="/assets/images/favicons/mstile-310x310.png" />
    <!-- LeafletJS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
  </head>
  <body
    class="antialiased relative" x-data="{search_open: false, scrolled: false}"
  >
    <x-structural.header />

    <div class="region--header">
      @yield('header')
    </div>

    <div class="region--pre-content container mx-auto">
      @yield('pre-content')
    </div>

    <div class="content">
      @yield('body')
    </div>
    <x-block-type.subscribe-to-news />
    <x-structural.footer />
    <x-gadget.search-overlay />
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
  </body>
</html>
