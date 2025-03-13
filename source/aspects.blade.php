@extends('_layouts.proto')

@section('body')
  <x-proto.header />

  <x-proto.section title="Insight [teaser]">
    <div class="grid md:grid-cols-3 sm:grid-cols-2">
      <x-aspect.insights--latest />
    </div>
  </x-proto.section>

  <x-proto.section title="Insight [featured]">
    <x-aspect.insights--featured />
  </x-proto.section>

  <x-proto.section title="Case Study [large]">
    <x-aspect.case-study--teaser--large />
  </x-proto.section>
  <x-proto.section title="Profile teaser">
    <x-aspect.profile--teaser />
  </x-proto.section>

  <x-proto.section title="Page header">
      <x-aspect.banner--service />
  </x-proto.section>
@endsection
