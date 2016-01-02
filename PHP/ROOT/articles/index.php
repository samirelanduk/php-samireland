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
    <title>Home - Sam Ireland</title>
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
        $result = mysql_query("SELECT * FROM articles WHERE url='$url';");

        echo "\t\t<h1>" . mysql_result($result, 0, "title") . "</h1>";
        echo "\t\t<div class=\"date\">" . process_date(mysql_result($result, 0, "date")) . "</div>";
        echo mysql_result($result, 0, "body");
        mysql_close();

      ?>
    </main>

    <?php require $root . "/includes/footer.html" ?>
  </body>
</html>
