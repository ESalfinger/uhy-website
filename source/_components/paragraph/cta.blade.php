@props(['text' => 'Lorem Ipsum', 'link' => '#', 'position' => 'center'])
<section class="text-{{$position}}">
  <a href="{{$link}}" class="rounded inline-flex border-none bg-green-mid text-white px-5 py-3 uppercase items-center hover:bg-green-dark transition ease-out duration-300">{{$text}}<img src="/assets/images/icons/arrow-right-white.svg" alt="" class="text-black ml-3 w-4 h-3" width="15" height="12"></a>
</section>
