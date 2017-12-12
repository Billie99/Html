<?php

include("connect.php");
include("create_table.php");

$username = $_POST['username']; //recuperiamo l'username
$email = $_POST['email']; //recuperiamo l'email
$password = $_POST['password']; //recuperiamo la password

$sql = "INSERT INTO users (Username, Email, Password) VALUES ('$username', '$email', '$password')";

$result = mysql_query($sql);

if($result)
{
  header("location: Account.html");
  echo '<script language=javascript>document.location.href="Page-login.html"</script>';
}

else
{
  echo '<script language=javascript>document.location.href="Page-login.html"</script>';
}

?>
