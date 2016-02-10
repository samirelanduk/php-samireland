<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]) ?>

<!doctype html>

<html>
  <head>
    <?php require $root . "/includes/head.html" ?>
    <title>Musical Note Practice - Sam Ireland</title>
    <style>
      table {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
      }

      #controls {
        width: 30%;
      }

      #sound {
        width: 70%;
        text-align: center;
        vertical-align: middle;
        font-size: 96px;
      }
    </style>
    <script>
    var timer;

      function runTest() {
        changeSymbol();
        var duration = parseInt(document.getElementById("duration").value);

        if (isNaN(duration)) {
          return false;
        }

        timer = setInterval(changeSymbol, duration * 1000);
      }

      function changeSymbol() {
        var notes = [
          ["A", "B", "C", "D", "E", "F", "G"],
          ["test1", "test2", "test3"],
          ["a", "b", "c", "d", "e", "f", "g"]
        ];
        var symbols = [];
        if (document.getElementById("notes").checked) {
          symbols = notes[0];
        } else if (document.getElementById("blacks").checked) {
          symbols = notes[1];
        } else if (document.getElementById("chords").checked) {
          symbols = notes[2];
        } else {
          symbols = notes[1];
        }

        var sound = document.getElementById("sound");
        sound.innerHTML = symbols[Math.floor(Math.random() * symbols.length)];
      }

      function stop() {
        clearInterval(timer);
        var sound = document.getElementById("sound");
        sound.innerHTML = "";
      }
    </script>
  </head>

  <body>
    <?php require $root . "/includes/header.html" ?>
    <?php require $root . "/includes/nav.html" ?>

    <main>
      <h1>Note Practice</h1>
      <table>
        <tr>
          <td id="controls">
            <input type="radio" name="sounds" id="notes" checked="checked"><label for="notes">Notes</label><br>
            <input type="radio" name="sounds" id="blacks"><label for="blacks">Notes (black)</label><br>
            <input type="radio" name="sounds" id="chords"><label for="chords">Chords</label><br>
            Duration (sec): <input type="text" autocomplete="off" size="3" id="duration" value="2"><br>
            <input type="submit" value="Start" onclick="runTest()">
            <input type="submit" value="Stop" onclick="stop()">
          </td>
            <td id="sound">

            </td>
        </tr>
      </table>
    </main>

    <?php require $root . "/includes/footer.html" ?>
  </body>
</html>
