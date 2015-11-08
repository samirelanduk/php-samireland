<?php
function display_blogpost($title, $date, $body, $indent_sofar) {
  $indent = str_repeat("  ", $indent_sofar);
  $final_indent = str_repeat("  ", $indent_sofar - 1);
  $readable_date = process_date($date);
  $indented_body = str_replace("\n", "\n".$indent, $body);
  echo <<<END
<div class='blogpost'>
$indent<div class='title'>$title</div>
$indent<div class='date'>$readable_date</div>
$indent$indented_body
$final_indent</div>

END;

}


function process_date($mysql_string) {
  $year = intval(explode("-", $mysql_string)[0]);
  $month = intval(explode("-", $mysql_string)[1]);
  $day = intval(explode("-", $mysql_string)[2]);

  $date= mktime(0, 0, 0, $day, $month, $year);

  return date("j<\s\u\p>S</\s\u\p> F Y", strtotime($mysql_string));
}
?>
