// Dropdown menus

const dropdownLinks = document.querySelectorAll('.site-header__dropdown-links')
const header = document.getElementById('header')
const dropdown = document.getElementById('dropdown-background')
const subMenus = document.querySelectorAll('.site-header__dropdown-menu')
let menuHights = [
    '320px',
    '280px',
]

dropdownLinks.forEach((item, idx) => {
    item.addEventListener('mouseover', () => {
        menu = subMenus[idx]
        dropdown.style.height = menuHights[idx]
        dropdown.classList.add('active')

        menu.style.visibility = 'visible'
        menu.classList.add('show')
    })
    item.addEventListener('mouseleave', () => {
        menu = subMenus[idx]
        dropdown.style.height = 0
        dropdown.classList.remove('active')

        menu.style.visibility = 'hidden'
        menu.classList.remove('show')
    })
})

dropdown.addEventListener('mouseover', () => {
    dropdown.classList.add('active')
})

dropdown.addEventListener('mouseleave', () => {
    dropdown.style.height = 0
    dropdown.classList.remove('active')
    subMenus.forEach(menu => {
        menu.style.visibility = 'hidden'
        menu.classList.remove('show')
    })
})

// Google map JS

class GMap {
    constructor() {
      document.querySelectorAll(".acf-map").forEach(el => {
        this.new_map(el)
      })
    }
  
    new_map($el) {
      var $markers = $el.querySelectorAll(".marker")
  
      var args = {
        zoom: 16,
        center: new google.maps.LatLng(0, 0),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
  
      var map = new google.maps.Map($el, args)
      map.markers = []
      var that = this
  
      // add markers
      $markers.forEach(function (x) {
        that.add_marker(x, map)
      })
  
      // center map
      this.center_map(map)
    } // end new_map
  
    add_marker($marker, map) {
      var latlng = new google.maps.LatLng($marker.getAttribute("data-lat"), $marker.getAttribute("data-lng"))
  
      var marker = new google.maps.Marker({
        position: latlng,
        map: map
      })
  
      map.markers.push(marker)
  
      // if marker contains HTML, add it to an infoWindow
      if ($marker.innerHTML) {
        // create info window
        var infowindow = new google.maps.InfoWindow({
          content: $marker.innerHTML
        })
  
        // show info window when marker is clicked
        google.maps.event.addListener(marker, "click", function () {
          infowindow.open(map, marker)
        })
      }
    } // end add_marker
  
    center_map(map) {
      var bounds = new google.maps.LatLngBounds()
  
      // loop through all markers and create bounds
      map.markers.forEach(function (marker) {
        var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng())
  
        bounds.extend(latlng)
      })
  
      // only 1 marker?
      if (map.markers.length == 1) {
        // set center of map
        map.setCenter(bounds.getCenter())
        map.setZoom(16)
      } else {
        // fit to bounds
        map.fitBounds(bounds)
      }
    } // end center_map
  }
  const googleMap = new GMap()

//  Carousel JS

// Carousel DOM elements
const carousel = document.getElementById('carousel')
const carouselBtnLeft = document.getElementById('carousel-left')
const carouselBtnRight = document.getElementById('carousel-right')

let carouselIndex = 1
const carouselFlex = document.getElementById('carousel-flex')
let imgArr = carouselFlex.querySelectorAll('img')
const carouselBlurbs = document.querySelectorAll('.carousel__blurb')

const changeCarouselInfobox = () => {
    carouselBlurbs.forEach(blurb => {
        blurb.classList.remove('active')
    })
    carouselBlurbs[carouselIndex - 1].classList.add('active')
}

carouselBtnRight.addEventListener('click', () => {
    if (carouselIndex > carouselFlex.children.length -1) {
        carouselFlex.style.transform = `translateX(0%)`
        carouselIndex = 1
    } else {
        carouselFlex.style.transform = `translateX(-${carouselIndex * 100}% )`
        carouselIndex ++
    }

    changeCarouselInfobox()
})

carouselBtnLeft.addEventListener('click', () => {
    if (carouselIndex == 1) {
        carouselFlex.style.transform = `translateX(-${100 * (carouselFlex.children.length -1)}%)`
        carouselIndex = carouselFlex.children.length 
    } else {
        carouselIndex --
        carouselFlex.style.transform = `translateX(-${(carouselIndex - 1) * 100}% )`
    }
    
    changeCarouselInfobox()

})
  