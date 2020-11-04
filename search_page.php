<link rel="stylesheet" href="hw1.css">
<header>
		<h1>Online Car Showroom</h1>
		<nav>
			<a href="Home.php" class = "active">Home</a>
			<a href="raufu370.php">Explore</a>
		
		</nav>
	</header>
	<div class="form" align: "center">
<form action="search_page.php" method="post">
<input type="text" name="search"/>
<button>Search</button>
<table  style= "background-color:#F0F8FF" "border:2" "width: 60%" "display: inline-block""padding-left: 0.5%">
	<tr>
		<th>Manufacturer Name</th>
		<th>Model Name</th>
		<th>Price</th>
		<th>Feature</th>
	</tr>
<?php
$conn=mysqli_connect("localhost","root","","cars");
$get = $_POST['search'];
if($get){
	$show="SELECT * FROM car WHERE ((manufacturer LIKE'%$get%') OR (model LIKE'%$get%') OR (price LIKE'%$get%') OR (feature LIKE'%$get%'))";
	$result=mysqli_query($conn,$show);
	
while($rows=mysqli_fetch_array($result)){
	echo  "<tr>";
	echo  "<td>";
	echo $rows['Manufacturer'];
	echo  "</td>";
	echo  "<td>";
	echo $rows['Model'];
	echo  "</td>";
	echo  "<td>";
	echo $rows['Price'];
	echo  "</td>";
	echo  "<td>";
	echo $rows['Feature'];
	echo  "</td>";
	echo  "</tr>";
	echo "<br/>";
}
}
else {
	echo "Please Try Searching Others";
}
?>
</table>
</br>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<footer align="center"> This website is made by Raufu Prezens. All rights reserved by the developer.</footer>