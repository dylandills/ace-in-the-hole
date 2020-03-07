<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Ace In The Hole Events</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto&display=swap" rel="stylesheet">
    <link href="css/responsiveslides.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/helper.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php include 'includes/header.inc.html.php'; ?>
    <?php include 'includes/nav.inc.html.php'; ?>
    <main>
      <section>
        <h1>Ace In The Hole</h1>
        <p>Etiam venenatis facilisis dolor nec dapibus. Nam condimentum felis augue, nec euismod justo convallis sed. Sed in lorem feugiat, pulvinar purus vel, mollis odio. Sed eget facilisis nisi. Vivamus venenatis ex urna. Integer eget quam vestibulum, lacinia metus vel, ultrices tellus. Quisque fringilla condimentum est, nec posuere massa tincidunt porta. Fusce tempor cursus lacus at congue. Phasellus vel lectus ultricies, hendrerit mauris id, pretium magna. Fusce suscipit commodo malesuada. Suspendisse quis metus sed enim feugiat sagittis. Praesent faucibus felis id vehicula aliquet. Nulla dictum facilisis dapibus. Ut congue, orci vel auctor gravida, velit elit blandit risus, non luctus est quam id orci. Vivamus vel velit a nunc convallis elementum.</p>
        <div class="report-container">
          <!---Weather Feed Section --->
          <h2><?php echo $data->name; ?> Weather Status</h2>
          <div class="time">
            <div><?php echo date("M, d, Y h:i:s A"); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
          </div>
          <div class="weather-forecast">
            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" />
            <?php echo $data->main->temp_max; ?>°F
            <span class="min-temperature"><?php echo $data->main->temp_min; ?>°F</span>
          </div>
          <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
          </div>
        </div>
      </section>
      <!---Social Media Feed Section --->
      <section>
        <!-- -Facebook --->
        <div class="fb-feed">
          <h2>Facebook Feed</h2>
          <div id="fb-root"></div>
          <div class="fb-page" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" class="fb-xfbml-parse-ignore">
              <a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/">Cas222Aceinthehole</a>
            </blockquote>
          </div>
        </div>
      </section>
      <section>
        <!---Twitter --->
        <div class="twitter-feed">
          <h2>Twitter Feed</h2>
          <a class="twitter-timeline" data-width="400" data-height="400" data-theme="light" href="https://twitter.com/Cas222Pcc?ref_src=twsrc%5Etfw">Tweets by Cas222Pcc</a>
        </div>
      </section>

      <!---Image Gallery Section --->
      <section>
        <h2>Image Gallery</h2>
        <!---Slider Gallery --->
        <div class="rslides_container">
          <ul class="rslides" id="slider1">
            <li><img src="img/ace1.jpg" alt=""></li>
            <li><img src="img/ace2.jpg" alt=""></li>
            <li><img src="img/ace3.jpg" alt=""></li>
            <li><img src="img/ace4.jpg" alt=""></li>
            <li><img src="img/ace5.jpg" alt=""></li>
            <li><img src="img/ace6.jpg" alt=""></li>
            <li><img src="img/ace7.jpg" alt=""></li>
            <li><img src="img/ace8.jpg" alt=""></li>
            <li><img src="img/ace9.jpg" alt=""></li>
            <li><img src="img/ace10.jpg" alt=""></li>
            <li><img src="img/ace11.jpg" alt=""></li>
            <li><img src="img/ace12.jpg" alt=""></li>
            <li><img src="img/ace13.jpg" alt=""></li>
            <li><img src="img/ace14.jpg" alt=""></li>
            <li><img src="img/ace15.jpg" alt=""></li>
            <li><img src="img/ace16.jpg" alt=""></li>
            <li><img src="img/ace17.jpg" alt=""></li>
            <li><img src="img/ace18.jpg" alt=""></li>
          </ul>
        </div>
      </section>
      <?php include 'includes/button.inc.html.php'; ?>
    </main>
    <?php include 'includes/footer.inc.html.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://use.fontawesome.com/25af06de28.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=563194357460179&autoLogAppEvents=1"></script> -->
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </body>
</html>
