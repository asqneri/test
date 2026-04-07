<?php
$now = time();
$newyear = mktime(0, 0, 0, 1, 1, date('Y') + 1);
echo ($newyear - $now) / 60 / 60 / 24;
?>
