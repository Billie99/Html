<?php

session_start();

include("connect.php");
include("create_table.php");


//recupero variabili con anti sql-injection
//$username = mysql_real_escape_string($_POST['username']);
//$password = mysql_real_escape_string($_POST['password']);

$password = $_POST['password'];
$username = $_POST['username'];


$query = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";
$result = mysql_query($query) or die (mysql_error());

$fetch = mysql_fetch_assoc($result);

if(!$fetch)
{
  $messaggio = urlencode('Nome utente o password errati');
	header("location: Page-login.html?msg=$messaggio");
  exit;
}

if($fetch['Username'] == $username && $fetch['Password'] == $password)
{
  header("location: Account.html");
  echo '<script language=javascript>document.location.href="Page-login.html"</script>';
}

else
{
  echo '<script language=javascript>document.location.href="Page-login.html"</script>';
}

?>
