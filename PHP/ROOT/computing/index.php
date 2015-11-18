<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]) ?>

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
      <h1>Coding Projects</h1>
<?php
        require $root . "/params.php";
        require $root . "/functions.php";
        $connection = mysql_connect($hostname, $username, $password);
        mysql_select_db($database);

        $result = mysql_query("SELECT * FROM articles WHERE type='computing' ORDER BY date DESC;");
        for ($j = 0; $j < mysql_num_rows($result); ++$j) {
          echo "\t\t<div class=\"article_link\">\n";
          echo "\t\t\t<h2><a href=\"/articles?id=" .
           mysql_result($result, $j, "url") . "\">" .
            mysql_result($result, $j, "title") .
             "</a></h2>\n";
          echo "\t\t\t<div class=\"date\">" . process_date(mysql_result($result, $j, "date")) . "</div>\n";
          echo "\t\t\t<div class=\"blurb\">" . mysql_result($result, $j, "blurb") . "</div>\n";

          echo "\t\t</div>\n";
        }
      ?>
    </main>

    <?php require $root . "/includes/footer.html" ?>
  </body>
</html>
