"use strict";

document.addEventListener( 'DOMContentLoaded', function() {

  /**
   * Splide sliders
   * - Documentation: https://splidejs.com/documents/
   *
   * All sliders follow the same pattern - Except the homepage slider.
   *  - Checks if relevant element with class appears on the page
   *  - If found, gather all relevant elements into a list
   *  - Loop the list and initialise each slider (https://splidejs.com/guides/getting-started/#multiple-carousels)
   *  - Options are defined within block for each slider style.
   */

  /* Homepage banner */
  if (document.querySelector('.home-banner-slider')) {

    let homeHeaderSlider = new Splide( '.home-banner-slider', {
      type: 'loop',
      arrows: false,
      rewind: true,
      cover: true,
      autoplay: 'pause',
      interval: 1000,
      video: {
        loop: true,
        mute: true,
        playerOptions: {
          htmlVideo: {
            autoplay: true,
            controls: false,
            muted: true,
            loop: true
          }
        }
      }
    } );
    homeHeaderSlider.mount(window.splide.Extensions);
  }

  /* Testimonial sliders */
  if (document.querySelector('.testimonial-slider')) {
    let testimonialSliderOptions = {
      type: 'loop',
      arrows: false,
      rewind: false,
      pagination: true,
      cover: true,
      paginationDirection: 'ltr',
    }

    let testimonialSliders = document.getElementsByClassName('testimonial-slider');
    let sliders = []
    for (let i = 0; i < testimonialSliders.length; i++) {
      let testimonialSlide = new Splide(testimonialSliders[i], testimonialSliderOptions);
      testimonialSlide.mount(window.splide.Extensions)
      sliders.push(testimonialSlide)
    }

    window.sliders = sliders

  }

  /* Insight sliders */
  if (document.querySelector('.latest-insights')) {

    let latestInsightsSliders = document.getElementsByClassName('latest-insights');
    let latestInsightsSliderOptions = {
      type: 'slide',
      perPage: 3,
      arrows: false,
      rewind: false,
      interval: 1000,
      gap: 20,
      pagination: true,
      paginationDirection: 'ltr',
      perMove: 3,
      breakpoints: {
        1024: {
          perPage: 2,
          perMove: 2,
        },
        640: {
          perPage: 1,
          perMove: 1,
        }
      },
      intersection: {
        threshold: 0.9
      }
    }

    for (let i = 0; i < latestInsightsSliders.length; i++) {
       let insightSlider = new Splide(latestInsightsSliders[i], latestInsightsSliderOptions);

       /* Added an intersection for slider items fade in animation */
       insightSlider.on('intersection:in', function(entry) {
         let sliderTrack = entry.target.querySelector('.splide__track');
         sliderTrack.classList.add("slider-viewed");
         sliderTrack.classList.remove("slider-unviewed");
       })
      insightSlider.mount(window.splide.Extensions );
    }
  }


  /**
   * Office finder map
   */

  if (document.querySelector('#map')) {
    let map = L.map('map').setView([13, 1], 1.4);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 20
    }).addTo(map);

    let locations = [
      [51.5076849,-0.0671937],
      [51.5427053,-5.0111389],
      [51.679155,-4.1596985],
      [52.4357113,-3.5609436],
      [50.8282448,-0.4807313],
    ]

    for (let i =0; i < locations.length; i++) {
      let icon = L.icon({
        iconUrl: "/assets/images/logos/uhy_shield_green.svg",
        iconSize: [38,95],
        iconAnchor:   [22, 94]
      })

      L.marker([locations[i][0], locations[i][1]], {icon: icon}).addTo(map)
    }
  }
});
