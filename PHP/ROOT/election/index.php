<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]) ?>

<!doctype html>

<html>
  <head>
    <?php require $root . "/includes/head.html" ?>
    <link rel="stylesheet" type="text/css" href="election.css">
    <script src="election.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>
    <script src="canvasjs.min.js"></script>
    <title>Election - Sam Ireland</title>
  </head>

  <body>
    <?php require $root . "/includes/header.html" ?>
    <?php require $root . "/includes/nav.html" ?>

    <main>
      <h1>Alternative Elections</h1>
      <div id="controls">
			  <div id="buttons"><input type="submit" value="Another" onclick="addChange()">&nbsp;<input type="submit" value="Apply" onclick="apply()"></div>
		  </div>
  		<div id="commons">
  			<table id="seats">
  				<tr>
  					<td>
  						<table id="seats1"></table>
  					</td>
  					<td>
  						<div id="seats2"></div>
  					</td>
  				</tr>
  			</table>
  			<table id="votes">
  				<tr>
  					<td>
  						<table id="votes1"></table>
  					</td>
  					<td>
  						<div id="votes2"></div>
  					</td>
  				</tr>
  			</table>
  		</div>
  		<div style="overflow:hidden;">
  			<object id="map" type="image/svg+xml"></object>
  		</div>
  		<h2>Notes</h2>
  		<p>This project aims to show the make-up of the House of Commons (and, unless you're on mobile, an SVG map of the constituencies) if voting patterns had been different.</p>
  		<p>Some crucial resources for this project were:
  		<ul>
  			<li><a href="http://en.wikipedia.org/wiki/United_Kingdom_general_election,_2015#/media/File:2015UKElectionMap.svg">This</a> SVG map of the 2015 election, released under Creative Commons. I have modified it slightly to add the Orkney islands (yes I know they aren't in the right place) and clean up the subsections.</li>
  			<li>The voting data comes from the BBC website. There are a few minor discrepancies but generally they are correct.</li>
  			<li>Charts are made with the excellent <a href="http://canvasjs.com/">CanvasJS</a>.
  		</ul></p>
  		<p>A writeup documenting this project can be found <a href="/articles?id=alterative-election">here</a>.</p><p style="font-size: 80%;">(Please note that the map will not change as it should do in Internet Explorer. If you know how to access SVG class names in IE, please get in touch!)</p>
		</main>
    <?php require $root . "/includes/footer.html" ?>
  </body>
</html>
