<!DOCTYPE html>
<html>
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
        <h2>What To Bring</h2>
        <p>Etiam venenatis facilisis dolor nec dapibus. Nam condimentum felis augue, nec euismod justo convallis sed. Sed in lorem feugiat, pulvinar purus vel, mollis odio. Sed eget facilisis nisi. Vivamus venenatis ex urna. Integer eget quam vestibulum, lacinia metus vel, ultrices tellus.</p>
      </section>
      <section>
        <h2>Prices</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin interdum lorem ante, vel dignissim massa eleifend vitae. In sagittis placerat sem, consequat consectetur turpis consequat sit amet. Sed sollicitudin posuere augue in suscipit.</p>
      </section>
      <section>
        <h2>Packet Pickup</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget quam mattis, pharetra purus vitae, facilisis ante. Maecenas nulla ex, lacinia at erat a, semper finibus eros. </p>
      </section>
      <section>
        <h2>Register</h2>
        <!--Registration Form -->
        <form method="post" action=" " id="registerForm">
          <!--Athelete or Volunteer-->
          <p>Will you be coming as an Athlete or a Volunteer?</p>
          <div class="athlete-wrapper">
            <label for="myAthlete">Athlete</label>
            <span><input type="checkbox" id="myAthlete" name="myAthlete"></span>
            <label for="myVolunteer">Volunteer</label>
            <span><input type="checkbox" id="myVolunteer" name="myVolunteer"></span>
          </div>
          <h2>Your Info</h2>
          <label for="myName">Name:</label>
          <input type="text" name="myName" id="myName" required>
          <label for="myAge">Age:</label>
          <input type="number" name="myAge" id="myAge" required>
          <label for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail" required>
          <!--Gender Checkboxes-->
          <div class="gender-wrapper">
            <label for="myGenderFem">Female</label>
            <span><input type="checkbox" id="myGenderFem" name="myGenderFem"></span>
            <label for="myGenderMale">Male</label>
            <span><input type="checkbox" id="myGenderMale" name="myGenderMale"></span>
            <label for="myGenderQueer">Nonbinary/Other</label>
            <span><input type="checkbox" id="myGenderQueer" name="myGenderQueer"></span>
          </div>
          <!--Emergency Contact Info-->
          <h2>Emergency Contact Info</h2>
          <label for="myEName">Emergency Contact Name:</label>
          <input type="text" name="myEName" id="myEName" required>
          <label for="myENumber">Emergency Contact Phone Number:</label>
          <input type="number" id="myENumber" name="myENumber" required>
          <!--Event Registering For-->
          <h2>Event Registering For</h2>
          <div class="event-wrapper">
            <label for="myLongSwim">Long Course SWIM - 1.2mi</label>
            <input type="checkbox" id="myLongSwim" name="myLongSwim">
            <label for="myLongBike">Long Course BIKE - 58 Miles</label>
            <input type="checkbox" id="myLongBike" name="myLongBike">
            <label for="myLongRun">Long Course RUN - 13.1mi</label>
            <input type="checkbox" id="myLongRun" name="myLongRun">
            <label for="myOlySwim">OLYMPIC SWIM - 1,500 meters</label>
            <input type="checkbox" id="myOlySwim" name="myOlySwim">
            <label for="myOlyBike">OLYMPIC BIKE - 28mi</label>
            <input type="checkbox" id="myOlyBike" name="myOlyBike">
            <label for="myOlyRun">OLYMPIC RUN - 10K</label>
            <input type="checkbox" id="myOlyRun" name="myOlyRun">
            <label for="mySprint">Sprint</label>
            <input type="checkbox" id="mySprint" name="mySprint">
            <label for="myTryATri">Try-A-Tri</label>
            <input type="checkbox" id="myTryATri" name="myTryATri">
            <label for="myHalfMara">Half Marathon COURSE - 13.1-miles</label>
            <input type="checkbox" id="myHalfMara" name="myHalfMara">
            <label for= "my10k">10k COURSE</label>
            <input type="checkbox" id="my10k" name="my10k">
            <label for="mySplash">Splash n' Dash</label>
            <input type="checkbox" id="mySplash" name="mySplash">
          </div>
          <!--Special Accomendations-->
          <label for="myAccomendate">Any Special Accommodations?</label>
          <textarea form="registerForm" rows="10" cols="50" name="myAccomendate" id="myAccomendate"></textarea>
          <!--Submit Button-->
          <input id="mySubmit" type="submit" value="Submit" required>
        </form>
        <span class="sucess">Thank You! Your Form Has Been Submitted</span>
      </section>
      <div class="button" align="center">
        <h2>Questions? We'd love to hear from you!</h2>
        <br />
        <a class="register-button" href="" rel="nofollow">
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