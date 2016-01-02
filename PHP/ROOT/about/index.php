<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]) ?>

<!doctype html>

<html>
  <head>
    <?php require $root . "/includes/head.html" ?>
    <title>About - Sam Ireland</title>
  </head>

  <body>
    <?php require $root . "/includes/header.html" ?>
    <?php require $root . "/includes/nav.html" ?>

    <main>
      <h1>About Sam</h1>
      <p>I'm a developer/researcher, currently living in Edinburgh. Recently graduated from
        the University of Edinburgh, and finding graduate life to be not quite as scary as
        foretold.
      </p>
      <p>At the moment I'm working at the very same university on a Syntehtic Biology/Pharmacology
        'crossover' project, building a database of transferable drug binding domains. It's
        pretty cool actually - really enjoying it.
      </p>
      <p>
        Before I came to Edinburgh I lived in Blackpool, which part of me I guess will
        always call home. Before that I lived in a town called Bacup, which you
        haven't heard of.
      </p>
      <p>
        I started this site in 2014, mostly as an excercise in web development. And even
        though I am sort of trying to make it a formal 'window onto the internet' now, it's still
        my go-to place for trying out new web technologies I might want to explore. So
        if something isn't working, that's my catch-all excuse.
      </p>
      <p>
        If you want to get in touch, your best bet is probably to
        <a href="http://www.twitter.com/sam_m_ireland/" target="_blank">tweet</a> me.
      </p>
      <p>
        Thanks for stopping by!
      </p>
      <div class="image">
        <img src="/images/sam-about.jpg" width="240" height="320" title="Not technically my cat.">
        Not technically my cat.
      </div>
    </main>

    <?php require $root . "/includes/footer.html" ?>
  </body>
</html>
