var navbar_initialized,
  big_image,
  transparent = !0,
  transparentDemo = !0,
  fixedTop = !1,
  backgroundOrange = !1,
  toggle_initialized = !1;
function debounce(o, a, n) {
  var l;
  return function() {
    var e = this,
      t = arguments;
    clearTimeout(l),
      (l = setTimeout(function() {
        (l = null), n || o.apply(e, t);
      }, a)),
      n && !l && o.apply(e, t);
  };
}
$(document).ready(function() {
  (window_width = $(window).width()),
    $(".dropdown-menu a.dropdown-toggle").on("click", function(e) {
      var t = $(this),
        o = $(this).offsetParent(".dropdown-menu");
      return (
        $(this)
          .next()
          .hasClass("show") ||
          $(this)
            .parents(".dropdown-menu")
            .first()
            .find(".show")
            .removeClass("show"),
        $(this)
          .next(".dropdown-menu")
          .toggleClass("show"),
        $(this)
          .parent("li")
          .toggleClass("show"),
        $(this)
          .parents("li.nav-item.dropdown.show")
          .on("hidden.bs.dropdown", function(e) {
            $(".dropdown-menu .show").removeClass("show");
          }),
        o.parent().hasClass("navbar-nav") ||
          t.next().css({ top: t[0].offsetTop, left: o.outerWidth() - 4 }),
        !1
      );
    }),
    0 != $(".sections-page").length &&
      ($('a[data-scroll="true"]').click(function(e) {
        var t = $(this).data("id");
        1 == $(this).data("scroll") &&
          void 0 !== t &&
          (e.preventDefault(),
          $("html, body").animate({ scrollTop: $(t).offset().top - 50 }, 1e3));
      }),
      $('.navbar-collapse a[data-scroll="true"]').click(function() {
        setTimeout(function() {
          1 == pk.misc.navbar_menu_visible &&
            ($("html").removeClass("nav-open"),
            (pk.misc.navbar_menu_visible = 0),
            $("#bodyClick").remove(),
            setTimeout(function() {
              $toggle.removeClass("toggled");
            }, 550));
        }, 550);
      })),
    0 != $('[data-toggle="tooltip"]').length &&
      $('[data-toggle="tooltip"]').tooltip(),
    0 != $(".switch").length && $(".switch")[".bootstrapSwitch"](),
    0 != $("[data-toggle='switch']").length &&
      $("[data-toggle='switch']").bootstrapSwitch(),
    0 != $(".selectpicker").length && $(".selectpicker").selectpicker(),
    0 != $(".modal").length && $(".modal").appendTo("body"),
    0 != $(".tagsinput").length && $(".tagsinput").tagsinput(),
    $(".textarea-limited").keyup(function() {
      var e = $(this).attr("maxlength"),
        t = $(this).val().length;
      if (e <= t)
        $("#textarea-limited-message").text(" you have reached the limit");
      else {
        var o = e - t;
        $("#textarea-limited-message").text(o + " characters left");
      }
    }),
    768 <= window_width &&
      0 != (big_image = $('.page-header[data-parallax="true"]')).length &&
      $(window).on("scroll", pk.checkScrollForPresentationPage),
    $("#navbarToggler")
      .on("show.bs.collapse", function() {
        $("nav").hasClass("navbar-transparent") &&
          $(document).scrollTop() < 50 &&
          ($(".navbar").addClass("no-transition"),
          $("nav").removeClass("navbar-transparent"));
      })
      .on("hidden.bs.collapse", function() {
        $(document).scrollTop() < 50 &&
          ($(".navbar").removeClass("no-transition"),
          $("nav:first-of-type").addClass("navbar-transparent"));
      }),
    0 != $(".navbar[color-on-scroll]").length &&
      $(window).on("scroll", pk.checkScrollForTransparentNavbar),
    $(".btn-tooltip").tooltip(),
    $(".label-tooltip").tooltip(),
    $(".carousel").carousel({ interval: 2e4 }),
    $(".form-control")
      .on("focus", function() {
        $(this)
          .parent(".input-group")
          .addClass("input-group-focus");
      })
      .on("blur", function() {
        $(this)
          .parent(".input-group")
          .removeClass("input-group-focus");
      }),
    pk.initPopovers(),
    pk.initSliders(),
    pk.initVideoBackground(),
    0 != $(".nav-down").length && pk.checkScrollForMovingNavbar();
}),
  $(document).on("click", ".navbar-toggler", function() {
    ($toggle = $(this)),
      1 == pk.misc.navbar_menu_visible
        ? ($("html").removeClass("nav-open"),
          (pk.misc.navbar_menu_visible = 0),
          $("#bodyClick").remove(),
          setTimeout(function() {
            $toggle.removeClass("toggled");
          }, 550))
        : (setTimeout(function() {
            $toggle.addClass("toggled");
          }, 580),
          (div = '<div id="bodyClick"></div>'),
          $(div)
            .appendTo("body")
            .click(function() {
              $("html").removeClass("nav-open"),
                (pk.misc.navbar_menu_visible = 0),
                setTimeout(function() {
                  $toggle.removeClass("toggled"), $("#bodyClick").remove();
                }, 550);
            }),
          $("html").addClass("nav-open"),
          (pk.misc.navbar_menu_visible = 1));
  }),
  (pk = {
    misc: { navbar_menu_visible: 0 },
    checkScrollForTransparentNavbar: debounce(function() {
      $(document).scrollTop() > $(".navbar").attr("color-on-scroll")
        ? transparent &&
          ((transparent = !1),
          $(".navbar[color-on-scroll]").removeClass("navbar-transparent"))
        : transparent ||
          ((transparent = !0),
          $(".navbar[color-on-scroll]").addClass("navbar-transparent"));
    }, 17),
    checkScrollForMovingNavbar: function() {
      (navbarHeight = $(".navbar").outerHeight()),
        $(window).scroll(function(e) {
          didScroll = !0;
        }),
        setInterval(function() {
          didScroll && (hasScrolled(), (didScroll = !1));
        }, 250);
    },
    checkScrollForPresentationPage: debounce(function() {
      (oVal = $(window).scrollTop() / 3),
        big_image.css({
          transform: "translate3d(0," + oVal + "px,0)",
          "-webkit-transform": "translate3d(0," + oVal + "px,0)",
          "-ms-transform": "translate3d(0," + oVal + "px,0)",
          "-o-transform": "translate3d(0," + oVal + "px,0)"
        });
    }, 4),
    initVideoBackground: function() {
      $('[data-toggle="video"]').click(function() {
        (id_video = $(this).data("video")),
          (video = $("#" + id_video).get(0)),
          (parent = $(this)
            .parent("div")
            .parent("div")),
          video.paused
            ? (video.play(),
              $(this).html('<i class="fa fa-pause"></i> Pause Video'),
              parent.addClass("state-play"))
            : (video.pause(),
              $(this).html('<i class="fa fa-play"></i> Play Video'),
              parent.removeClass("state-play"));
      });
    },
    initPopovers: function() {
      0 != $('[data-toggle="popover"]').length &&
        ($("body").append('<div class="popover-filter"></div>'),
        $('[data-toggle="popover"]')
          .popover()
          .on("show.bs.popover", function() {
            $(".popover-filter").click(function() {
              $(this).removeClass("in"),
                $('[data-toggle="popover"]').popover("hide");
            }),
              $(".popover-filter").addClass("in");
          })
          .on("hide.bs.popover", function() {
            $(".popover-filter").removeClass("in");
          }));
    },
    initSliders: function() {
      if (0 != $("#sliderRegular").length) {
        var e = document.getElementById("sliderRegular");
        noUiSlider.create(e, {
          start: [5e3],
          range: { min: [2e3], max: [1e4] }
        });
      }
      if (0 != $("#sliderDouble").length) {
        var t = document.getElementById("sliderDouble");
        noUiSlider.create(t, {
          start: [20, 80],
          connect: !0,
          range: { min: 0, max: 100 }
        });
      }
    }
  });
var didScroll,
  searchVisible = 0,
  lastScrollTop = ((transparent = !0),
  (transparentDemo = !0),
  (fixedTop = !1),
  (toggle_initialized = !1),
  0),
  delta = 5,
  navbarHeight = 0;
function debounce(o, a, n) {
  var l;
  return function() {
    var e = this,
      t = arguments;
    clearTimeout(l),
      (l = setTimeout(function() {
        (l = null), n || o.apply(e, t);
      }, a)),
      n && !l && o.apply(e, t);
  };
}
function hasScrolled() {
  var e = $(this).scrollTop();
  Math.abs(lastScrollTop - e) <= delta ||
    (lastScrollTop < e && navbarHeight < e
      ? $(".navbar.nav-down")
          .removeClass("nav-down")
          .addClass("nav-up")
      : e + $(window).height() < $(document).height() &&
        $(".navbar.nav-up")
          .removeClass("nav-up")
          .addClass("nav-down"),
    (lastScrollTop = e));
}
(demo = {
  initContactUsMap: function() {
    var e = new google.maps.LatLng(54.2, 21.75),
      t = {
        zoom: 16,
        center: e,
        styles: [
          { elementType: "geometry", stylers: [{ color: "#242f3e" }] },
          {
            elementType: "labels.text.stroke",
            stylers: [{ color: "#242f3e" }]
          },
          { elementType: "labels.text.fill", stylers: [{ color: "#746855" }] },
          {
            featureType: "administrative.locality",
            elementType: "labels.text.fill",
            stylers: [{ color: "#d59563" }]
          },
          {
            featureType: "poi",
            elementType: "labels.text.fill",
            stylers: [{ color: "#d59563" }]
          },
          {
            featureType: "poi.park",
            elementType: "geometry",
            stylers: [{ color: "#263c3f" }]
          },
          {
            featureType: "poi.park",
            elementType: "labels.text.fill",
            stylers: [{ color: "#6b9a76" }]
          },
          {
            featureType: "road",
            elementType: "geometry",
            stylers: [{ color: "#38414e" }]
          },
          {
            featureType: "road",
            elementType: "geometry.stroke",
            stylers: [{ color: "#212a37" }]
          },
          {
            featureType: "road",
            elementType: "labels.text.fill",
            stylers: [{ color: "#9ca5b3" }]
          },
          {
            featureType: "road.highway",
            elementType: "geometry",
            stylers: [{ color: "#746855" }]
          },
          {
            featureType: "road.highway",
            elementType: "geometry.stroke",
            stylers: [{ color: "#1f2835" }]
          },
          {
            featureType: "road.highway",
            elementType: "labels.text.fill",
            stylers: [{ color: "#f3d19c" }]
          },
          {
            featureType: "transit",
            elementType: "geometry",
            stylers: [{ color: "#2f3948" }]
          },
          {
            featureType: "transit.station",
            elementType: "labels.text.fill",
            stylers: [{ color: "#d59563" }]
          },
          {
            featureType: "water",
            elementType: "geometry",
            stylers: [{ color: "#17263c" }]
          },
          {
            featureType: "water",
            elementType: "labels.text.fill",
            stylers: [{ color: "#515c6d" }]
          },
          {
            featureType: "water",
            elementType: "labels.text.stroke",
            stylers: [{ color: "#17263c" }]
          }
        ],
        scrollwheel: !1
      },
      o = new google.maps.Map(document.getElementById("contactUsMap"), t);
    new google.maps.Marker({
      position: e,
      title: "Creative Tim Office"
    }).setMap(o);
  },
  initContactUsMap2: function() {
    var e = new google.maps.LatLng(54.2, 21.75),
      t = {
        zoom: 16,
        center: e,
        styles: [
          { elementType: "geometry", stylers: [{ color: "#242f3e" }] },
          {
            elementType: "labels.text.stroke",
            stylers: [{ color: "#242f3e" }]
          },
          { elementType: "labels.text.fill", stylers: [{ color: "#746855" }] },
          {
            featureType: "administrative.locality",
            elementType: "labels.text.fill",
            stylers: [{ color: "#d59563" }]
          },
          {
            featureType: "poi",
            elementType: "labels.text.fill",
            stylers: [{ color: "#d59563" }]
          },
          {
            featureType: "poi.park",
            elementType: "geometry",
            stylers: [{ color: "#263c3f" }]
          },
          {
            featureType: "poi.park",
            elementType: "labels.text.fill",
            stylers: [{ color: "#6b9a76" }]
          },
          {
            featureType: "road",
            elementType: "geometry",
            stylers: [{ color: "#38414e" }]
          },
          {
            featureType: "road",
            elementType: "geometry.stroke",
            stylers: [{ color: "#212a37" }]
          },
          {
            featureType: "road",
            elementType: "labels.text.fill",
            stylers: [{ color: "#9ca5b3" }]
          },
          {
            featureType: "road.highway",
            elementType: "geometry",
            stylers: [{ color: "#746855" }]
          },
          {
            featureType: "road.highway",
            elementType: "geometry.stroke",
            stylers: [{ color: "#1f2835" }]
          },
          {
            featureType: "road.highway",
            elementType: "labels.text.fill",
            stylers: [{ color: "#f3d19c" }]
          },
          {
            featureType: "transit",
            elementType: "geometry",
            stylers: [{ color: "#2f3948" }]
          },
          {
            featureType: "transit.station",
            elementType: "labels.text.fill",
            stylers: [{ color: "#d59563" }]
          },
          {
            featureType: "water",
            elementType: "geometry",
            stylers: [{ color: "#17263c" }]
          },
          {
            featureType: "water",
            elementType: "labels.text.fill",
            stylers: [{ color: "#515c6d" }]
          },
          {
            featureType: "water",
            elementType: "labels.text.stroke",
            stylers: [{ color: "#17263c" }]
          }
        ],
        scrollwheel: !1
      },
      o = new google.maps.Map(document.getElementById("contactUsMap2"), t);
    new google.maps.Marker({
      position: e,
      title: "Creative Tim Office"
    }).setMap(o);
  },
  verticalDots: function() {
    var e = $(".cd-section"),
      t = $("#cd-vertical-nav a");
    function o() {
      e.each(function() {
        $this = $(this);
        var e =
          $('#cd-vertical-nav a[href="#' + $this.attr("id") + '"]').data(
            "number"
          ) - 1;
        $this.offset().top - $(window).height() / 2 < $(window).scrollTop() &&
        $this.offset().top + $this.height() - $(window).height() / 2 >
          $(window).scrollTop()
          ? t.eq(e).addClass("is-selected")
          : t.eq(e).removeClass("is-selected");
      });
    }
    function a(e) {
      $("body,html").animate({ scrollTop: e.offset().top }, 600);
    }
    o(),
      $(window).on("scroll", function() {
        o();
      }),
      t.on("click", function(e) {
        e.preventDefault(), a($(this.hash));
      }),
      $(".cd-scroll-down").on("click", function(e) {
        e.preventDefault(), a($(this.hash));
      }),
      $(".touch .cd-nav-trigger").on("click", function() {
        $(".touch #cd-vertical-nav").toggleClass("open");
      }),
      $(".touch #cd-vertical-nav a").on("click", function() {
        $(".touch #cd-vertical-nav").removeClass("open");
      });
  }
}),
  $(document).ready(function() {
    demo.verticalDots();
  }),
  $("body").hasClass("presentation-page") &&
    $(function() {
      var o = $(window);
      function e() {
        $(".add-animation:not(.animated)").each(function() {
          var e = $(this);
          e.offset().top < o.scrollTop() + o.height() && e.addClass("animated");
        }),
          $(".add-animation.animated").each(function(e) {
            var t = $(this).offset().top;
            (scrolled = o.scrollTop()),
              (win_height_padded = 0.8 * o.height()),
              scrolled + win_height_padded < t &&
                $(this).removeClass("animated");
          });
      }
      Modernizr.touch && $(".add-animation").addClass("animated"),
        o.on("scroll", e),
        e();
    });
//# sourceMappingURL=_site_kit_pro/assets/js/kit-pro.js.map
