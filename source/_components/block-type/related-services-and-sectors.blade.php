@props(['title' => false])
<section class="container skinny-container mx-auto pt-12">
  @if ($title)
  <h2 class="text-2xl font-light text-green-dark mb-5">{{$title}}</h2>
  @endif
  <div>
    <nav>
      <ul class="flex gap-2.5 flex-wrap">
        <li>
          <x-partials.related-service-sector name="Tax planning: income tax, capital gains"/>
        </li>
        <li>
          <x-partials.related-service-sector name="Construction and Real estate"/>
        </li>
      </ul>
    </nav>
  </div>
</section>
