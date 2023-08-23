/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/app.js":
/*!********************!*\
  !*** ./src/app.js ***!
  \********************/
/***/ (() => {

function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
var dropdownLinks = document.querySelectorAll('.site-header__dropdown-links');
var header = document.getElementById('header');
var dropdown = document.getElementById('dropdown-background');
var subMenus = document.querySelectorAll('.site-header__dropdown-menu');
var menuHights = ['320px', '280px'];
dropdownLinks.forEach(function (item, idx) {
  item.addEventListener('mouseover', function () {
    menu = subMenus[idx];
    dropdown.style.height = menuHights[idx];
    dropdown.classList.add('active');
    menu.style.visibility = 'visible';
    menu.classList.add('show');
  });
  item.addEventListener('mouseleave', function () {
    menu = subMenus[idx];
    dropdown.style.height = 0;
    dropdown.classList.remove('active');
    menu.style.visibility = 'hidden';
    menu.classList.remove('show');
  });
});
dropdown.addEventListener('mouseover', function () {
  dropdown.classList.add('active');
});
dropdown.addEventListener('mouseleave', function () {
  dropdown.style.height = 0;
  dropdown.classList.remove('active');
  subMenus.forEach(function (menu) {
    menu.style.visibility = 'hidden';
    menu.classList.remove('show');
  });
});

// Google map JS
var GMap = /*#__PURE__*/function () {
  function GMap() {
    var _this = this;
    _classCallCheck(this, GMap);
    document.querySelectorAll(".acf-map").forEach(function (el) {
      _this.new_map(el);
    });
  }
  _createClass(GMap, [{
    key: "new_map",
    value: function new_map($el) {
      var $markers = $el.querySelectorAll(".marker");
      var args = {
        zoom: 16,
        center: new google.maps.LatLng(0, 0),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map($el, args);
      map.markers = [];
      var that = this;

      // add markers
      $markers.forEach(function (x) {
        that.add_marker(x, map);
      });

      // center map
      this.center_map(map);
    } // end new_map
  }, {
    key: "add_marker",
    value: function add_marker($marker, map) {
      var latlng = new google.maps.LatLng($marker.getAttribute("data-lat"), $marker.getAttribute("data-lng"));
      var marker = new google.maps.Marker({
        position: latlng,
        map: map
      });
      map.markers.push(marker);

      // if marker contains HTML, add it to an infoWindow
      if ($marker.innerHTML) {
        // create info window
        var infowindow = new google.maps.InfoWindow({
          content: $marker.innerHTML
        });

        // show info window when marker is clicked
        google.maps.event.addListener(marker, "click", function () {
          infowindow.open(map, marker);
        });
      }
    } // end add_marker
  }, {
    key: "center_map",
    value: function center_map(map) {
      var bounds = new google.maps.LatLngBounds();

      // loop through all markers and create bounds
      map.markers.forEach(function (marker) {
        var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
        bounds.extend(latlng);
      });

      // only 1 marker?
      if (map.markers.length == 1) {
        // set center of map
        map.setCenter(bounds.getCenter());
        map.setZoom(16);
      } else {
        // fit to bounds
        map.fitBounds(bounds);
      }
    } // end center_map
  }]);
  return GMap;
}();
var googleMap = new GMap();

//  Carousel JS

var carouselIndex = 1;
var carouselFlex = document.getElementById('carousel-flex');
var imgArr = carouselFlex.querySelectorAll('img');
var carouselBlurbs = document.querySelectorAll('.carousel__blurb');
var changeCarouselInfobox = function changeCarouselInfobox() {
  carouselBlurbs.forEach(function (blurb) {
    blurb.classList.remove('active');
  });
  carouselBlurbs[carouselIndex - 1].classList.add('active');
};
carouselBtnRight.addEventListener('click', function () {
  if (carouselIndex > carouselFlex.children.length - 1) {
    carouselFlex.style.transform = "translateX(0%)";
    carouselIndex = 1;
  } else {
    carouselFlex.style.transform = "translateX(-".concat(carouselIndex * 100, "% )");
    carouselIndex++;
  }
  changeCarouselInfobox();
});
carouselBtnLeft.addEventListener('click', function () {
  if (carouselIndex == 1) {
    carouselFlex.style.transform = "translateX(-".concat(100 * (carouselFlex.children.length - 1), "%)");
    carouselIndex = carouselFlex.children.length;
  } else {
    carouselIndex--;
    carouselFlex.style.transform = "translateX(-".concat((carouselIndex - 1) * 100, "% )");
  }
  changeCarouselInfobox();
});

/***/ }),

/***/ "./src/app.scss":
/*!**********************!*\
  !*** ./src/app.scss ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/bootstrap-custom.scss":
/*!***********************************!*\
  !*** ./src/bootstrap-custom.scss ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
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
/******/ 			"/app": 0,
/******/ 			"app": 0,
/******/ 			"bootstrap-custom": 0
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
/******/ 		var chunkLoadingGlobal = self["webpackChunkone_fake_day_theme"] = self["webpackChunkone_fake_day_theme"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["app","bootstrap-custom"], () => (__webpack_require__("./src/app.js")))
/******/ 	__webpack_require__.O(undefined, ["app","bootstrap-custom"], () => (__webpack_require__("./src/app.scss")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["app","bootstrap-custom"], () => (__webpack_require__("./src/bootstrap-custom.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;