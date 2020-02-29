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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://use.fontawesome.com/25af06de28.js"></script>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>
    <main>
      <section>
        <h1>Contact</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin interdum lorem ante, vel dignissim massa eleifend vitae. In sagittis placerat sem, consequat consectetur turpis consequat sit amet. Sed sollicitudin posuere augue in suscipit.</p>
        <form method="post" action=" " id="inquiryForm">
          <p><span class="error">* required field</span></p>
          <!---Honeypot --->
          <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
          <!--Name -->
          <label for="myName">*Name:</label>
          <input type="text" name="myName" id="myName" required>
          <!--Email -->
          <label for="myEmail">*E-mail:</label>
          <input type="text" name="myEmail" id="myEmail" required>
          <!--Question/Comment -->
          <label for="myQuestion">*Question/Comment:</label>
          <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion" required></textarea>
          <!--Athelete or Volunteer-->
          <div class="athlete-wrapper">
             <label for="Athlete">Athlete</label>
             <span class="radio"><input type="radio" name="radio" value="Athlete"></span>
             <label for="Volunteer">Volunteer</label>
             <span class="radio"><input type="radio" name="radio" value="Volunteer"></span>
           </div>
          <!--Submit -->
           <input id="mySubmit" type="submit" value="Submit">
        </form>
      </section>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
  </body>
  </html>
