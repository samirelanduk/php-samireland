<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]) ?>

<!doctype html>

<html>
  <head>
    <?php require $root . "/includes/head.html" ?>
    <link rel="stylesheet" type="text/css" href="/css/reading.css">
    <title>Reading - Sam Ireland</title>
  </head>

  <body>
    <?php require $root . "/includes/header.html" ?>
    <?php require $root . "/includes/nav.html" ?>

    <main>
			<h1>Reading</h1>
			<p>Here you will find the book, and the audiobook I'm currently working my way through. When finished, I usually write a short review - these can be found via the link at the bottom of this page.</p>
      <div class="medium">
				<h2>What I'm reading</h2>
				<h3 class="title"><a target="_blank" href="http://www.amazon.co.uk/Britain-Brink-Dangerous-Weekend-October/dp/1848848145">Britain on the Brink: The Cold War's Most Dangerous Weekend, 27-28 October 1962</a></h3>
				<h3 class="author">Jim Wilson</h3>
				<p>My favourite Historical event, told from a British perspecitve.</p>
			</div>
			<div class="medium">
				<h2>What I'm listening to</h2>
				<h3 class="title"><a target="_blank" href="http://www.audible.co.uk/pd/History/Hitler-Audiobook/B017HZAUJG">Hitler: A Biography</a></h3>
				<h3 class="author">Ian Kershaw</h3>
				<p>A pretty intimidating tome on Adolf Hitler. Maybe you've heard of him?</p>
			</div>
			<h2><a href="reviews/">My reviews</a></h2>
		</main>

    <?php require $root . "/includes/footer.html" ?>
  </body>
</html>
