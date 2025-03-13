@props(['parentTitle', 'parentKey'] )
<div x-show="submenu === '{{$parentKey}}'" x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="-translate-x-full"
     x-transition:enter-end="translate-x-0"
     x-transition:leave="transition ease-out duration-300"
     x-transition:leave-start="-translate-x-0"
     x-transition:leave-end="-translate-x-full"
     class="absolute top-full left-0 z-100 w-screen max-w-full bg-green-dark backdrop-blur-3xl py-10 pb-60 z-40" x-cloak>
  <div class="container submenu-wrapper">
    <div class="pb-3 border-b border-b-white mb-4"><a href="#" class="block text-2xl text-white">{{$parentTitle}}</a></div>
      <ul class="flex flex-col space-y-3 w-full lg:w-1/3">
        @for ($i = 0; $i < 3; $i++)
        <li class="flex items-center justify-between">

          <a href="#" class="text-white hover:underline hover:opacity-100">Sub menu item {{$i+1}} </a>
          @if ($i == 1) {{-- Only having children on second item --}}
          <span @click="subsubmenu = subsubmenu == '{{$parentKey}}{{$i}}' ? false : '{{$parentKey}}{{$i}}'" class="text-xl px-1 py-2 pr-6 font-light cursor-pointer">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 12.2 20.9" style="enable-background:new 0 0 12.2 20.9;" xml:space="preserve" width="16" height="16" class="ml-auto">
                  <path class="fill-white" d="M1.8,19.4c-0.1,0-0.3,0-0.4-0.1c-0.2-0.2-0.2-0.5,0-0.7l8.1-8.1L1.4,2.4c-0.2-0.2-0.2-0.5,0-0.7s0.5-0.2,0.7,0
                l8.8,8.8l-8.8,8.8C2,19.3,1.9,19.4,1.8,19.4z"></path>
                </svg>
              </span>
            @for ($j = 0; $j < 5; $j ++)
              <x-partials.main-menu-grandchildren parent-key="{{$parentKey}}" parent-index="{{$i}}" parent-title="Sub menu item {{$i+1}}" grand-parent-title="Menu item 1"/>
            @endfor
          @endif
        </li>
        @endfor
      </ul>
  </div>
</div>
