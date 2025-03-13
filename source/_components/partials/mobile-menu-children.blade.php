@props(['parentKey', 'parentTitle'])
<div x-show="submenu === '{{$parentKey}}'" x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="-translate-x-full"
     x-transition:enter-end="translate-x-0"
     x-transition:leave="transition ease-out duration-300"
     x-transition:leave-start="-translate-x-0"
     x-transition:leave-end="-translate-x-full"
     class="absolute top-0 left-0 z-100 w-screen max-w-full bg-green-dark backdrop-blur-3xl pb-60 z-40" x-cloak>
  <div class="container submenu-wrapper">
    <div class="mb-4">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 25.7 20.9" style="enable-background:new 0 0 25.7 20.9;" xml:space="preserve" class="fill-white rotate-180 mt-6" width="20" height="18"
           @click="submenu = submenu == '{{$parentKey}}' ? false : '{{$parentKey}}'">
<path d="M15.1,19.4c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l6.3-6.3H2.5c-0.6,0-1-0.4-1-1s0.4-1,1-1h18.2l-6.3-6.3
c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l8,8c0.1,0.1,0.2,0.2,0.2,0.3c0,0.1,0.1,0.2,0.1,0.3c0,0,0,0,0,0l0,0c0,0,0,0,0,0s0,0,0,0l0,0
c0,0,0,0,0,0c0,0.1,0,0.2-0.1,0.3c0,0.1-0.1,0.2-0.2,0.3l-8,8C15.6,19.3,15.4,19.4,15.1,19.4z"></path>
</svg>
    </div>

    <div class="pb-3 border-b border-b-white mb-4">
      <a href="#" class="block text-2xl text-white">{{$parentTitle}}</a>
    </div>
    <ul class="flex flex-col space-y-3 w-full lg:w-1/3">
      @for ($i = 0; $i < 4; $i ++)
      <li class="flex items-center justify-between">
        <a href="#" class="text-white text-xl hover:underline hover:opacity-100">Sub menu item {{$i+1}}</a>
        @if ($i == 1)
          <span @click="subsubmenu = subsubmenu == '{{$parentKey}}{{$i}}' ? false : '{{$parentKey}}{{$i}}'" class="text-xl px-1 py-2 font-light cursor-pointer">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 12.2 20.9" style="enable-background:new 0 0 12.2 20.9;" xml:space="preserve" width="16" height="16" class="ml-auto">
              <path class="fill-white" d="M1.8,19.4c-0.1,0-0.3,0-0.4-0.1c-0.2-0.2-0.2-0.5,0-0.7l8.1-8.1L1.4,2.4c-0.2-0.2-0.2-0.5,0-0.7s0.5-0.2,0.7,0
            l8.8,8.8l-8.8,8.8C2,19.3,1.9,19.4,1.8,19.4z"></path>
            </svg>
          </span>
          <x-partials.mobile-menu-grandchildren parent-key="{{$parentKey}}" parent-index="{{$i}}" parent-title="Sub menu item {{$i+1}}" grandparent-title="{{$parentTitle}}"/>
        @endif
      </li>
      @endfor
    </ul>
  </div>
</div>
