jQuery(document).ready(function($) {

  $(window).on('load', function() {

    // Add class when page is loaded
    $('body').addClass('is-loaded');

    // Init masonry
    var masonryOptions = {
      itemSelector: '.post-grid-item'
    };
    //$('.grid-posts.masonry').masonry(masonryOptions);
    //$(window).resize(function() {
    //  $('.grid-posts.masonry').masonry(masonryOptions);
    //});

  });

  // Remove first embed on video, audio and gallery posts
  if ( !$('body').hasClass('single-format-video') || $('body').hasClass('single-classic-layout') ) {
    $('.post.format-video .post-entry').find('.halcyon-embed-container').first().hide();
  }
  if ( !$('body').hasClass('single-format-audio') || $('body').hasClass('single-classic-layout') ) {
    $('.post.format-audio .post-entry').find('.halcyon-embed-container').first().hide();
  }
  if ( !$('body').hasClass('single-format-gallery') || $('body').hasClass('single-classic-layout') ) {
    $('.post.format-gallery .post-entry').find('.gallery').first().remove();
  }

  // Top bar search functionality
  $('.top-bar-items-search a').click(function(e) {
    e.preventDefault();
    var searchForm = $('.top-bar-search');
    if ( $(searchForm).is(':visible') ) {
      $(searchForm).slideUp(250);
    } else {
      $(searchForm).slideDown(250);
      $(searchForm).find('input#s').focus();
    }
  });

  // Header search functionality
  $('.header-items-search a').click(function (e) {
    e.preventDefault();
    var searchForm = $('.header-search');
    if ( $(searchForm).is(':visible') ) {
      $(searchForm).slideUp(250);
    } else {
      $(searchForm).slideDown(250);
      $(searchForm).find('input#s').focus();
    }
  });

  // Toggle menu functionality
  $('.toggle-button').on('click', function(e){
    $('.toggle-menu').toggleClass('is-open');
  });
  $('.toggle-menu .menu-item-has-children ').append('<div class="toggle-sub-menu"><i class="fa fa-angle-down"></i></div>');
  $('.toggle-menu .menu-item-has-children .toggle-sub-menu').click(function(e) {
    $(this).toggleClass('is-active');
    $(this).siblings('.sub-menu').toggleClass('is-active');
  });


  // Init slick on post galleries
  $('.halcyon-post-gallery').slick({
    autoplay: false,
    dots: true
  });
  $('.post-entry .gallery').slick({
    autoplay: false,
    dots: true
  });

  // Add a class to mailchimp widget
  $('.widget').each(function(){
    if($(this).find('form').hasClass('mc4wp-form')) {
      $(this).addClass('halcyon-mc4wp-form-widget');
    }
  });

});
