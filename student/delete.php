<?php

include 'connection.php';

$id = $_GET['id'];

$q = " DELETE FROM `courseenrolls` WHERE id = $id ";

mysqli_query($db, $q);

header('location:enrollhistory.php');

?>