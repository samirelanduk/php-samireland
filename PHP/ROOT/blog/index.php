<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]) ?>

<!doctype html>

<html>
  <head>
    <?php require $root . "/includes/head.html" ?>
    <title>Blog - Sam Ireland</title>
  </head>

  <body>
    <?php require $root . "/includes/header.html" ?>
    <?php require $root . "/includes/nav.html" ?>

    <main>
      <h1>Blog</h1>

      <?php
        require $root . "/params.php";
        require $root . "/functions.php";
        $connection = mysql_connect($hostname, $username, $password);
        mysql_select_db($database);

        $result = mysql_query("SELECT * FROM blogposts ORDER BY date DESC;");

        for ($j = 0; $j < mysql_num_rows($result); ++$j) {
          display_blogpost(
           mysql_result($result, $j, "title"),
           mysql_result($result, $j, "date"),
           mysql_result($result, $j, "body"),
           3
         );
        }
        mysql_close();
      ?>
    </main>

    <?php require $root . "/includes/footer.html" ?>
  </body>
</html>
