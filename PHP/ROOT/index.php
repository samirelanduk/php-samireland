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
      <h1>Hello.</h1>
      <p>Welcome to my home on the internet.</p>
      <p>I'm Sam, a developer living in Edinburgh, and this is my personal website.
        It contains my blog, and anything interesting I might make or do.
      </p>
      <p>Have a look around!</p>
    </main>

    <?php require "includes/footer.html" ?>
  </body>
</html>
