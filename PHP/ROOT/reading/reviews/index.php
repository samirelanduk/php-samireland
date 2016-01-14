<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]) ?>

<!doctype html>

<html>
  <head>
    <?php require $root . "/includes/head.html" ?>
    <link rel="stylesheet" type="text/css" href="/css/reading.css">
    <title>Reviews - Sam Ireland</title>
  </head>

  <body>
    <?php require $root . "/includes/header.html" ?>
    <?php require $root . "/includes/nav.html" ?>

    <main>
      <h1>Reviews</h1>
      <p>The latest reviews are at the top, and they stretch back to July 2014. Enjoy.</p>
      <div id="reviews">
<?php
        require $root . "/params.php";
        $connection = mysql_connect($hostname, $username, $password);
        mysql_select_db($database);

        $result = mysql_query("SELECT * FROM articles WHERE type='review' ORDER BY date DESC;");
        for ($j = 0; $j < mysql_num_rows($result); ++$j) {
          echo "\t\t<p><a href=\"/reading/review?id=" .
           mysql_result($result, $j, "url") . "\">" .
            mysql_result($result, $j, "title") .
             "</a></p>\n";
        }
        mysql_close();
        ?>
      </div>
    </main>

    <?php require $root . "/includes/footer.html" ?>
  </body>
</html>
