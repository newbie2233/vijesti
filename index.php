<html>
<head>
<style>
div{

text-align:center;

background-color:black;
color:white;
width:99%;
height:6%;
list-style-type:0;
overflow:hidden;}

li {display:inline;
border-right:1px solid black;
margin:2px;
padding2px;
text-decoration:0;
list-style-type:0;
width:100%;}

a{
display:inline;
	float:left;
background-color:black;
color:white;
text-decoration:none;
padding:10px 16px;
text-align:center;
border-right:1px solid white;
list-style-type:none;}

li a:hover{
background-color:red;
color:white;}

.more{
	
	
	
	background-color:green;
	padding:2px;
	maring:2px;
	
	
	
}
.more:hover{background-color:lightgreen;}

form {
border:2px solid black;}


</style>
</head>
<body>


<img src="title.bmp" align="middle">
<hr>
<br>
<div>
<li> <a href="index.php">NAJNOVIJE</a> </li>
<li><a href="sport.php"> SPORT </a></li> 
<li> <a href="#">CRNA HRONIKA </a></li>
<li> <a href="#">SHOWBIZ </a></li>
</div>
<hr>





</body>
</html>



<?php


$localhost="localhost";
$user="root";
$pass="amer555";
$dbn="bih_danas";

$con=new mysqli($localhost,$user,$pass,$dbn);

if($con->connect_error){
die("Error");}


$sql="Select * from data";

$result=$con->query($sql);
if($result->num_rows>0){
	while($col=$result->fetch_assoc()){
	
	
	    echo "<html><body><form>
		<img src='".$col['Slika']."'></img>
		<h4>".$col['Naslov']."</h4>
		<p>".$col['Uvod']."</p><br>
			<a href='".$col['File']."' class='more' align='middle'>Više...</a><br><br></form></body></html>";
	
	
	
	
	
	
	
	
	
	}
	}else echo "Prazno";
	
	

$con->close();
























?>







