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
          <label for="Athlete">Athlete</label>
          <input type="checkbox" id="myAthlete" name="athlete" value="Athlete">
          <label for="Volunteer">Volunteer</label>
          <input type="checkbox" id="myVolunteer" name="volunteer" value="Volunteer">
          <h2>Your Info</h2>
          <label for="myName">Name:</label>
          <input type="text" name="myName" id="myName" required>
          <label for="myAge">Age:</label>
          <input type="number" name="myAge" id="myAge" required>
          <label for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail" required>
          <!--Gender Checkboxes-->
          <label for="female">Female</label>
          <input type="checkbox" id="myGenderFem" name="female" value="Female">
          <label for="male">Male</label>
          <input type="checkbox" id="myGenderMale" name="male" value="Male">
          <label for="nonbinary">Nonbinary/Other</label>
          <input type="checkbox" id="myGenderQueer" name="nonbinary" value="Nonbinary">
          <!--Emergency Contact Info-->
          <h2>Emergency Contact Info</h2>
          <label for="myEName">Emergency Contact Name:</label>
          <input type="text" name="myEName" id="myEName" required>
          <label for="myENumber">Emergency Contact Phone Number:</label>
          <input type="number" id="myENumber" name="myENumber" required>
          <!--Event Registering For-->
          <h2>Event Registering For</h2>
          <label for="Long Course Swim">Long Course SWIM - 1.2mi</label>
          <input type="checkbox" id="myLongSwim" name="long course swim" value="Long Course Swim">
          <label for="Long Course Bike">Long Course BIKE - 58 Miles</label>
          <input type="checkbox" id="myLongBike" name="long course bike" value="Long Course Bike">
          <label for="Long Course Run">Long Course RUN - 13.1mi</label>
          <input type="checkbox" id="myLongRun" name="long course run" value="Long Course Run">
          <label for="Olympic Swim">OLYMPIC SWIM - 1,500 meters</label>
          <input type="checkbox" id="myOlySwim" name="olympic swim" value="Olympic Swim">
          <label for="Olympic Bike">OLYMPIC BIKE - 28mi</label>
          <input type="checkbox" id="myOlyBike" name="olympic bike" value="Olympic Bike">
          <label for="Olympic Run">OLYMPIC RUN - 10K</label>
          <input type="checkbox" id="myOlyRun" name="olympic run" value="Olympic Run">
          <label for="Sprint">Sprint</label>
          <input type="checkbox" id="mySprint" name="sprint" value="Sprint">
          <label for="Try-A-Tri">Try-A-Tri</label>
          <input type="checkbox" id="myTryATri" name="try-A-tri" value="Try-A-Tri">
          <label for="Half Marathon Course">Half Marathon COURSE - 13.1-miles</label>
          <input type="checkbox" id="myHalfMara" name="half marathon course" value="Half Marathon Course">
          <label for="10k COURSE">10k COURSE</label>
          <input type="checkbox" id="my10k" name="10k course" value="10k COURSE">
          <label for="Splash n' Dash">Splash n' Dash</label>
          <input type="checkbox" id="mySplash" name="splash n' dash" value="Splash n' Dash">
          <!--Special Accomendations-->
          <label for="myQuestion">Any Special Accommodations?</label>
          <textarea form="registerForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
          <!--Submit Button-->
          <input id="mySubmit" type="submit" value="Submit" required>
        </form>
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
