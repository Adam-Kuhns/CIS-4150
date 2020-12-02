<!DOCTYPE html>
<?php

$username = $_POST['username']?? "";
$password = $_POST['password']?? "";


if($password == ''||$username == ''|){
  echo"empty feilds please try again";
  print "Try Again (this should be a button or link)";
}else{
    @$db= new mysqli('localhost','username','','CIS4150'); //set for username with no password and database named CIS4150
  $query = "insert into users(username, password) values (?,?);";
  $stmt = $db -> prepare($query);
  $stmt -> bind_param('ss', $username, $password);
  $stmt -> execute();
  $db -> close();

  if($stmt -> affected_rows > 0){
    echo "<h2>The following user was sucsesfully put into the database</h2>";
    echo "Username: $username <br>";
    echo "Password: $password <br>";
  }else{
    echo "Something went wrong, user was not added";
    print "Try Again (This should be a button or link)";

  }
}

?>
