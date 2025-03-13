@props(['title' => 'Totam rem aperiam' ])
<div x-data="{'open': false}" class="flex py-4 border-b border-black-light border-opacity-30">
  <div class="ml-6">
    <p @click="open = !open" class="font-semibold text-lg text-black-light select-none relative before:absolute before:top-1/2 before:-left-12 before:-translate-y-1/2 before:size-5 before:bg-chevron-down before:ml-5 before:transition-transform cursor-pointer" :class="{'before:rotate-180':open}">{{$title}}</p>
    <div x-show="open" class="prose mt-5 max-w-none" x-cloak x-transition>
      {{$slot}}
    </div>
  </div>
</div>
