@props(['image' => 'profile.jpg', 'name' => 'Malcom Winston', 'phone' => '+441212994799', 'phoneFormatted' => '+44 121 299 4799', 'email' => 'm.winston@uhy-uk.com'])
<article class="flex gap-11">
  <img src="/assets/images/misc/locations/{{$image}}" alt="A headshot of {{$name}}" class="size-[90px]">
  <div>
    <h4 class="text-black-light font-bold text-base">Contact Partner</h4>
    <p class="text-black-light font-light">{{$name}}</p>
    <table role="list">
      <tr>
        <td><span class="text-green-mid">T.&nbsp;</span></td>
        <td><a href="tel:{{$phone}}" class="text-black-light font-light">{{$phoneFormatted}}</a></td>
      </tr>
      <tr>
        <td><span class="text-green-mid">E.&nbsp;</span></td>
        <td><a href="mailto:{{$email}}" class="text-black-light font-light">{{$email}}</a></td>
      </tr>
    </table>
  </div>
</article>
