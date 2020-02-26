<!DOCTYPE html>
<html>
  <head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
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
        <h2>Thank you!</h2>
        <section>
          <p>Our records show you submitted the following:<br>
            Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8'); ?><br>
            Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8'); ?><br>
            Question: <?php echo htmlspecialchars($myQuestion, ENT_QUOTES, 'UTF-8'); ?><br>
            Athlete or Volunteer: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?>
          </p>
        </section>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://use.fontawesome.com/25af06de28.js"></script>
</body>
