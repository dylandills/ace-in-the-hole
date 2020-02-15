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
      <h1>Contact</h1>
      <br />
      <h2>Questions? We'd love to hear from you!</h2>
      <form method="post" action=" " id="inquiryForm">
        <label for="myName">Name:</label>
          <input type="text" name="myName" id="myName">
        <label for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail">
        <label for="myQuestion">Question:</label>
          <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
        <input id="mySubmit" type="submit" value="Submit">
      </form>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://use.fontawesome.com/25af06de28.js"></script>
  </body>
</html>
