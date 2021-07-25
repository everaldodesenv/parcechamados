<?php

$user='root';
$pass='123456';
$server='localhost';
$db='parcechamados';

$mysqli = new mysqli($server, $user, $pass, $db);
$mysqli->set_charset('utf8');

if ($mysqli->connect_error){
    die ('Connect Error');
}else{
   // echo 'conexao ok';
}

?>
