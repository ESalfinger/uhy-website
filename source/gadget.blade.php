@extends('_layouts.proto')

@section('body')
  <x-proto.header />

  <x-proto.section title="Pagination">
    <x-gadget.pagination />
  </x-proto.section>

  <x-proto.section title="Accordion">
    <x-paragraph.accordion>
      <x-paragraph.accordion-item>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
        <ul>
          <li>Dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
          <li>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</li>
          <li>At vero eos et accusam et justo duo dolores et ea rebum</li>
          <li>Stet clita kasd gubergren, no sea takimata sanctus est</li>
        </ul>
      </x-paragraph.accordion-item>
      <x-paragraph.accordion-item title="At vero eos et accusam">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
        <ul>
          <li>Dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
          <li>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</li>
          <li>At vero eos et accusam et justo duo dolores et ea rebum</li>
          <li>Stet clita kasd gubergren, no sea takimata sanctus est</li>
        </ul>
      </x-paragraph.accordion-item>
      <x-paragraph.accordion-item title="Aliquyam erat sed diam voluptua">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
        <ul>
          <li>Dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
          <li>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</li>
          <li>At vero eos et accusam et justo duo dolores et ea rebum</li>
          <li>Stet clita kasd gubergren, no sea takimata sanctus est</li>
        </ul>
      </x-paragraph.accordion-item>
      <x-paragraph.accordion-item title="Duo dolores et ea rebum">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
        <ul>
          <li>Dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
          <li>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</li>
          <li>At vero eos et accusam et justo duo dolores et ea rebum</li>
          <li>Stet clita kasd gubergren, no sea takimata sanctus est</li>
        </ul>
      </x-paragraph.accordion-item>
      <x-paragraph.accordion-item title="Duo dolores et ea rebum">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
        <ul>
          <li>Dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
          <li>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</li>
          <li>At vero eos et accusam et justo duo dolores et ea rebum</li>
          <li>Stet clita kasd gubergren, no sea takimata sanctus est</li>
        </ul>
      </x-paragraph.accordion-item>
    </x-paragraph.accordion>
  </x-proto.section>
  <x-proto.section title="Slider">
    <x-block-type.latest-insights />
  </x-proto.section>
@endsection
