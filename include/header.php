      <!-- ===================== SCROLL TOP BTN START =============== -->
  <span class="target">
    <a class="target-anchor" id="top"></a>
      <amp-position-observer
        on="enter:hideAnim.start; exit:showAnim.start"
        layout="nodisplay">
      </amp-position-observer>
  </span>
  <button id="scrollToTopButton" on="tap:top.scrollTo(duration=500)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></button>
  <amp-animation id="showAnim" layout="nodisplay">
    <script type="application/json">
      {
        "duration": "300ms",
        "fill": "both",
        "iterations": "1",
        "direction": "alternate",
        "animations": [
        {
          "selector": "#scrollToTopButton",
          "keyframes": [
           { "opacity": "1", "visibility": "visible" }
          ]
        }
        ]
      }
    </script>
    </amp-animation>
      <!-- ... and the second one is for adding the button.-->
    <amp-animation id="hideAnim" layout="nodisplay">
      <script type="application/json">
        { 
          "duration": "200ms",
          "fill": "both",
          "iterations": "1",
          "direction": "alternate",
          "animations": [
          {
            "selector": "#scrollToTopButton",
            "keyframes": [
            { "opacity": "0", "visibility": "hidden" }
            ]
          }
          ]
        }
      </script>
    </amp-animation>
<div class="clearfix"></div><!-- clearfix end here -->

<header>
  <div class="container">
   <div class="logo">
    <a href="index.php">
     <amp-img src="images/logo.webp" width="190" height="45" alt="logo" title="logo"></amp-img>
    </a>
   </div>
   <!--logo-->
   <div class="navigation">
    <ul>
     <li><a href="index.php">HOME</a></li>
     <li><a href="about.php">ABOUT</a></li>
     <li><a>HOW TO DOWNLOAD <i class="fa fa-angle-down" style="padding-left: 5px;"></i></a>
      <ul class="dropdown">
       <li><a href="services.php"> Facebook Video Downloader</a></li>
       <li><a href="services.php"> Instagram Video Downloader</a></li>
       <li><a href="services.php"> Vimeo Video Downloader</a></li>
       <li><a href="services.php"> Dailymotion Video Downloader</a></li>
       <li><a href="services.php"> Twitter Video Downloader</a></li>
       <li><a href="services.php"> Liveleak Video Downloader</a></li>
       <li><a href="services.php"> Funnyordie Video Downloader</a></li>
      </ul>
     </li>
     <li><a href="blog.php">BLOG</a></li>
     <li><a href="contact.php">CONTACT</a></li>
     <li class="review"><a href="review.php"><i class="far fa-edit"></i> Review</a></li>
    </ul>
   </div>
  </div>
 </header>
<div class="clearfix"></div><!-- clearfix end here -->

<amp-sidebar id="sidebar-left" class="mobile-header" layout="nodisplay" side="left">
   <div class="navigation">
      <a href="index.php" class="logo">
        <amp-img src="images/logo.webp" width="190" height="45" alt="logo" title="logo"></amp-img>
      </a>
    <ul>
     <li><a href="index.php">HOME</a></li>
     <li><a href="about.php">ABOUT</a></li>
     <li><a>HOW TO DOWNLOAD <i class="fa fa-angle-down" style="padding-left: 5px;"></i></a>
      <ul class="dropdown">
       <li><a href="services.php"> Facebook Video Downloader</a></li>
       <li><a href="services.php"> Instagram Video Downloader</a></li>
       <li><a href="services.php"> Vimeo Video Downloader</a></li>
       <li><a href="services.php"> Dailymotion Video Downloader</a></li>
       <li><a href="services.php"> Twitter Video Downloader</a></li>
       <li><a href="services.php"> Liveleak Video Downloader</a></li>
       <li><a href="services.php"> Funnyordie Video Downloader</a></li>
      </ul>
     </li>
     <li><a href="blog.php">BLOG</a></li>
     <li><a href="contact.php">CONTACT</a></li>
     <li class="review"><a href="review.php"><i class="far fa-edit"></i> Review</a></li>
    </ul>
   </div>
   <!--navigation--> 
</amp-sidebar>
<button on="tap:sidebar-left.toggle" class="ampstart-btn caps m2 mobile-btn">
<i class="fas fa-bars"></i>
</button>
<div class="mobile-logo">
   <a href="index.php">
      <amp-img src="images/logo.webp" width="190" height="45" alt="logo" title="logo"></amp-img>
   </a>
</div>