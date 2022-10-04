<?php
    $mysqli = mysqli_connect("localhost", "root", "qwerasdf", "opentutorials");
    $res = mysqli_query($mysqil, "SHOW TABLES");
    $row = mysqli_fetch_assoc($res);
?>