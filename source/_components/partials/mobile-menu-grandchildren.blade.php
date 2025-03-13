@props(['parentKey', 'parentIndex', '$grandParentTitle'])
@php($grandchildSection = $parentKey . $parentIndex)
<div x-show="subsubmenu === '{{$grandchildSection}}'"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="-translate-x-full"
     x-transition:enter-end="translate-x-0"
     x-transition:leave="transition ease-out duration-300"
     x-transition:leave-start="-translate-x-0" x-transition:leave-end="-translate-x-full"
     class="absolute z-100 top-0 left-0 w-screen max-w-full max-h-full min-h-max h-full bg-green-dark py-10 z-50">
  <div class="container sub-submenu-wrapper">
    <div class="mb-8">
      <div class="flex items-center pb-2.5 border-b-white border-b group opacity-70 hover:opacity-100">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 25.7 20.9" style="enable-background:new 0 0 25.7 20.9;" xml:space="preserve"
             class="fill-white text-2xl rotate-180 cursor-pointer opacity-70 group-hover:opacity-100" width="20" height="18"
             @click="subsubmenu = subsubmenu == '{{$grandchildSection}}' ? false : '{{$grandchildSection}}'">
            <path d="M15.1,19.4c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l6.3-6.3H2.5c-0.6,0-1-0.4-1-1s0.4-1,1-1h18.2l-6.3-6.3
            c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l8,8c0.1,0.1,0.2,0.2,0.2,0.3c0,0.1,0.1,0.2,0.1,0.3c0,0,0,0,0,0l0,0c0,0,0,0,0,0s0,0,0,0l0,0
            c0,0,0,0,0,0c0,0.1,0,0.2-0.1,0.3c0,0.1-0.1,0.2-0.2,0.3l-8,8C15.6,19.3,15.4,19.4,15.1,19.4z"></path>
          </svg>
        <span class="ml-2 text-white text-lg cursor-pointer" @click="subsubmenu = subsubmenu == '{{$grandchildSection}}' ? false : '{{$grandchildSection}}'">Back to {{$grandparentTitle}}</span>
      </div>
      <a href="#" class="block mt-4 text-white text-xl font-light mb-4">Sub menu item 2</a>
    </div>
    <ul class="w-full flex flex-col space-y-4">
      @for($i = 0; $i < 4; $i++)
        <li>
          <a href="#" class="text-white text-lg hover:underline hover:opacity-100">Grand child {{$i+1}}</a>
        </li>
      @endfor
    </ul>
  </div>
</div>
