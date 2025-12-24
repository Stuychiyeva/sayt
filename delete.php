<?php
include "db.php";

$id = $_GET['id'];

$connect->query("DELETE FROM users WHERE id=$id");

header("Location: home.php");
?>