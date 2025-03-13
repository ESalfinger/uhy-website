---
title: "Homepage"
---
@extends('_layouts.main')

@section('body')
  <x-block-type.home-banner-carousel />
  <x-paragraph.cta-blocks raised="true" columns="3">
    <x-paragraph.cta-block title="Panel 1" theme="green-dark">
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...</p>
    </x-paragraph.cta-block>
    <x-paragraph.cta-block title="Panel 2">
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...</p>
    </x-paragraph.cta-block>
    <x-paragraph.cta-block title="Panel 3" theme="turquoise">
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...</p>
    </x-paragraph.cta-block>
  </x-paragraph.cta-blocks>
  <x-block-type.search-for-nearest-office />
  <x-block-type.latest-insights />
@endsection
