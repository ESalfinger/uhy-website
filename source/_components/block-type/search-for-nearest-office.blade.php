@props(['theme' => 'aubergine'])

<section class="homepage-office-search bg-aubergine relative overflow-hidden bg-{{$theme}}">
  <div class="container mx-auto relative z-10 skinny-container">
    <div class="flex max-md:flex-col">
      <div class="md:basis-1/2 xl:basis-[55%] py-28 xl:py-36">
        <h2 class="text-white text-3xl mb-6 font-light">Search for your nearest office</h2>
        <div class="prose-lg text-white mb-12">
          <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
        </div>
        <a href="#" class="text-white uppercase text-sm flex justify-center items-center w-fit relative after:ease-out after:left-0 after:duration-300 after:absolute after:-bottom-1.5 after:h-0.5 after:w-0 hover:after:bg-white hover:after:w-full after:transition-all"><span>Search</span><img src="/assets/images/icons/arrow-right-white.svg" alt="" class="text-white ml-3" width="15" height="12"></a>
      </div>
    </div>
  </div>
  <div class="md:absolute bottom-0 max-md:left-40 md:right-0 xl:-right-40 w-full h-full -z-0 pointer-events-none md:-bottom-14 lg:-bottom-10 xl:-bottom-24 scale-80">
    <div class="max-md:ml-10 max-md:h-[300px] relative w-full h-full">
      <img src="/assets/images/graphics/office_finder_pathway_background_{{$theme}}.svg" alt="" class="absolute max-w-none max-md:bottom-0 max-md:scale-125 max-md:left-0 md:bottom-10 md:-right-96 md:scale-125 lg:bottom-10 lg:-right-64 xl:bottom-20 xl:-right-20 w-[650px] xl:scale-150 md:z-10">
      <video autoplay loop muted playsinline poster="/assets/images/misc/home/video-poster.jpg" class="video-circle absolute h-[250px] max-sm:max-w-none bottom-40 max-sm:-left-14 max-md:sm:-left-14 sm:h-[250px] sm:bottom-24 -z-10 md:-right-20 md:bottom-40 lg:right-6 lg:bottom-40 xl:bottom-56 xl:right-[278px] md:h-[250px]">
        <source src="/assets/videos/background-video.webm" type="video/webm">
        <source src="/assets/videos/background-video.mp4" type="video/mp4">
      </video>
    </div>
  </div>
</section>
