@props(['title' => false, 'id' => 1, 'subtitle' => false])
<div class="absolute top-full left-0 translate-y-5 w-screen max-w-full bg-green-dark backdrop-blur-3xl py-10 bg-opacity-90" x-show="mega_nav === {{$id}}" x-cloak>
  <div class="container mx-auto">
    @if ($title)
    <p class="text-xl font-bold text-white border-b-4 pb-4 border-b-white mb-4">{{$title}}</p>
    @else
      <a class="text-white opacity-70 text-lg hover:opacity-100 hover:underline ml-8 relative">Back to Expertise</a>
    @endif
    <div class="grid lg:grid-cols-3 w-full gap-x-48">
      @if ($subtitle)
        <p class="text-xl text-white font-semibold mb-8">{{$subtitle}}</p>
      @endif
      {{$slot}}
    </div>
  </div>
</div>
