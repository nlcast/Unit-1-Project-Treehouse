<?php include('inc/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script>
    setTimeout(function() {
        window.location.reload(1);
      }, 20000);
  </script>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body bgcolor="<?php printColor() ?>">
  <div class="container">
    <div id="quote-box">
      <?php printQuote() ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>
