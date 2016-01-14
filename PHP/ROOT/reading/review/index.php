<?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
  if(empty($_GET['id'])) {
    header('Location: /');
    exit;
  } else {
    $url = $_GET['id'];
  }
 ?>

<!doctype html>

<html>
  <head>
    <?php require $root . "/includes/head.html" ?>
    <title>Review - Sam Ireland</title>
    <link rel="stylesheet" type="text/css" href="/css/reading.css">
  </head>

  <body>
    <?php require $root . "/includes/header.html" ?>
    <?php require $root . "/includes/nav.html" ?>

    <main>
      <?php
        require $root . "/params.php";
        require $root . "/functions.php";
        $connection = mysql_connect($hostname, $username, $password);
        mysql_select_db($database);

        $url = mysql_real_escape_string($_GET['id']);
        $result = mysql_query("SELECT * FROM articles WHERE type='review' and url='$url';");
        $date = mysql_result($result, 0, "date");
        echo "\t\t<h1>" . mysql_result($result, 0, "title") . "</h1>";
        echo "\t\t<div class=\"author\">" . mysql_result($result, 0, "author") . "</div>\n";
        echo mysql_result($result, 0, "body");

      ?>
      <div id="review_nav">
        <span id="prev_review">
          <?php
            $result = mysql_query("SELECT * FROM articles WHERE type='review' and date<'$date' ORDER BY date;");
            if (mysql_num_rows($result) > 0) {
              echo "<a href=\"/reading/review?id=" . mysql_result($result, mysql_num_rows($result) - 1, "url") . "\">";
              echo "&#8592; Previous review</a>";
            }
          ?>
        </span>
        <span id="next_review">
          <?php
            $result = mysql_query("SELECT * FROM articles WHERE type='review' and date>'$date' ORDER BY date;");
            if (mysql_num_rows($result) > 0) {
              echo "<a href=\"/reading/review?id=" . mysql_result($result, 0, "url") . "\">";
              echo "Next review &#8594;</a>";
            }
            mysql_close();
          ?>

        </span>
      </div>
    </main>

    <?php require $root . "/includes/footer.html" ?>
  </body>
</html>
