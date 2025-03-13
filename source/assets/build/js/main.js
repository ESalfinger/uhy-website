/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./source/_assets/js/main.js":
/*!***********************************!*\
  !*** ./source/_assets/js/main.js ***!
  \***********************************/
/***/ (() => {



document.addEventListener('DOMContentLoaded', function () {
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
    var homeHeaderSlider = new Splide('.home-banner-slider', {
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
    });
    homeHeaderSlider.mount(window.splide.Extensions);
  }

  /* Testimonial sliders */
  if (document.querySelector('.testimonial-slider')) {
    var testimonialSliderOptions = {
      type: 'loop',
      arrows: false,
      rewind: false,
      pagination: true,
      cover: true,
      paginationDirection: 'ltr'
    };
    var testimonialSliders = document.getElementsByClassName('testimonial-slider');
    var sliders = [];
    for (var i = 0; i < testimonialSliders.length; i++) {
      var testimonialSlide = new Splide(testimonialSliders[i], testimonialSliderOptions);
      testimonialSlide.mount(window.splide.Extensions);
      sliders.push(testimonialSlide);
    }
    window.sliders = sliders;
  }

  /* Insight sliders */
  if (document.querySelector('.latest-insights')) {
    var latestInsightsSliders = document.getElementsByClassName('latest-insights');
    var latestInsightsSliderOptions = {
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
          perMove: 2
        },
        640: {
          perPage: 1,
          perMove: 1
        }
      },
      intersection: {
        threshold: 0.9
      }
    };
    for (var _i = 0; _i < latestInsightsSliders.length; _i++) {
      var insightSlider = new Splide(latestInsightsSliders[_i], latestInsightsSliderOptions);

      /* Added an intersection for slider items fade in animation */
      insightSlider.on('intersection:in', function (entry) {
        var sliderTrack = entry.target.querySelector('.splide__track');
        sliderTrack.classList.add("slider-viewed");
        sliderTrack.classList.remove("slider-unviewed");
      });
      insightSlider.mount(window.splide.Extensions);
    }
  }

  /**
   * Office finder map
   */

  if (document.querySelector('#map')) {
    var map = L.map('map').setView([13, 1], 1.4);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 20
    }).addTo(map);
    var locations = [[51.5076849, -0.0671937], [51.5427053, -5.0111389], [51.679155, -4.1596985], [52.4357113, -3.5609436], [50.8282448, -0.4807313]];
    for (var _i2 = 0; _i2 < locations.length; _i2++) {
      var icon = L.icon({
        iconUrl: "/assets/images/logos/uhy_shield_green.svg",
        iconSize: [38, 95],
        iconAnchor: [22, 94]
      });
      L.marker([locations[_i2][0], locations[_i2][1]], {
        icon: icon
      }).addTo(map);
    }
  }
});

/***/ }),

/***/ "./source/_assets/css/main.css":
/*!*************************************!*\
  !*** ./source/_assets/css/main.css ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/main": 0,
/******/ 			"css/main": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./source/_assets/js/main.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./source/_assets/css/main.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;