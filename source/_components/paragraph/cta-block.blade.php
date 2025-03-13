@props(['title', 'theme' => 'green-mid', 'href' => '#'])
<a href="#" class="pt-7 px-6 pb-12 group block bg-{{$theme}} bg-opacity-80 backdrop-blur-xl backdrop-brightness-75">
  <h3 class="text-white text-3xl mb-16">{{$title}}</h3>
  <div class="text-white mb-9 text-lg/24">
    {{$slot}}
  </div>
  <p class="text-white uppercase text-sm flex w-fit relative after:ease-out after:duration-300 after:absolute after:-bottom-1.5 after:h-0.5 after:w-0 group-hover:after:bg-white group-hover:after:w-full after:transition-all"><span>Find out more</span><img src="/assets/images/icons/arrow-right-white.svg" alt="" class="text-white ml-3" width="15" height="12"></p>
</a>
