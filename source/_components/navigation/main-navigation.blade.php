<nav>
  <div class="flex max-md:justify-center">
    <div class="w-full flex max-lg:hidden">
      <nav class="w-full" x-data="{'submenu': false, 'subsubmenu': false}">
        <ul class="flex space-x-8">
          <li @mouseover="submenu = 'sub-menu-item-1'" @mouseleave="submenu = false" class="pb-3 border-b-4 border-b-white hover:border-b-green">
            <a class="text-lg text-green-dark select-none pb-12">Menu item 1</a>
            <x-partials.main-menu-children parent-title="Menu item 1" parent-key="sub-menu-item-1"/>
          </li>
          <li class="pb-3 border-b-4 border-b-white hover:border-b-green relative">
            <a href="#" class="text-lg text-green-dark pb-12">Menu item 2</a>
          </li>
          <li class="pb-3 border-b-4 border-b-white hover:border-b-green relative">
            <a href="#" class="text-lg text-green-dark pb-12">Menu item 3</a>
          </li>
          <li class="pb-3 border-b-4 border-b-white hover:border-b-green relative">
            <a href="#" class="text-lg text-green-dark pb-12">Menu item 4</a>
          </li>
          <li class="pb-3 border-b-4 border-b-white hover:border-b-green relative">
            <a href="#" class="text-lg text-green-dark pb-12">Menu item 5</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="relative max-lg:hidden">
      <div class="size-[30px] md:absolute top-2 md:-translate-y-2 md:translate-x-6 -right-5 z-50">
        <button @click="search_open = !search_open" class="bg-green-mid text-white flex items-center justify-center md:absolute z-50 top-1/2 left-1/2 md:-translate-y-1/2 md:-translate-x-1/2 size-[30px] rounded-full outline-0" :class="{search_open: 'bg-white'}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3" x-show="!search_open">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3" x-show="search_open" x-cloak>
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
          <span class="sr-only">Open search</span>
        </button>
      </div>
    </div>
  </div>
</nav>
