@props(['theme' => 'pink', 'main' => false, 'background' => false, 'source' => false])
<li @class(['splide__slide' => true, 'bg-fixed bg-cover bg-no-repeat' => $background, 'bg-green-dark' => $theme === 'green'])
@if ($background)
  style="background-image: url('/assets/images/misc/{{$background}}')"
@endif
>
  <!-- Using a blockquote element to be semantically correct -->
  <blockquote  @class(['pt-36 xl:pt-40 2xl:pt-64 pb-10' => true])>
    @if ($main)
      <div class="container skinny-container mx-auto max-2xl:px-10">
        <div
        @class([
            'max-w-none text-center' => true,
            'prose-lg' => $theme === 'pink',
            'prose-xl'=> $theme === 'green',
            'relative'=> $theme === 'green',
            "before:absolute before:content-quote-open before:text-green-mid before:-top-10 before:text-6xl before:left-0" => $theme === 'green',
            "after:absolute after:content-quote-close after:text-green-mid after:-bottom-10 after:text-6xl after:right-0" => $theme === 'green',
        ])>
          {{$main}}
        </div>
        @if ($source)
          <!-- Adding the source of the quote as a citation -->
          <footer class="mt-14 mb-10 xl:mb-12 2xl:mb-24">
            <cite class="text-white text-lg not-italic text-center block">{{$source}}</cite>
          </footer>
        @endif
      </div>
    @endif
  </blockquote>
</li>
