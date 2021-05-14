<?php
include('lib/common.php');

if ($_SERVER['HTTP_USER_AGENT'] != '') die('403');

query("UPDATE button SET presses = presses + 1");

$button_presses = result("SELECT presses FROM button");

print($button_presses);