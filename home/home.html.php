<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Ace In The Hole Events</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/helper.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://use.fontawesome.com/25af06de28.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=563194357460179&autoLogAppEvents=1"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="js/jquery.flexslider-min.js"></script>
  </head>
  <body>
    <?php include 'includes/header.inc.html.php'; ?>
    <?php include 'includes/nav.inc.html.php'; ?>
    <main>
      <section>
        <h1>Ace In The Hole</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin interdum lorem ante, vel dignissim massa eleifend vitae. In sagittis placerat sem, consequat consectetur turpis consequat sit amet. Sed sollicitudin posuere augue in suscipit.</p>
      </section>
      <!---Weather Feed Section --->
      <section>
        <div class="report-container">
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
        <!---Facebook --->
        <div class="fb-feed">
          <h2>Facebook Feed</h2>
          <div id="fb-root"></div>
          <div class="fb-page" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" class="fb-xfbml-parse-ignore">
              <a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/">Cas222Aceinthehole</a>
            </blockquote>
          </div>
        </div>
        <!---Twitter --->
        <div class="twitter-feed">
          <h2>Twitter Feed</h2>
          <a class="twitter-timeline" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a>
        </div>
      </section>
      <section>
        <h1>Slider Image Gallery Here</h1>
      </section>
      <?php include 'includes/button.inc.html.php'; ?>
    </main>
    <?php include 'includes/footer.inc.html.php'; ?>
  </body>
</html>
