<?php
$files = glob("*.jpg");

foreach ($files as $f) {
    echo "<img src='$f'>";
}
?>
