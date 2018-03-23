//===== Main AngularJS Web Application =====//
'use strict';
//===== Configure the Routes =====//
var app = angular.module('MegaStack', ['ngRoute']).
config(function($routeProvider, $locationProvider) {

  $routeProvider
  .when("/", {templateUrl: "partials/dashboard.html", controller: "PageCtrl"})
  .when("/dashboard1", {templateUrl: "partials/dashboard.html", controller: "PageCtrl"})
  .when("/dashboard2", {templateUrl: "partials/dashboard2.html", controller: "PageCtrl"})
  .when("/dashboard3", {templateUrl: "partials/dashboard3.html", controller: "PageCtrl"})
  .when("/pages/404", {templateUrl: "partials/pages/404.html", controller: "PageCtrl"})
  .when("/pages/gallery", {templateUrl: "partials/pages/gallery.html", controller: "PageCtrl"})
  .when("/pages/faq", {templateUrl: "partials/pages/faq.html", controller: "PageCtrl"})
  .when("/pages/order-received", {templateUrl: "partials/pages/order-received.html", controller: "PageCtrl"})
  .when("/pages/calendar", {templateUrl: "partials/pages/calendar.html", controller: "PageCtrl"})
  .when("/pages/search-result", {templateUrl: "partials/pages/search-result.html", controller: "PageCtrl"})
  .when("/pages/grids", {templateUrl: "partials/pages/grids.html", controller: "PageCtrl"})
  .when("/pages/pricing-plan", {templateUrl: "partials/pages/pricing-plan.html", controller: "PageCtrl"})
  .when("/pages/contact", {templateUrl: "partials/pages/contact.html", controller: "PageCtrl"})
  .when("/pages/services", {templateUrl: "partials/pages/services.html", controller: "PageCtrl"})
  .when("/pages/products", {templateUrl: "partials/pages/products.html", controller: "PageCtrl"})
  .when("/pages/product-details", {templateUrl: "partials/pages/product-details.html", controller: "PageCtrl"})
  .when("/pages/form-layouts", {templateUrl: "partials/pages/form-layouts.html", controller: "PageCtrl"})
  .when("/pages/form-wizard", {templateUrl: "partials/pages/form-wizard.html", controller: "PageCtrl"})
  .when("/pages/pagination", {templateUrl: "partials/pages/pagination.html", controller: "PageCtrl"})
  .when("/pages/invoice", {templateUrl: "partials/pages/invoice.html", controller: "PageCtrl"})
  .when("/pages/buttons", {templateUrl: "partials/pages/buttons.html", controller: "PageCtrl"})
  .when("/pages/dropdowns", {templateUrl: "partials/pages/dropdowns.html", controller: "PageCtrl"})
  .when("/pages/tables", {templateUrl: "partials/pages/tables.html", controller: "PageCtrl"})
  .when("/pages/models", {templateUrl: "partials/pages/models.html", controller: "PageCtrl"})
  .when("/pages/loaders", {templateUrl: "partials/pages/loaders.html", controller: "PageCtrl"})
  .when("/pages/cards", {templateUrl: "partials/pages/cards.html", controller: "PageCtrl"})
  .when("/pages/range-slider", {templateUrl: "partials/pages/range-slider.html", controller: "PageCtrl"})
  .when("/pages/typography", {templateUrl: "partials/pages/typography.html", controller: "PageCtrl"})
  .when("/pages/live-chat", {templateUrl: "partials/pages/live-chat.html", controller: "PageCtrl"})
  .when("/pages/timeline", {templateUrl: "partials/pages/timeline.html", controller: "PageCtrl"})
  .when("/pages/cropbox", {templateUrl: "partials/pages/cropbox.html", controller: "PageCtrl"})
  .when("/pages/profile", {templateUrl: "partials/pages/profile.html", controller: "PageCtrl"})
  .when("/pages/profile-edit", {templateUrl: "partials/pages/profile-edit.html", controller: "PageCtrl"})
  .when("/pages/email-composer", {templateUrl: "partials/pages/email-composer.html", controller: "PageCtrl"})
  .when("/pages/inbox", {templateUrl: "partials/pages/inbox.html", controller: "PageCtrl"})
  .when("/pages/email", {templateUrl: "partials/pages/email.html", controller: "PageCtrl"})
  .when("/pages/tabs-accordians", {templateUrl: "partials/pages/tabs&accordians.html", controller: "PageCtrl"})
  .when("/pages/progressbars", {templateUrl: "partials/pages/progressbars.html", controller: "PageCtrl"})
  .when("/pages/tooltips", {templateUrl: "partials/pages/tooltips.html", controller: "PageCtrl"})
  .when("/pages/popovers", {templateUrl: "partials/pages/popovers.html", controller: "PageCtrl"})
  .when("/pages/alerts", {templateUrl: "partials/pages/alerts.html", controller: "PageCtrl"})
  .when("/pages/charts", {templateUrl: "partials/pages/charts.html", controller: "PageCtrl"})
  .when("/pages/calculator", {templateUrl: "partials/pages/calculator.html", controller: "PageCtrl"})
  .when("/pages/font-awesome-icons", {templateUrl: "partials/pages/font-awesome-icons.html", controller: "PageCtrl"})
  .when("/pages/themify-icons", {templateUrl: "partials/pages/themify-icons.html", controller: "PageCtrl"})
  .when("/pages/ionicons", {templateUrl: "partials/pages/ionicons.html", controller: "PageCtrl"})
  .when("/pages/list-group", {templateUrl: "partials/pages/list-group.html", controller: "PageCtrl"})
  .when("/pages/gallery1", {templateUrl: "partials/pages/gallery1.html", controller: "PageCtrl"})
  .when("/pages/gallery2", {templateUrl: "partials/pages/gallery2.html", controller: "PageCtrl"})
  .when("/pages/gallery3", {templateUrl: "partials/pages/gallery3.html", controller: "PageCtrl"})
  .when("/pages/google-map", {templateUrl: "partials/pages/google-map.html", controller: "PageCtrl"})
  .when("/pages/vector-map", {templateUrl: "partials/pages/vector-map.html", controller: "PageCtrl"})
  .when("/pages/checkout", {templateUrl: "partials/pages/checkout.html", controller: "PageCtrl"})
  .when("/register", {templateUrl: "partials/pages/register.html", controller: "PageCtrl"})
  .when("/login", {templateUrl: "partials/pages/login.html", controller: "PageCtrl"})
  .when("/coming-soon", {templateUrl: "partials/pages/coming-soon.html", controller: "PageCtrl"})
  .when("/under-maintenance", {templateUrl: "partials/pages/under-maintenance.html", controller: "PageCtrl"})
  .when("/pages/505", {templateUrl: "partials/pages/505.html", controller: "PageCtrl"})
  .otherwise({
    redirectTo: '/pages/404'
  });

  // $html5Mode = $locationProvider.html5Mode(true);
  // $locationProvider.hashPrefix('/');

}).

//===== Google Map Controller =====//
controller('MapCtrl', ['$scope', '$location', function($scope, $location) {
  var loaded = 0;
  var imgCounter = $(".main-content img").length;
  if(imgCounter > 0){
    function doProgress() {
      $(".main-content img").load(function() {
        loaded++;
        var newWidthPercentage = (loaded / imgCounter) * 100;
        animateLoader(newWidthPercentage + '%');      
      })
    } 
    function animateLoader(newWidth) {
      $("#progressBar").width(newWidth);
      if(imgCounter === loaded){
        setTimeout(function(){
          $("#progressBar").animate({opacity:0});
        },500);
      }
    }
    doProgress();
  }else{
    setTimeout(function(){
      $("#progressBar").css({
        "opacity":0,
        "width":"100%"
      });
    },500);
  }
}]).

//===== Page Tour Controller =====//
controller('TourCtrl', ['$scope', '$location', function($scope, $location) {
  $(document).scrollTop(0);
  $(function(){
    var introguide = introJs();
    // var startbtn   = $('#startdemotour');
    introguide.setOptions({
      steps: [
      {
        element: '#intro1',
        intro: 'Click Here',
        position: 'bottom'
      },
      {
        element: '#intro2',
        intro: 'With 3D transforms, we can make simple.',
        position: 'top'
      },
      {
        element: '#intro3',
        intro: 'Hover over each title to display a longer description.',
        position: 'right'
      },
      {
        element: '#intro4',
        intro: 'Click the With 3D transforms, we can make simple.',
        position: 'left'
      },
      {
        element: '#intro5',
        intro: "Each demo will link to the previous & next entries.",
        position: 'bottom'
      }
      ]
    });
    introguide.start();
  });

  var loaded = 0;
  var imgCounter = $(".main-content img").length;
  if(imgCounter > 0){
    function doProgress() {
      $(".main-content img").load(function() {
        loaded++;
        var newWidthPercentage = (loaded / imgCounter) * 100;
        animateLoader(newWidthPercentage + '%');      
      })
    } 
    function animateLoader(newWidth) {
      $("#progressBar").width(newWidth);
      if(imgCounter === loaded){
        setTimeout(function(){
          $("#progressBar").animate({opacity:0});
        },500);
      }
    }
    doProgress();
  }else{
    setTimeout(function(){
      $("#progressBar").css({
        "opacity":0,
        "width":"100%"
      });
    },500);
  }
}]).

controller('ImageCtrl', ['$scope', '$location', function($scope, $location) {
  $(document).scrollTop(0);
  var loaded = 0;
  var imgCounter = $(".main-content img").length;
  if(imgCounter > 0){
    function doProgress() {
      $(".main-content img").load(function() {
        loaded++;
        var newWidthPercentage = (loaded / imgCounter) * 100;
        animateLoader(newWidthPercentage + '%');      
      })
    } 
    function animateLoader(newWidth) {
      $("#progressBar").width(newWidth);
      if(imgCounter === loaded){
        setTimeout(function(){
          $("#progressBar").animate({opacity:0});
        },500);
      }
    }
    doProgress();
  }else{
    setTimeout(function(){
      $("#progressBar").css({
        "opacity":0,
        "width":"100%"
      });
    },500);
  }
}]).

//===== Contact Map Controller =====//
controller('ContactCtrl', ['$scope', '$location', function($scope, $location) {
  $(document).scrollTop(0);
  var loaded = 0;
  var imgCounter = $(".main-content img").length;
  if(imgCounter > 0){
    function doProgress() {
      $(".main-content img").load(function() {
        loaded++;
        var newWidthPercentage = (loaded / imgCounter) * 100;
        animateLoader(newWidthPercentage + '%');      
      })
    } 
    function animateLoader(newWidth) {
      $("#progressBar").width(newWidth);
      if(imgCounter === loaded){
        setTimeout(function(){
          $("#progressBar").animate({opacity:0});
        },500);
      }
    }
    doProgress();
  }else{
    setTimeout(function(){
      $("#progressBar").css({
        "opacity":0,
        "width":"100%"
      });
    },500);
  }
}]);

//===== Controls all other Pages =====//
app.controller('PageCtrl', function ($scope, $location, $http) {
  $(document).scrollTop(0);
  var loaded = 0;
  var imgCounter = $(".main-content img").length;
  if(imgCounter > 0){
    function doProgress() {
      $(".main-content img").load(function() {
        loaded++;
        var newWidthPercentage = (loaded / imgCounter) * 100;
        animateLoader(newWidthPercentage + '%');      
      })
    } 
    function animateLoader(newWidth) {
      $("#progressBar").width(newWidth);
      if(imgCounter === loaded){
        setTimeout(function(){
          $("#progressBar").animate({opacity:0});
        },500);
      }
    }
    doProgress();
  }else{
    setTimeout(function(){
      $("#progressBar").css({
        "opacity":0,
        "width":"100%"
      });
    },500);
  }

  //===== Counter Up =====//
  if ($.isFunction($.fn.counterUp)) {
    $('.counter').counterUp({
      delay: 10,
      time: 2000
    });
  }

  //===== Refresh Content =====//
  $('.refrsh-wdgt').on('click', function(){
    $(this).parent().parent().parent().find('div.wdgt-ldr').addClass('active').delay(3000).queue(function(next){
      $(this).removeClass('active');
      next();
    });
    return false;
  });

  //===== Expand Content =====//
  $('.expnd-wdgt').on('click', function(){
    $(this).parent().parent().parent().toggleClass('ful-wdgt');
    return false;
  });

  //===== Delete Content =====//
  $('.delt-wdgt').on('click', function(){
    $(this).parent().parent().parent().parent().slideUp();
    return false;
  });

  //===== LightBox =====//
  if ($.isFunction($.fn.poptrox)) {
    var foo = $('.lightbox');
    foo.poptrox({usePopupCaption: true, usePopupNav: true});
  }

  //===== Select 2 =====//
  if ($.isFunction($.fn.select2)) {
    $('select').select2({});
  }

  //===== Count Down =====//
  if ($.isFunction($.fn.downCount)) {
    $('.countdown').downCount({
      date: '12/3/2020 12:00:00',
      offset: +5
    });
  }

  //===== Custom Scrollbar =====//
  if ($.isFunction($.fn.slimScroll)) {
    $('.custom-scrollbar').slimScroll({
      height: '93%',
      color: '#ffffff',
      railColor: '#ffffff'
    });
    $('.chat-lst').slimScroll({
      height: '370px',
      color: '#000000',
      size: '5px',
    });
    $('.to-do-wrp').slimScroll({
      height: '375px',
      color: '#000000',
      size: '5px',
    });
    $('.rcnt-cmts').slimScroll({
      height: '300px',
      color: '#000000',
      size: '5px',
    });
    $('.msgs-lst,.recently-activ-proj .table-wrap').slimScroll({
      height: '354px',
      color: '#000000',
      size: '5px',
    });
    $('.nti-lst').slimScroll({
      height: '388px',
      color: '#000000',
      size: '5px',
    });    
    $('.set-bd').slimScroll({
      height: '411px',
      color: '#ffffff',
      size: '5px',
    });
  }

  //===== Weather =====//
  var doc_ajax_url = 'http://better-studio.net/plugins/better-weather/better-weather/ajax/ajax.php';
  if ($.isFunction($.fn.betterWeather)) {
      $('#wethr').betterWeather({
        apiKey: '68f8c34082a9d39ed4c038a9ff4c22b1',
        style: 'normal',
        nextDays: true ,
        bgColor: '#333333',
        location: '30.1984,71.4687',
        animatedIcons: true,
        url: doc_ajax_url
      });
  }

  //===== LightBox =====//
  if ($.isFunction($.fn.poptrox)) {
    var foo = $('.lightbox');
    foo.poptrox({usePopupCaption: true, usePopupNav: true});
  }

  //===== Vector Map =====//
  if ($.isFunction($.fn.vectorMap)) {
    $('#vc-map').vectorMap({
      map: 'usa_en',
      backgroundColor: null,
      hoverColor: '#7fc4e5',
      selectedColor: '#7fc4e5',
      color: '#d8d8d8',
      borderColor: '#bcbcbc',
      enableZoom: true,
      showTooltip: true,
      multiSelectRegion: true,
      selectedRegions: ['AK','WA']
    });
  }

  //===== Count Down =====//
  if ($.isFunction($.fn.downCount)) {
      $('.tim-remng').downCount({
          date: '12/3/2019 12:00:00',
          offset: +5
      });
  }

  //===== Owl Carousel =====//
  if ($.isFunction($.fn.owlCarousel)) {
      
  }

  $('.backgroundimg1-click').on('click', function() {
    $('.side-header').addClass('hdr-bg2-1 hdr-bgclr');
    $('.side-header').removeClass('hdr-bg2-2 hdr-bg2-3 hdr-bg2-4 hdr-bg2-5');
  });
  $('.backgroundimg2-click').on('click', function() {
    $('.side-header').addClass('hdr-bg2-2 hdr-bgclr');
    $('.side-header').removeClass('hdr-bg2-1 hdr-bg2-3 hdr-bg2-4 hdr-bg2-5');
  });
  $('.backgroundimg3-click').on('click', function() {
    $('.side-header').addClass('hdr-bg2-3 hdr-bgclr');
    $('.side-header').removeClass('hdr-bg2-2 hdr-bg2-1 hdr-bg2-4 hdr-bg2-5');
  });
  $('.backgroundimg4-click').on('click', function() {
    $('.side-header').addClass('hdr-bg2-4 hdr-bgclr');
    $('.side-header').removeClass('hdr-bg2-2 hdr-bg2-3 hdr-bg2-1 hdr-bg2-5');
  });
  $('.backgroundimg5-click').on('click', function() {
    $('.side-header').addClass('hdr-bg2-5 hdr-bgclr');
    $('.side-header').removeClass('hdr-bg2-2 hdr-bg2-3 hdr-bg2-4 hdr-bg2-1');
  });

  //===== Google Map =====//
  function initialize() {
      var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);
      var mapOptions = {
          zoom: 14,
          disableDefaultUI: true,
          scrollwheel: false,
          center: myLatlng
      }
      var map = new google.maps.Map(document.getElementById('lct-mp'), mapOptions);

      // var image = 'images/icon.png';
      var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);
      var beachMarker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          // icon: image
      });

  }
  google.maps.event.addDomListener(window, 'load', initialize);

});
