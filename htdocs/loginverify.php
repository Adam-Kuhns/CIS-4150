<!DOCTYPE html>
<?php
session_start();
$username = $_POST['username']?? ""; //looking for username and password feilds in $_Post variable
$password = $_POST['password']?? "";

if(isset($_SESSION['username'])== false || isset($_SESSION['password'])== false){
  $_SESSION['username'] = '';
  $_SESSION['password'] = '';
  if($_SESSION['username'] == '' || $_SESSION['password'] == ''){
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  }
}

$susr = $_SESSION['username'];
$spass = $_SESSION['password'];

@$db= new mysqli('localhost','root','','CIS4150'); //set for username with no password and database named CIS4150

if ($db->connect_errno) {
    printf("Connect failed");
    exit();
}

//table is called users
$query = "SELECT * FROM USERS WHERE Uname = ? AND Passwd = ?;";
$stmt = $db -> prepare($query);
$stmt -> bind_param('ss', $susr, $spass);
$stmt -> execute();
$stmt -> store_result();
$stmt -> bind_result($new,$ismember,$pass,$uname);
while($stmt -> fetch()){
}

$db -> close();


if($stmt -> num_rows == 1){
    echo "<h2>Login Succsess</h2>";
}else{
  echo "<h2>Login Failed</h2>";
  echo"<div>Try Again (this should be a button / link)</div>";

}


 ?>
