<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog System</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <?php
    include_once "sysgam/Mysession.php";
    include_once "sysgam/postgen.php";
    include_once "views/nav.php";
    include_once "sysgam/membership.php";
    ?>