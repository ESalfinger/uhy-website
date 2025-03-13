@props(['linkText' => 'Find out more', 'href' => '#', 'colour' => 'white'])
<a href="{{$href}}" class="text-{{$colour}} uppercase text-sm flex justify-center items-center w-fit relative after:ease-out after:duration-300 after:absolute after:-bottom-1.5 after:h-0.5 after:w-0 hover:after:bg-{{$colour}} hover:after:w-full after:transition-all"><span>{{$linkText}}</span><img src="/assets/images/icons/arrow-right-{{$colour}}.svg" alt="" class="text-white ml-3 w-4 h-3" width="15" height="12"></a>
