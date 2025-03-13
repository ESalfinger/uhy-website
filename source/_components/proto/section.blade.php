@props(['noContainer' => false, 'title' => ''])

<div class="container mx-auto px-4">
  <x-proto.section-header>
    {{ $title }}
  </x-proto.section-header>
</div>
@if(!$noContainer)
<div class="container mx-auto px-4 mb-8">
  {{ $slot }}
</div>
@else
<div class="mb-8">
  {{ $slot }}
</div>
@endif
