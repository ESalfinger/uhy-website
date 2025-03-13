@props(['showTitle' => false])
<section class="splide testimonial-slider py-10 container mx-auto relative" aria-labelledby="carousel-heading">
  <h2 id="carousel-heading" @class(['sr-only' => !$showTitle, 'left-1/2 -translate-x-1/2 top-20 absolute lg:top-20 xl:top-28 2xl:top-44 text-white z-20 text-3xl text-center' => $showTitle])>What people say about us</h2>
  <div class="splide__track">
    <ul class="splide__list">
      {{$slot}}
    </ul>
  </div>
</section>
