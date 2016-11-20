<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title><?php echo $title; ?></title>

    <script type="text/javascript" src="assets/frontend/js/app.js"></script>

    <style type="text/css">
      img.wp-smiley,
      img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
      }
    </style>

    <link rel='stylesheet' href='assets/frontend/css/font-awesome.min.css'>
    
    <link rel='stylesheet' href='//fonts.googleapis.com/icon?family=Material+Icons&#038;ver=4.6.1'/>

    <link rel='stylesheet' href='assets/frontend/css/slick.css'/>
    <link rel='stylesheet' href='assets/frontend/css/reset.css'/>
    <link rel='stylesheet' href='assets/frontend/css/style.css'/>
    <link rel="stylesheet" href="assets/frontend/css/app.css">

    <script type='text/javascript' src='assets/frontend/js/jquery.min.js'></script>


    <script type='text/javascript' src='assets/frontend/js/slick.min.js'></script>
    <script type='text/javascript' src='assets/frontend/js/script.js'></script>

    <script type='text/javascript'>
    jQuery(document).ready(function($){$('.featured.boxed .featured-wrapper').slick({autoplay:true,dots:true,autoplaySpeed:5000});$('.featured.full-width .featured-wrapper').slick({autoplay:true,dots:true,autoplaySpeed:5000  });$('.featured.columns .featured-wrapper').slick({centerMode:true,centerPadding:'150px',slidesToShow:1,responsive:[{breakpoint:768,settings:{arrows:false,centerMode:false,centerPadding:'0px',slidesToShow:1}}],autoplay:true,dots:true,autoplaySpeed:5000  });});
    </script>

  </head>
  <body class="home blog sidebar-right">
    <div id="wrapper">
      
      <header class="header header-default">

        <div class="container">
          <div class="logo-wrapper">
            <div class="title-wrapper">
              <a href="<?php echo base_url(); ?>"><img class="logo" src="assets/frontend/img/logo/logo_h80.png" width="80" height="80" alt="<?php echo $title; ?>" /><img class="logo logo-2x" src="assets/frontend/img/logo/logo_h80.png" width="80" height="80" alt="<?php echo $title; ?>" /><img class="logo-mobile" src="assets/frontend/img/logo/logo_h80.png" width="80" height="80" alt="<?php echo $title; ?>" /><img class="logo-mobile logo-mobile-2x" src="assets/frontend/img/logo/logo_h80.png" width="80" height="80" alt="<?php echo $title; ?>" /></a>
            </div>
          </div><!-- .logo-wrapper -->

          <div class="header-menu">
            <ul id="menu-primary-menu" class="menu">
              <li id="menu-item-64" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-64"><a href="http://demos.reveldev.com/halcyon/demo/fitness/category/training/">Training</a></li>
              <li id="menu-item-99" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-99"><a href="http://demos.reveldev.com/halcyon/demo/fitness/category/health/">Health</a></li>
              <li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66"><a href="http://demos.reveldev.com/halcyon/demo/fitness/about/">About</a></li>
              <li id="menu-item-86" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-86"><a href="http://demos.reveldev.com/halcyon/demo/fitness/contact/">Contact</a></li>
            </ul>
          </div><!-- .header-menu -->

          <div class="header-items">
            <div class="header-items-social">
              <ul class="social-icons">
                <li class="social-item social-item-facebook">
                  <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-item social-item-instagram">
                  <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                </li>
                <li class="social-item social-item-pinterest">
                  <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                </li>
                <li class="social-item social-item-twitter">
                  <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-item social-item-youtube">
                  <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                </li>
              </ul>
            </div><!-- .header-items-social -->
              
            <div class="header-items-search">
              <div class="header-items-search-inner">
                <a href="#"><i class="fa fa-search"></i></a>
                <div class="header-search">
                  <form role="search" method="get" id="searchform" class="searchform" action="">
                    <label class="screen-reader-text" for="s">Search for:</label>
                    <input type="text" value="" placeholder="Search..." name="s" id="s">
                    <button type="submit" class="search-submit" value="Search">Search</button>  
                  </form>
                </div>
              </div>
            </div><!-- .header-items-search -->
          </div><!-- .header-items -->
          
          <div class="toggle-button">
            <div class="toggle-button-inner">
              <div class="toggle-button-bars">
                <i></i>
                <i></i>
                <i></i>
              </div><!-- .toggle-button-bars -->
            </div><!-- .toggle-button-inner -->
          </div><!-- .toggle-button -->

          <div class="toggle-menu">
            <ul id="menu-primary-menu-1" class="menu">
              <li><a href="">Training</a></li>
              <li><a href="">Health</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </div><!-- .toggle-menu -->

        </div><!-- .container -->
      </header><!-- .header -->


      <div class="featured full-width">
        <div class="featured-wrapper">
          <div class="featured-item" style="background-image: url(http://demos.reveldev.com/halcyon/demo/fitness/wp-content/uploads/2016/08/fitness-9.jpg);">
            <div class="featured-item-box">
              <div class="featured-item-box-inner">
                <div class="meta-wrapper">
                  <div class="featured-item-meta">
                    <div class="featured-item-meta-date">
                      <i class="material-icons">&#xE8B5;</i>
                      <a href="http://demos.reveldev.com/halcyon/demo/fitness/2016/08/18/best-bodyweight-exercises/">August 18, 2016</a>
                    </div>
                  </div>
                </div>
                
                <div class="title-wrapper">
                  <div class="featured-item-title">
                    <h2><a href="http://demos.reveldev.com/halcyon/demo/fitness/2016/08/18/best-bodyweight-exercises/">Best Bodyweight Exercises</a></h2>
                  </div>
                </div>
                <div class="featured-item-more-link">
                  <div class="button-wrapper">
                    <a href="http://demos.reveldev.com/halcyon/demo/fitness/2016/08/18/best-bodyweight-exercises/">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
          <div class="featured-item" style="background-image: url(http://demos.reveldev.com/halcyon/demo/fitness/wp-content/uploads/2016/08/fitness-5.jpg);">
            <div class="featured-item-box">
              <div class="featured-item-box-inner">
                <div class="meta-wrapper">
                  <div class="featured-item-meta">
                    <div class="featured-item-meta-date">
                      <i class="material-icons">&#xE8B5;</i>
                      <a href="http://demos.reveldev.com/halcyon/demo/fitness/2016/08/18/why-stretching-is-so-important/">August 18, 2016</a>
                    </div>
                  </div>
                </div>
                <div class="title-wrapper">
                  <div class="featured-item-title">
                    <h2><a href="http://demos.reveldev.com/halcyon/demo/fitness/2016/08/18/why-stretching-is-so-important/">Why Stretching Is So Important</a></h2>
                  </div>
                </div>
                <div class="featured-item-more-link">
                  <div class="button-wrapper">
                    <a href="http://demos.reveldev.com/halcyon/demo/fitness/2016/08/18/why-stretching-is-so-important/">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div id="content">
        <div class="container">
          <main id="main" role="main" class="main list-layout">
            <div class="post-items">  
              <article id="post-44" class="post-list-item post-44 post type-post status-publish format-standard has-post-thumbnail hentry category-training tag-fundamentals tag-legs">
                <div class="post-thumbnail">
                  <a href="http://demos.reveldev.com/halcyon/demo/fitness/2016/08/18/leg-exercises-you-should-be-doing/"><img width="540" height="360" src="http://demos.reveldev.com/halcyon/demo/fitness/wp-content/uploads/2016/08/fitness-16-540x360.jpg" class="attachment-halcyon-list-image-cropped size-halcyon-list-image-cropped wp-post-image" alt="fitness-16" srcset="http://demos.reveldev.com/halcyon/demo/fitness/wp-content/uploads/2016/08/fitness-16-540x360.jpg 540w, http://demos.reveldev.com/halcyon/demo/fitness/wp-content/uploads/2016/08/fitness-16-300x200.jpg 300w, http://demos.reveldev.com/halcyon/demo/fitness/wp-content/uploads/2016/08/fitness-16-768x512.jpg 768w, http://demos.reveldev.com/halcyon/demo/fitness/wp-content/uploads/2016/08/fitness-16-1024x683.jpg 1024w, http://demos.reveldev.com/halcyon/demo/fitness/wp-content/uploads/2016/08/fitness-16-780x520.jpg 780w, http://demos.reveldev.com/halcyon/demo/fitness/wp-content/uploads/2016/08/fitness-16.jpg 1440w" sizes="(max-width: 540px) 100vw, 540px" /></a>
                </div>
                <div class="post-content">
                  <header class="post-header">
                    <div class="title-wrapper">
                      <h2 class="post-title">
                        <a href="http://demos.reveldev.com/halcyon/demo/fitness/2016/08/18/leg-exercises-you-should-be-doing/">Leg Exercises You Should Be Doing</a>
                      </h2>
                    </div>
                    <div class="meta-wrapper">
                      <div class="post-meta">
                        <div class="post-date">
                          <i class="material-icons">&#xE8B5;</i>
                          <a href="http://demos.reveldev.com/halcyon/demo/fitness/2016/08/18/leg-exercises-you-should-be-doing/">August 18, 2016</a>
                        </div>
                        <div class="post-category">
                          <i class="material-icons">&#xE2C8;</i>
                          <a href="http://demos.reveldev.com/halcyon/demo/fitness/category/training/" rel="category tag">Training</a>
                        </div>
                      </div>
                    </div>
                  </header>
                  <div class="post-entry">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras massa tortor, elementum&#8230;</p>
                  </div>
                </div>
              </article>

              <nav class="navigation pagination" role="navigation">
                <h2 class="screen-reader-text">Posts navigation</h2>
                <div class="nav-links">
                  <span class='page-numbers current'><span class="meta-nav screen-reader-text">Page </span>1</span>
                  <a class='page-numbers' href=''><span class="meta-nav screen-reader-text">Page </span>2</a>
                  <a class="next page-numbers" href="">Next page</a>
                </div>
              </nav>
            </div>
          </main>
          <aside id="sidebar">
            <div class="widget"><div class="title-wrapper"><h4 class="widget-title">About Me</h4></div>
              <div class="halcyon-widget-about">
                <div class="halcyon-widget-about-image">
                  <img src="http://demos.reveldev.com/halcyon/demo/fitness/wp-content/uploads/2016/09/fitness-about.jpg" alt="About Me" />
                </div>
                <div class="halcyon-widget-about-entry">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras massa tortor, elementum id mauris viverra, dapibus gravida leo. Curabitur interdum ipsum turpis, eget euismod sapien laoreet sit amet. Nullam faucibus felis sapien.</p>
                </div>
              </div>

            </div>
            <div class="widget">
              <div class="title-wrapper">
                <h4 class="widget-title">Recent Posts</h4>
              </div>

              <div class="halcyon-widget-recent-posts">
                <div class="halcyon-widget-recent-post">
                  <div class="halcyon-widget-recent-post-thumbnail">
                    <a href=""><img width="72" height="72" src="http://demos.reveldev.com/halcyon/demo/fitness/wp-content/uploads/2016/08/fitness-16-72x72.jpg" class="attachment-halcyon-small-thumbnail size-halcyon-small-thumbnail wp-post-image" alt="fitness-16" srcset="http://demos.reveldev.com/halcyon/demo/fitness/wp-content/uploads/2016/08/fitness-16-72x72.jpg 72w, http://demos.reveldev.com/halcyon/demo/fitness/wp-content/uploads/2016/08/fitness-16-150x150.jpg 150w" sizes="(max-width: 72px) 100vw, 72px" /></a>
                  </div>
                  <div class="halcyon-widget-recent-post-entry">
                    <div class="title-wrapper">
                      <h3 class="halcyon-widget-recent-post-title">
                        <a href="http://demos.reveldev.com/halcyon/demo/fitness/2016/08/18/leg-exercises-you-should-be-doing/">Leg Exercises You Should Be Doing</a>
                      </h3>
                    </div>
                    <span class="halcyon-widget-recent-post-date">August 18, 2016</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="widget">
              <div class="title-wrapper">
                <h4 class="widget-title">Tags</h4>
              </div>

              <div class="tagcloud">
                  <a href='<?php echo base_url(); ?>tag/back/' title='2 topics' style='font-size: 8pt;'>Back</a>
              </div>
            </div>

            <div class="widget">
              <div class="title-wrapper">
                <h4 class="widget-title">Categories</h4>
              </div>
              <ul>
                <li class="cat-item cat-item-7"><a href="" >Featured</a> (2)</li>
                <li class="cat-item cat-item-8"><a href="" >Health</a> (6)</li>
                <li class="cat-item cat-item-4"><a href="" >Training</a> (5)</li>
              </ul>
            </div>
          </aside>
        </div>
      </div>

      <footer class="footer">
        <div class="footer-main">
          <div class="container">
            
            <div class="footer-menu">
              <ul id="menu-primary-menu-2" class="menu">
                <li><a href="">Training</a></li>
                <li><a href="">Health</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
              </ul>
            </div>

            <div class="footer-social">            
              <ul class="social-icons">
                <li class="social-item social-item-facebook">
                  <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-item social-item-instagram">
                  <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                </li>
                <li class="social-item social-item-pinterest">
                  <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                </li>
                <li class="social-item social-item-twitter">
                  <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-item social-item-youtube">
                  <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                </li>
              </ul>
            </div>
            
            <div class="footer-copyright">
              <p>&copy; 2016 Halcyon Fitness. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </footer>
    </div>

  </body>
</html>
