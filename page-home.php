<?php
/*
Template Name: Home Page Template
*/
?>
      <div class="row">

        <!-- Main Tagline
        ================================================== -->
        <div class="span6" id="summary">
          <img src="http://media.antzucaro.com/xpop/wp-content/themes/xpop/img/logo_nav.png">
          <br />
          <p>Xonotic is a free and fast-paced first person shooter for Linux, Mac, and Windows. It combines addictive, arena-style gameplay with rapid movement and a wide array of weapons. Xonotic is available under the permissive GPLv2 license.</p>
          <br />
          <a href="http://dl.xonotic.org/xonotic-0.6.0.zip"><button class="btn btn-danger btn-large"><i class="icon-download icon-white"></i> Download Now!<br /> <i>For Linux, Mac, and Windows</i></button></a>
          <a href="http://webchat.quakenet.org/?channels=xonotic&uio=MTE9MTA62"><button class="btn btn-primary btn-large" href="#"><i class="icon-comment icon-white"></i> Live Chat<br /> <i>Via QuakeNet IRC</i></button></a>
        </div>

        <!-- Carousel
        ================================================== -->
        <div class="span6">
          <div class="carousel slide" id="featureSlider">
            <div class="carousel-inner">
              <div class="item active">
                <img alt="maps, new and old!" src="http://www.xonotic.org/m/uploads/2012/07/carousel_maps2.jpg">
                <div class="carousel-caption">
                  <h4>Maps, from classic to new!</h4>
                  <p>Choose from 18 official maps or dozens more made by the community. Classic Nexuiz maps are also supported, including those converted from Quake!</p>
                </div>
              </div>
              <div class="item">
                <img alt="" src="http://www.xonotic.org/m/uploads/2012/07/carousel_weapons.jpg">
                <div class="carousel-caption">
                  <h4>Distinctive Weapons</h4>
                  <p>Xonotic has 9 core weapons and 16 full weapons, each with a UT-like secondary fire. Frag away!</p>
                </div>
              </div>

              <div class="item">
                <img alt="Integrated player statistics" src="http://www.xonotic.org/m/uploads/2014/06/carousel_stats_3.jpeg">
                <div class="carousel-caption">
                  <h4>Integrated player statistics</h4>
                  <p>Track your progress in the game with <a href="http://stats.xonotic.org">XonStat</a>, the integrated statistics system!</p>
                </div>
              </div>
              <div class="item">
                <img alt="Customizable heads up display (HUD)" src="http://www.xonotic.org/m/uploads/2012/07/carousel_hud.jpg">
                <div class="carousel-caption">
                  <h4>Customizable heads up display (HUD)</h4>
                  <p>Easily change your HUD to your liking with Xonotic's builtin editor - go simple or deck it out!</p>
                </div>
              </div>
              <div class="item">
                <img alt="Casual and competitive" src="http://www.xonotic.org/m/uploads/2012/07/carousel_competitive_casual.jpg">
                <div class="carousel-caption">
                  <h4>Casual and competitive</h4>
                  <p>Xonotic is easy to configure for either casual or competitive gameplay. Use picmip to simplify your view, or enjoy the full eye-candy of bloom and motion blur!</p>
                </div>
              </div>
            </div>
            <a data-slide="prev" href="#featureSlider" class="left carousel-control"> ‹ </a>
            <a data-slide="next" href="#featureSlider" class="right carousel-control"> › </a>
          </div>
        </div>
      </div>

    <!-- Feature Blocks
    ================================================== -->
    <div class="container">

  <div class="row">
    <div class="span12">
      <ul class="thumbnails">
        <li class="span2">
          <a href="http://www.xonotic.org/m/uploads/2012/07/frontpage_004.jpg" class="thumbnail"><img src="http://www.xonotic.org/m/uploads/2012/07/frontpage_004_small.jpg" alt=""></a>
        </li>
        <li class="span2">
          <a href="http://www.xonotic.org/m/uploads/2012/07/frontpage_003.jpg" class="thumbnail"><img src="http://www.xonotic.org/m/uploads/2012/07/frontpage_003_small.jpg" alt=""></a>
        </li>
        <li class="span2">
          <a href="http://www.xonotic.org/m/uploads/2012/07/frontpage_026.jpg" class="thumbnail"><img src="http://www.xonotic.org/m/uploads/2012/07/frontpage_026_small.jpg" alt=""></a>
        </li>
        <li class="span2">
          <a href="http://www.xonotic.org/m/uploads/2012/07/frontpage_046.jpg" class="thumbnail"><img src="http://www.xonotic.org/m/uploads/2012/07/frontpage_046_small.jpg" alt=""></a>
        </li>
        <li class="span2">
          <a href="http://www.xonotic.org/m/uploads/2012/07/frontpage_060.jpg" class="thumbnail"><img src="http://www.xonotic.org/m/uploads/2012/07/frontpage_060_small.jpg" alt=""></a>
        </li>
        <li class="span2">
          <a href="http://www.xonotic.org/m/uploads/2012/07/frontpage_015.jpg" class="thumbnail"><img src="http://www.xonotic.org/m/uploads/2012/07/frontpage_015_small.jpg" alt=""></a>
        </li>
      </ul>
    </div>
  </div>

      <div class="row">
        <div class="span4">
          <h2>News</h2>
          <p><?php the_field('news_text'); ?></p>
        </div>
        <div class="span4">
          <h2>History</h2>
          <p><?php the_field('history_text'); ?></p>
       </div>
        <div class="span4">
          <h2>Community</h2>
          <p><?php the_field('community_text'); ?></p>
        </div>
      </div>
    </div>

    <script>
        $(function(){
          $('.dropdown-toggle').dropdown();
          $('#featureSlider').carousel();
        });
    </script>
