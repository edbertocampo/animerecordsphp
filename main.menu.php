<html>
<head><title>Insert Record</title></head>

<style type="text/css">

button[type=logout] {
  width: 178px;
  background-color: white;
  color: black;
  border: 2px solid #555555;
  text-align: center;
  padding: 14px 20px;
  margin-left: 0px;
  border-radius: 4px;
  cursor: pointer;
  display: inline-block;
}

button[type=logout]:hover {
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

label {
  padding: 12px 12px 12px 0;
  padding-left: 0px;
  display: block;
  width: 200px;
  text-align: center;
  font-size: 100%;
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

.vids {
  border-radius: 5px;
  background-color: #f2f2f2;
  width: 45%;
  height: 7%;
  padding: 20px;
  margin: auto;
  margin-top: 40px;
  margin-bottom: 10px;
  float:center;
  opacity: 0.9;
}

.lin:link, .lin:visited {
  background-color: white;
  color: black;
  border: 2px solid #555555;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  width: 150px;
  height: 30px;
  border-radius: 4px;
  cursor: pointer;
}

.lin:hover, .lin:active {
  background-color: #555555;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>

<body class = "bg" >
<div class="h2"><center><h2>Anime Records</h2></center></div><br>

<div class="form">
<h3 style="text-align: center">Main Menu</h3>
<center>
<label><a href= animerecords.php class ="lin"> Adding Record </a></label>
<!--<label><a href= # class ="lin">Updating Record </a></label>-->
<label><a href= animerecord_search.php class ="lin">Searching Record </a></label>
<label><a href= animerecord_view.php class ="lin"> Viewing Record </a></label>
<label><a href= animerecord_sortby.php class ="lin">Sorting Record </a></label>
</center>
</div>
<div class = "vids">

<center><a href= logout.php class="log"><button type="logout">Logout</button></a></center>
</div>
</body>
</html>