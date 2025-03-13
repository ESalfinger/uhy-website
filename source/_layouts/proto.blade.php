<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
      [x-cloak] { display: none; }
    </style>
    <link rel="stylesheet" href="https://use.typekit.net/nch1nsw.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" integrity="sha256-FZsW7H2V5X9TGinSjjwYJ419Xka27I8XPDmWryGlWtw=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide-core.min.css" integrity="sha256-ZAXImCY06SjVuIrJfWUETkyCctX5aGdL1AVEBX5CxZA=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.8.0/dist/js/splide-extension-video.min.js" integrity="sha256-SOsIHtfQvDlbWUkfsmrKeeclGbL2ehwxEATrrdtWNhY=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.8.0/dist/css/splide-extension-video.min.css" integrity="sha256-uJvNKReeecfthkBhNDLky4FXv742qoe4BgE9icJOePg=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-intersection@0.2.0/dist/js/splide-extension-intersection.min.js" integrity="sha256-JKADUEtliYhbM/9Tqt7qaeQb7T2XmLEKqJ068n6tcq0=" crossorigin="anonymous"></script>
  </head>
  <body
    class="antialiased"
  >
    @yield('body')

    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
  </body>
</html>
