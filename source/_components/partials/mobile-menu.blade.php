
{{--{% import _self as menus %}--}}
<div class="clear-left md:clear-none relative z-110 md:sticky md:top-0 lg:hidden">
  <div class="mobile-menu bg-green-dark min-h-screen max-h-full min-w-screen w-full sticky py-4 h-full overflow-y-scroll"
       x-show="burgerOpen"
       x-transition:enter="transition ease-out duration-300"
       x-transition:enter-start="-translate-y-full"
       x-transition:enter-end="translate-y-0"
       x-transition:leave="transition ease-out duration-300"
       x-transition:leave-start="-translate-y-0"
       x-transition:leave-end="-translate-y-full" ="{'bg-opacity-0':="" burgerOpen}"="">
    <div class="absolute w-full h-full min-h-screen min-w-screen overflow-y-scroll">
      <nav class="container mx-auto w-full p-4">
        <ul class="flex flex-col mb-4" x-data="{'submenu': false, 'subsubmenu': false}">
          <li class="mb-4 pb-4 border-b border-b-white hover:border-green-mid">
            <div class="relative w-full flex items-center justify-between">
              <a href="#" class="w-full text-2xl text-white">Menu item 1</a>
              <span @click="submenu = submenu == 'sub-menu-item-1' ? false : 'sub-menu-item-1'" class="text-2xl py-2 font-light text-white absolute right-0.5">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 12.2 20.9" style="enable-background:new 0 0 12.2 20.9;" xml:space="preserve" width="16" height="16" class="ml-auto">
                  <path class="fill-white" d="M1.8,19.4c-0.1,0-0.3,0-0.4-0.1c-0.2-0.2-0.2-0.5,0-0.7l8.1-8.1L1.4,2.4c-0.2-0.2-0.2-0.5,0-0.7s0.5-0.2,0.7,0
                  l8.8,8.8l-8.8,8.8C2,19.3,1.9,19.4,1.8,19.4z"></path>
                </svg>
              </span>
            </div>
            <x-partials.mobile-menu-children parent-key="sub-menu-item-1" parent-title="Menu item 1"/>
          </li>
          <li class="mb-4 pb-4 border-b border-b-white hover:border-green-mid">
            <div class="relative w-full flex items-center justify-between">
              <a href="#" class="w-full text-2xl text-white">Menu item 2</a>
            </div>
          </li>
          <li class="mb-4 pb-4 border-b border-b-white hover:border-green-mid">
            <div class="relative w-full flex items-center justify-between">
              <a href="#" class="w-full text-2xl text-white">Menu item 3</a>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>
{{--
{% macro menu_grandchildren(items, attributes, parent_key, parent_index, parent) %}
{% set grandchild_section = parent_key ~ parent_index %}
<div x-show="subsubmenu === '{{grandchild_section}}'"
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
 @click="subsubmenu = subsubmenu == '{{grandchild_section}}' ? false : '{{grandchild_section}}'">
<path d="M15.1,19.4c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l6.3-6.3H2.5c-0.6,0-1-0.4-1-1s0.4-1,1-1h18.2l-6.3-6.3
c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l8,8c0.1,0.1,0.2,0.2,0.2,0.3c0,0.1,0.1,0.2,0.1,0.3c0,0,0,0,0,0l0,0c0,0,0,0,0,0s0,0,0,0l0,0
c0,0,0,0,0,0c0,0.1,0,0.2-0.1,0.3c0,0.1-0.1,0.2-0.2,0.3l-8,8C15.6,19.3,15.4,19.4,15.1,19.4z"></path>
</svg>
<span class="ml-2 text-white text-lg cursor-pointer" @click="subsubmenu = subsubmenu == '{{grandchild_section}}' ? false : '{{grandchild_section}}'">Back to {{parent_key}}</span>
</div>
<a href="{{parent.url}}" class="block mt-4 text-white text-xl font-light mb-4">{{parent.title}}</a>
</div>
<ul class="w-full flex flex-col space-y-4">
{% for item in items %}
<li>
{%
set item_classes = [
item.in_active_trail ? 'underline' : 'opacity-70',
]
%}
{{ link(item.title, item.url, item.attributes.addClass('text-white text-lg hover:underline hover:opacity-100').addClass(item_classes)) }}
</li>
{% endfor %}
</ul>
</div>
</div>
{% endmacro %}
--}}
