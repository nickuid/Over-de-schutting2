<?php

$sql = "SELECT * from associations";
$result = $mysqli->query($sql);
$result = convertResultToArray($result);