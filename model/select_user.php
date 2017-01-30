<?php

$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);
$result = convertResultToArray($result);