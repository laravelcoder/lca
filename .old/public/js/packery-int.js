/*===== Window Load Function Starts Here =====*/
jQuery(window).on('load', function ($) {
    'use strict';

    jQuery('.filter-items > .row').packery({
      itemSelector: '.filter-items > .row > div',
      gutter: 0,
    });

});/*===== Window Load Function End Here =====*/