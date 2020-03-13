<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="Ace in the Hole is an event company that hosts multisport athletic events, with an emphasis on accepting athletes of all different backgrounds, shapes, and sizes.">
    <meta name="keywords" content="ace in the hole,portland athletes,portland athlete events,portland athletic,portland or triathlon,portland or running,portland or distance running,portland or diverse athletics">
    <title>Ace In The Hole Events</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto&display=swap" rel="stylesheet">
    <link href="css/responsiveslides.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/helper.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://use.fontawesome.com/25af06de28.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=563194357460179&autoLogAppEvents=1"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </head>
  <body>
    <?php include 'includes/header.inc.html.php'; ?>
    <?php include 'includes/nav.inc.html.php'; ?>
    <main>
      <!---Image Gallery Section --->
      <section>
        <!---Slider Gallery --->
        <div class="rslides_container">
          <ul class="rslides" id="slider1">
            <li><img src="img/ace1.jpg" alt="swimmers running into water"></li>
            <li><img src="img/ace2.jpg" alt="person with arm crutches smiling while walking in race"></li>
            <li><img src="img/ace3.jpg" alt="group of racing bicyclists"></li>
            <li><img src="img/ace4.jpg" alt="swimmers in full swimsuits running into water"></li>
            <li><img src="img/ace5.jpg" alt="Three bicyclists riding with sun lighting background"></li>
            <li><img src="img/ace6.jpg" alt="three people smiling while standing side by side on a beach"></li>
            <li><img src="img/ace7.jpg" alt="runner running with hand out, giving high fives to the crowd on their right"></li>
            <li><img src="img/ace8.jpg" alt="runner running with smile on their face, with other runners in distance"></li>
            <li><img src="img/ace9.jpg" alt="group of bicyclists on recumbent bikes biking towards finish line"></li>
          </ul>
        </div>
      </section>
      <section>
        <h3>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every Body.</h3>
          <h3>You can <a href="<?php echo BASE_URL; ?>about" class="read-link">read more</a> here.</h3>
      </section>
      <section>
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
        <div class="social-container">
          <!-- -Facebook --->
          <div class="fb-feed">
            <div id="fb-root"></div>
            <div class="fb-page" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/">Cas222Aceinthehole</a>
              </blockquote>
            </div>
          </div>
          <!---Twitter --->
          <div class="twitter-feed">
            <a class="twitter-timeline" data-theme="light" href="https://twitter.com/Cas222Pcc?ref_src=twsrc%5Etfw">Tweets by Cas222Pcc</a>
          </div>
        </div>
        <br />
        <h1>Like what you see? <br /><br />Please register for our Annual Ace in the Hole Multisport Weekend!</h1>
        <?php include 'includes/button.inc.html.php'; ?>
      </section>
    </main>
    <?php include 'includes/footer.inc.html.php'; ?>
  </body>
</html>
