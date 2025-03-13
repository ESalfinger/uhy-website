@props(['background' => '/assets/images/misc/home/banner-image-2.png', 'title' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...', 'order' => 1])
<a href="#" @class([
  'teaser block group relative transition ease-out duration-300 overflow-hidden' => true,
  'translate-y-12' => $order == '2',
  'translate-y-24' => $order == 3,
  ]) :class="{'translate-y-0': intersected}">
    <span class="absolute bg-green-mid text-white p-3 top-0 left-0 z-20">Article</span>
    <img src="{{$background}}" alt="" class="absolute top-0 left-0 w-full h-full object-cover scale-100 transition duration-300 ease-out group-hover:scale-105">
    <article class="h-96 md:h-[480px] lg:h-[620px] xl:h-[578px] flex flex-col bg-black px-5 pb-6 transition-all ease-out duration-300 overflow-hidden">
      <div class="overlay opacity-60 group-hover:opacity-100 absolute top-0 left-0 w-full h-full from-black to-black-faded bg-gradient-to-t z-10 pointer-events-none transition-all ease-out duration-300"></div>
      <h3 class="text-xl text-white group-hover:underline mb-10 line-clamp-3 mt-auto relative z-20">{{$title}}</h3>
      <div class="text-white uppercase text-sm flex justify-center z-20 items-center w-fit relative after:ease-out after:left-0 after:duration-300 after:absolute after:-bottom-1.5 after:h-0.5 after:w-0 group-hover:after:bg-white group-hover:after:w-full after:transition-all"><span>Read more</span><img src="/assets/images/icons/arrow-right-white.svg" alt="" class="text-white ml-3 w-4 h-3" width="15" height="12"></div>
    </article>
</a>
