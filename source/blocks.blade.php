@extends('_layouts.proto')

@section('body')
  <x-proto.header />

  <x-proto.section title="Office Finder">
    <x-block-type.search-for-nearest-office />
  </x-proto.section>

  <x-proto.section title="Subscribe to news">
    <x-block-type.subscribe-to-news />
  </x-proto.section>
@endsection
