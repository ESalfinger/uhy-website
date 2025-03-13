@props(['background' => false, 'heading' => 'Connect to possibility.', 'video' => false])
<li class="splide__slide bg-cover h-[90vh] flex justify-center relative">
  @if ($background)
  <img src="{{$background}}" alt="">
  @endif
  @if ($video)
      <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover -z-10">
        <source src="/assets/videos/background-video.mp4" type="video/mp4">
      </video>
  @endif
  <div class="container mx-auto">
    <div class="flex flex-col max-md:pt-20 md:justify-center md:max-w-[50%] lg:max-w-[33%] h-full">
      <h2 class="text-grey text-5xl md:text-6xl drop-shadow-homepage-banner-heading font-semibold mb-10">{{$heading}}</h2>
      <p class="text-lg text-grey drop-shadow-homepage-banner-text mb-10">{{$slot}}</p>
      <x-partials.find-out-more-link />
    </div>
  </div>
</li>
