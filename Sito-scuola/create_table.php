<?php

  $query = 'CREATE TABLE IF NOT EXISTS users(
            ID     smallint primary key,
            Usernmae   char(20) not null,
            Email   char(20) not null,
            Password char(20) not null,
            UNIQUE(email, password)
            )';

$table = mysql_query($query);

if(!$table)
{
  echo 'Errore nella creazione della tabella';
}

?>
