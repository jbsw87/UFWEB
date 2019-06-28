<?php

session_start();

//On se connecte a la base de donnee

$bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');


$mail_webmaster = 'jbgravier13@gmail.com';

$url_root = 'http://www.portfoliofinalV2.com/';




$url_home = 'index.php';


$design = 'default';
?>