<!--in this html file we will create our web app using html,css,javascript-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/templates/static/style.css">

    <title>flaskweb</title>

</head>
<body>
   <h1>Welcome to flaskweb</h1>

<!--this div contains the navigation bar with the given requirements-->

<div class="topnav" id="myTopnav">
  <a class="active" href="/templates/static/home/home.html">Home</a>
  <a href="/templates/static/downloads/downloads.html">downloads</a>
  <a href="/templates/static/uploads/uploads.html">uploads</a>
  <a href="/templates/static/my files/myfiles.html">my files</a>
  <a href="/templates/static/back up/backup.html">back up</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
</div>

<!--in this div we will create the companys logo -->

<div class="logo">
    <img src="/templates/static/logo.png">
</div>

<!--in this div we will create a div that houses our login form-->

<div class="login form">

<form action="/action_page.php" method="post">

<!--  <div class="container">-->
<!--    <label for="uname"><b>Username</b></label>-->
<!--    <input type="text" placeholder="Enter Username" name="uname" required>-->

<!--    <label for="psw"><b>Password</b></label>-->
<!--    <input type="password" placeholder="Enter Password" name="psw" required>-->

<!--    <button type="submit">Login</button>-->
<!--    <label>-->
<!--      <input type="checkbox" checked="checked" name="remember"> Remember me-->
<!--    </label>-->
<!--  </div>-->

<!--  <div class="container" style="background-color:#f1f1f1">-->
<!--    <button type="button" class="cancelbtn">Cancel</button>-->
<!--    <span class="psw">Forgot <a href="#">password?</a></span>-->
<!--  </div>-->

<?php
include("config.php");
include("login.php");
include("logout.php");
include("register.php");
include("session.php");
include("welcome.php");
include("reset_password.php");
?>

 </div>



</body>
</html>