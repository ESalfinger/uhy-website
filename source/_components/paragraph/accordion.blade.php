@props(['title' => false])
<div class="container mx-auto skinny-container">
  @if ($title)
  <h2 class="text-2xl font-light text-green-dark mb-5">{{$title}}</h2>
  @endif
  <div class="border-t border-t-black-light border-opacity-30">
    {{$slot}}
  </div>
</div>
