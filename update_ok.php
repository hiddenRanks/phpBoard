<?php
require("db.php");

$title = $_POST['title'];
$content = $_POST['content'];
$boardCon = $_POST['$boardCon'];

$sql = "UPDATE $boardCon SET ";