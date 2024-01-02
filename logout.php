<html>
<head><title>Login</title>
</head>
<style type="text/css">

button[type=submit] {
  width: 30%;
  background-color: white;
  color: black;
  border: 2px solid #555555;
  padding: 14px 20px;
  margin-left: 80px;
  border-radius: 4px;
  cursor: pointer;
  display: inline-block;
}

button[type=submit]:hover {
  background-color: #555555;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.h2{
  font-size: 120%;
  color: black;
  border-radius: 5px;
  background-color: #f2f2f2;
  width: 45%;
  padding: 20px;
  left: 50%;
  transform: translate(-50%, 0);
  margin-left: 750px;
  font-family: helvetica;

}
.form {
  border-radius: 5px;
  background-color: #f2f2f2;
  width: 45%;
  padding: 20px;
  opacity: 0.9;
  margin-left: 392px;
  margin-top: 30px;
  

}

.bg {

  background-image: url("bg.png");
  position: relative;

  height: 100%; 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>

<body class="bg">
<div class="h2"><center><h2>Anime Records</h2></center></div><br>

<div class="form">
<?php

session_start();
session_destroy();
echo"You've been logged out. 
<a href='index.php'> 
Click here</a> to return";
?>
</div>
</body>
</html>