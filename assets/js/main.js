/**
* Template Name: Appland - v4.7.0
* Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight
    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Gallery Slider
   */
  new Swiper('.gallery-slider', {
    speed: 400,
    loop: true,
    centeredSlides: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 30
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      992: {
        slidesPerView: 5,
        spaceBetween: 30
      },
      1200: {
        slidesPerView: 7,
        spaceBetween: 30
      }
    }
  });

  /**
   * Initiate gallery lightbox 
   */
  const galleryLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 2,
        spaceBetween: 40
      }
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  });

})()




/******** MOSTRA ARTICOLI - BLOG *****************/
function showHiddenArticle() {
  const hiddenArticle = document.querySelectorAll('.article.hidden');
  hiddenArticle.forEach(article => article.classList.remove('hidden'));
}

/*******Pinterest card**************/

$(document).ready(function() {
  $('#pinBoot').pinterest_grid({
  no_columns: 4,
  padding_x: 10,
  padding_y: 10,
  margin_bottom: 50,
  single_column_breakpoint: 700
  });
  });


;(function ($, window, document, undefined) {
var pluginName = 'pinterest_grid',
  defaults = {
      padding_x: 10,
      padding_y: 10,
      no_columns: 3,
      margin_bottom: 50,
      single_column_breakpoint: 700
  },
  columns,
  $article,
  article_width;

function Plugin(element, options) {
  this.element = element;
  this.options = $.extend({}, defaults, options) ;
  this._defaults = defaults;
  this._name = pluginName;
  this.init();
}

Plugin.prototype.init = function () {
  var self = this,
      resize_finish;

  $(window).resize(function() {
      clearTimeout(resize_finish);
      resize_finish = setTimeout( function () {
          self.make_layout_change(self);
      }, 11);
  });

  self.make_layout_change(self);

  setTimeout(function() {
      $(window).resize();
  }, 500);
};

Plugin.prototype.calculate = function (single_column_mode) {
  var self = this,
      tallest = 0,
      row = 0,
      $container = $(this.element),
      container_width = $container.width();
      $article = $(this.element).children();

  if(single_column_mode === true) {
      article_width = $container.width() - self.options.padding_x;
  } else {
      article_width = ($container.width() - self.options.padding_x * self.options.no_columns) / self.options.no_columns;
  }

  $article.each(function() {
      $(this).css('width', article_width);
  });

  columns = self.options.no_columns;

  $article.each(function(index) {
      var current_column,
          left_out = 0,
          top = 0,
          $this = $(this),
          prevAll = $this.prevAll(),
          tallest = 0;

      if(single_column_mode === false) {
          current_column = (index % columns);
      } else {
          current_column = 0;
      }

      for(var t = 0; t < columns; t++) {
          $this.removeClass('c'+t);
      }

      if(index % columns === 0) {
          row++;
      }

      $this.addClass('c' + current_column);
      $this.addClass('r' + row);

      prevAll.each(function(index) {
          if($(this).hasClass('c' + current_column)) {
              top += $(this).outerHeight() + self.options.padding_y;
          }
      });

      if(single_column_mode === true) {
          left_out = 0;
      } else {
          left_out = (index % columns) * (article_width + self.options.padding_x);
      }

      $this.css({
          'left': left_out,
          'top' : top
      });
  });

  this.tallest($container);
  $(window).resize();
};

Plugin.prototype.tallest = function (_container) {
  var column_heights = [],
      largest = 0;

  for(var z = 0; z < columns; z++) {
      var temp_height = 0;
      _container.find('.c'+z).each(function() {
          temp_height += $(this).outerHeight();
      });
      column_heights[z] = temp_height;
  }

  largest = Math.max.apply(Math, column_heights);
  _container.css('height', largest + (this.options.padding_y + this.options.margin_bottom));
};

Plugin.prototype.make_layout_change = function (_self) {
  if($(window).width() < _self.options.single_column_breakpoint) {
      _self.calculate(true);
  } else {
      _self.calculate(false);
  }
};

$.fn[pluginName] = function (options) {
  return this.each(function () {
      if (!$.data(this, 'plugin_' + pluginName)) {
          $.data(this, 'plugin_' + pluginName,
          new Plugin(this, options));
      }
  });
}

})(jQuery, window, document); 

