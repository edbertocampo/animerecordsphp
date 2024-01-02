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
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);

session_start();

//connect to the server 
mysql_connect("localhost", "root", "") 
or die("Not connected to the server<br>");
//print"Connected to the server<br>";
print"<br>";


//select database
mysql_select_db("db_anime") 
or die("Not connected to the database<br>");
//echo"Connected to the database<br>";

$username=$_POST['username'];
$password=$_POST['password'];

if($username && $password)
{

//select the username to query
 $query=mysql_query("SELECT * FROM tb_user WHERE username='$username'");
 $numrows=mysql_num_rows($query);
  
  
 if ($numrows!=0){
   while($row=mysql_fetch_array($query)){
     $dbusername=$row['username'];
     $dbpassword=$row['password'];
	}
	if($username==$dbusername && $password == $dbpassword)
{
  echo"<br><br>Welcome, <font color='red'><b>$username!<b></font>";
  $_SESSION['username']=$username;
echo "<br><br><center><a href= main.menu.php><button type='submit'>Main Menu</button></a></center>";
echo "<br><br><center><a href= logout.php><button type='submit'>Logout</button></a></center>";
  
 }
 else
   echo("<font color='red'><br>incorrect password!!!</font> <br><br>Click here to try again:<a href='index.php'>Login</a>");

} 
else
{
 echo ("<font color='red'><br>that user does not exist!</font> <br><br>Click here to try again:<a href='index.php'>Login</a>"); 
}

}
?>
</div>
</body>
</html>