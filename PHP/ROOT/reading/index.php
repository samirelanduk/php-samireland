<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]) ?>

<!doctype html>

<html>
  <head>
    <?php require $root . "/includes/head.html" ?>
    <link rel="stylesheet" type="text/css" href="/css/reading.css">
    <title>Home - Sam Ireland</title>
  </head>

  <body>
    <?php require $root . "/includes/header.html" ?>
    <?php require $root . "/includes/nav.html" ?>

    <main>
			<h1>Reading</h1>
			<p>Here you will find the book, and the audiobook I'm currently working my way through. When finished, I usually write a short review - these can be found via the link at the bottom of this page.</p>
      <div class="medium">
				<h2>What I'm reading</h2>
				<h3 class="title"><a href="http://www.amazon.co.uk/The-Last-Empire-Final-Soviet/dp/0465046711">The Last Empire: The Final Days of the Soviet Union</a></h3>
				<h3 class="author">Serhii Plokhy</h3>
				<p>A topical subject, and one of the most important events of the 20<sup>th</sup> Century.</p>
			</div>
			<div class="medium">
				<h2>What I'm listening to</h2>
				<h3 class="title"><a href="http://www.audible.co.uk/pd/Non-fiction/How-the-Mind-Works-Audiobook/B0064DZXG8">How the Mind Works</a></h3>
				<h3 class="author">Steven Pinker</h3>
				<p>I'm a big fan of Steven Pinker - his other book <i>The Better Angels of our Nature</i> might be one of my favourite non-fiction books of all time. This is his look at artificial intelligence and the way our own version of it works.</p>
			</div>
			<h2><a href="reviews/">My reviews</a></h2>
		</main>

    <?php require $root . "/includes/footer.html" ?>
  </body>
</html>
