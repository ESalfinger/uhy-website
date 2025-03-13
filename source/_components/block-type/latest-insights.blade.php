<section class="block--latest-insights container mx-auto py-28 xl:py-36" x-data="{intersected: false}">
  <div class="flex max-md:flex-col justify-between mb-10">
    <h2 class="text-3xl max-md:mb-10" id="latest-insights-heading">Our latest insights</h2>
    <a href="#" class="max-md:ml-auto text-black uppercase text-sm flex justify-center items-center w-fit relative after:ease-out after:left-0 after:duration-300 after:absolute after:-bottom-1.5 after:h-0.5 after:w-0 hover:after:bg-black hover:after:w-full after:transition-all"><span>More insights</span><img src="/assets/images/icons/arrow-right-black.svg" alt="" class="text-black ml-3 w-4 h-3" width="15" height="12"></a>
  </div>
  <div class="latest-insights splide" x-intersect.threshold.70="intersected = true" role="group" aria-labelledby="latest-insights-heading">
    <div class="splide__track pb-10 slider-unviewed" :class="{'in-view': intersected}">
      <ul class="splide__list">
        <x-partials.slide-item>
          <x-aspect.insights--latest title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam..."/>
        </x-partials.slide-item>
        <x-partials.slide-item>
          <x-aspect.insights--latest title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam..." background="/assets/images/misc/home/article-2.png"/>
        </x-partials.slide-item>
        <x-partials.slide-item>
          <x-aspect.insights--latest title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam..." background="/assets/images/misc/home/default-card.png"/>
        </x-partials.slide-item>
        <x-partials.slide-item>
          <x-aspect.insights--latest title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam..."/>
        </x-partials.slide-item>
        <x-partials.slide-item>
          <x-aspect.insights--latest title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam..." background="/assets/images/misc/home/article-2.png"/>
        </x-partials.slide-item>
        <x-partials.slide-item>
          <x-aspect.insights--latest title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam..." background="/assets/images/misc/home/default-card.png"/>
        </x-partials.slide-item>
        <x-partials.slide-item>
          <x-aspect.insights--latest title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam..."/>
        </x-partials.slide-item>
        <x-partials.slide-item>
          <x-aspect.insights--latest title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam..." background="/assets/images/misc/home/article-2.png"/>
        </x-partials.slide-item>
        <x-partials.slide-item>
          <x-aspect.insights--latest title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam..." background="/assets/images/misc/home/default-card.png"/>
        </x-partials.slide-item>
      </ul>
    </div>
  </div>
</section>
