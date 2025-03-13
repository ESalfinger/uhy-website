@extends('_layouts.proto')

@section('body')
  <x-proto.header />

  <x-proto.section title="Site header">
    <x-structural.header />
  </x-proto.section>

  <x-proto.section title="Site footer" no-container="1">
    <x-structural.footer />
  </x-proto.section>
@endsection
