<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['roleid']);
?>
<HTML>
	<HEAD>
	<TITLE>251 Club of Vermont</TITLE>
	<link rel = "stylesheet" href = "style.css">
	</HEAD>

<BODY>
	<div class="TopBar">
	<a href="HomePage.html">Home</a>
	<a href="Map.html">Map</a>
	<a href="Profile.html">Profile</a>
	<a href="Groups.html">Groups</a>
	<a href="Events.html">Events</a>
	<a href="News.html">News</a>
	<a href="MembersList.html">Members List</a>
	<a href="Login.html">Login</a>
	</div>

	<br>

	<div class="MainTitle">
		<h2>User Login</h1>
	</div>
	<form method = 'post' action = 'loginverify.php'>
		  Username:
		  <input type='text' id='username' name='username'><br>
		  Password:
		  <input type='password' id='password' name='password'><br><br>

		  <input type='submit' value='Login' name='submit'><br>
 </form>

	<br>

	<div class="Content">

	<font size="10">About</font>
	<br>
	Add stuff here
	<br>
	<br>
	<font size="10">History</font>
	<br>
	Add stuff here
	<br>
	<br>
	<font size="10">News</font>
	<br>
	Add stuff here

	</div>


	<br>








</BODY>
</HTML>
