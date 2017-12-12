<?php

// connesione al server Mysql

$connessione = mysql_connect('localhost', 'root', 'meine.name');

if(!$connessione)
{
  die('Errore nella connessione al database'. mysql_error());
}

$db_select = mysql_select_db("Programming", $connessione); //selezione del database

if(!$db_select)
{
  die('Errore nella selezione del database'. mysql_error());
}

?>
