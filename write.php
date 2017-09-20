<?php

$host = 'localhost';
$user = 'dew3737';
$pw = 'sls0318';
$dbName = 'dew3737';

$mysqli = new mysqli($host, $user, $pw, $dbName);

$msg = $_GET['msg'];

$sql = "insert into user(msg)";
$sql = $sql."values('$msg')";
if($mysqli->query($sql)){
    echo $msg.'</br>';
}

?>