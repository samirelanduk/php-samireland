<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]) ?>

<!doctype html>

<html>
  <head>
    <?php require $root . "/includes/head.html" ?>
    <title>Home - Sam Ireland</title>
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
            Number: <input type="text" autocomplete="off" size="3"><br>
            Duration (sec): <input type="text" autocomplete="off" size="3"><br>
            <input type="submit" value="Start">
            <input type="submit" value="Stop">
          </td>
            <td id="sound">
              A
            </td>
        </tr>
      </table>
    </main>

    <?php require $root . "/includes/footer.html" ?>
  </body>
</html>
