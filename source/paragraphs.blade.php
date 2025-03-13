@extends('_layouts.proto')

@section('body')
  <x-proto.header />

  <x-proto.section title="Text">
    <x-paragraph.text-only>
      <h2>Totam rem aperiam</h2>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
    </x-paragraph.text-only>
  </x-proto.section>

  <x-proto.section title="Accordion">
    <x-paragraph.accordion title="Nemo enim ipsam voluptatem">
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

  <x-proto.section title="Blockquote">
    <x-paragraph.block-quote />
  </x-proto.section>

  <x-proto.section title="Testimonials">
    <x-paragraph.testimonials show-title="1">
      <x-paragraph.testimonial background="audit-assurance/parallax_image.jpg" source="Bob Brown - UHY Member Firm">
        <x-slot name="main">
          <p class="text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor</p>
        </x-slot>
      </x-paragraph.testimonial>
      <x-paragraph.testimonial background="audit-assurance/parallax_image.jpg" source="Bob Brown - UHY Member Firm">
        <x-slot name="main">
          <p class="text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor</p>
        </x-slot>
      </x-paragraph.testimonial>
      <x-paragraph.testimonial background="audit-assurance/parallax_image.jpg" source="Bob Brown - UHY Member Firm">
        <x-slot name="main">
          <p class="text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor</p>
        </x-slot>
      </x-paragraph.testimonial>
    </x-paragraph.testimonials>
  </x-proto.section>

  <x-proto.section title="CTA [left]">
    <x-paragraph.cta position="left" text="Left aligned CTA" />
  </x-proto.section>
  <x-proto.section title="CTA [center]">
    <x-paragraph.cta text="Center aligned CTA" />
  </x-proto.section>
  <x-proto.section title="CTA [center]">
    <x-paragraph.cta position="right" text="Right aligned CTA"/>
  </x-proto.section>
@endsection
