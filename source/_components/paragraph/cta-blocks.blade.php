<!--
* CTA Blocks
* This paragraph will act as a wrapping element for the CTA Block Paragraph
* Customisable column count & toggle to "push" the element up
-->
@props(['columns' => 3, 'raised' => false])
<div @class([
  'paragraph--cta-blocks grid grid-cols-1 gap-5 container mx-auto' => true,
  '-translate-y-28' => $raised,
  'lg:grid-cols-3' => $columns == 3,
  'lg:grid-cols-2' => $columns == 2,
])>
  {{$slot}}
</div>
