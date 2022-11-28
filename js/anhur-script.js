/**
 * @file
 * This file is to add any custom js for anhur theme.
 */
(function ($, Drupal, once) {
  'use strict';
  Drupal.behaviors.anhurThemeBehavior = {
    attach: function (context, settings) {
      $(once('body', '.close-search', context)).on('click', function () {
        document.getElementById('search-slide').style.display = 'none';
      });
      $(once('body', '.open-search', context)).on('click', function () {
        document.getElementById('search-slide').style.display = 'block';
        document.getElementById('main-navigation-v').style.display = 'none';
      });
      $(once('body', '.open-nav-inner', context)).on('click', function () {
        document.getElementById('search-slide').style.display = 'none';
      });
    }
  };
})(jQuery, Drupal, once);
