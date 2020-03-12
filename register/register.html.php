<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Ace In The Hole Events</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto&display=swap" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/helper.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>
    <main>
      <section>
        <h1>Registration</h1>
      </section>
      <section>
        <h2>What To Bring</h2>
        <strong>Watch the weather closely. The show goes on no matter what the weather is doing.</strong><br /><br />
        <p>You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.<br /><br />
        Swim: Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.<br /><br />
        Bike: A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.<br /><br />
        Run: You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don't have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.<br /><br />
        Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>
      </section>
      <section>
        <h2>Prices</h2>
        <ul>
          <li>Long Course - $240</li>
          <li>Olympic - $110</li>
          <li>10K - $50</li>
          <li>Half Marathon - $75</li>
          <li>Sprint - $90</li>
          <li>Try-a-Tri - $65</li>
        </ul>
        <h2>Cost Includes</h2>
        <ul>
          <li>Food & Beer</li>
          <li>Access to the weekend's live entertainment & Fitness Expo</li>
          <li>Commemorative Finisher medal</li>
          <li>Accurate Chip Timing for competitive races</li>
          <li>ce in the Hole Multisport Weekend Tech Shirt</li>
          <li>Post-event party & entertainment</li>
        </ul>
        <br />
        <strong>NOTE: Tech shirts guaranteed to pre-registered participants only.</strong>
        <h2>Packet Pickup</h2>
        <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
        <br />
        <strong>For More Information On Course Details, please check out our <a href="<?php echo BASE_URL; ?>about">about</a> page</strong>
      </section>
      <section>
        <h2>Register</h2>
        <!--Registration Form -->
        <form method="post" action=" " id="registerForm">
          <p><span class="error">* required field</span></p>
          <!---Honeypot --->
          <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
          <!--Athelete or Volunteer-->
          <p>Will you be coming as an Athlete or a Volunteer?</p>
          <div class="athlete-wrapper">
            <select id="role" name="role[]">
              <option value="Athlete" name="role[]" >Athlete</option>
              <option value="Volunteer" name="role[]">Volunteer</option>
            </select>
           </div>
          <h2>Your Info</h2>
          <label for="myRName">*Name:</label>
          <input type="text" name="myName" id="myName" required>
          <label for="myAge">*Age:</label>
          <input type="number" name="myAge" id="myAge" required>
          <label for="myREmail">*E-mail:</label>
          <input type="text" name="myREmail" id="myREmail" required>
          <!--Gender Checkboxes-->
          <div class="gender-wrapper">
            <label for="gender">What gender do you identify with?</label>
            <br />
            <select id="gender" name="gender[]">
              <option value="Male" name="gender[]" >Male</option>
              <option value="Female" name="gender[]">Female</option>
              <option value="Nonbinary/Other" name="gender[]">Nonbinary/Other</option>
            </select>
          </div>
          <!--Emergency Contact Info-->
          <h2>Emergency Contact Info</h2>
          <label for="myEName">*Emergency Contact Name:</label>
          <input type="text" name="myEName" id="myEName" required>
          <label for="myENumber">*Emergency Contact Phone Number:</label>
          <input type="number" id="myENumber" name="myENumber" required>
          <!--Event Registering For-->
          <h2>Event Registering For</h2>
          <div class="event-wrapper">
            <label for="myLongSwim">Long Course SWIM - 1.2mi</label>
            <input type="checkbox" name="checkEvent[]" value="Long Course SWIM" >
            <label for="myLongBike">Long Course BIKE - 58 Miles</label>
            <input type="checkbox" name="checkEvent[]" value="Long Course BIKE" >
            <label for="myLongRun">Long Course RUN - 13.1mi</label>
            <input type="checkbox" name="checkEvent[]" value="Long Course RUN" >
            <label for="myOlySwim">OLYMPIC SWIM - 1,500 meters</label>
            <input type="checkbox" name="checkEvent[]" value="OLYMPIC SWIM" >
            <label for="myOlyBike">OLYMPIC BIKE - 28mi</label>
            <input type="checkbox" name="checkEvent[]" value="OLYMPIC BIKE" >
            <label for="myOlyRun">OLYMPIC RUN - 10K</label>
            <input type="checkbox" name="checkEvent[]" value="OLYMPIC RUN" >
            <label for="mySprint">Sprint</label>
            <input type="checkbox" name="checkEvent[]" value="Sprint">
            <label for="myTryATri">Try-A-Tri</label>
            <input type="checkbox" name="checkEvent[]" value="Try-A-Tri">
            <label for="myHalfMara">Half Marathon COURSE - 13.1-miles</label>
            <input type="checkbox" name="checkEvent[]" value="Half Marathon COURSE">
            <label for= "my10k">10k COURSE</label>
            <input type="checkbox" name="checkEvent[]" value="10k COURSE">
            <label for="mySplash">Splash n' Dash</label>
            <input type="checkbox" name="checkEvent[]" value="Splash n' Dash">
          </div>
          <!--Special Accomendations-->
          <label for="myAccomendate">Any Special Accommodations?</label>
          <textarea form="registerForm" rows="10" cols="50" name="myAccomendate" id="myAccomendate"></textarea>
          <!--Submit Button-->
          <input id="submit" name="submit" type="submit" value="Submit">
        </form>
      </section>
      <div class="button" align="center">
        <h2>Questions? We'd love to hear from you!</h2>
        <br />
        <a class="register-button" a href="<?php echo BASE_URL; ?>contact" rel="nofollow">
          <span>Contact Us</span>
        </a>
      </div>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://use.fontawesome.com/25af06de28.js"></script>
  </body>
</html>
