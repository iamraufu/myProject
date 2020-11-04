<?php  
 $connect = mysqli_connect("localhost", "root", "", "raufu370");  
 $sql = "SELECT * FROM manufacturer INNER JOIN model ON manufacturer.manufacturer_id = model.manufacturer_id";  
 //$sql = "SELECT * FROM price(price INNER JOIN feature ON price.model_id = feature.model_id) INNER JOIN feature ON price.model_id = feature.model_id";  
 //$sql = "SELECT * FROM  $sqla INNER JOIN feature ON $sqla.model_id = $sqlb.model_id";
   
  $sql2 = "SELECT * FROM price INNER JOIN feature ON price.model_id = feature.model_id";
 ("select Cname,Sname,Cityname from country t1 inner join state t2 on t1.Cid=t2.Cid inner join city t3 on t2.Sid=t3.Sid");
 
 //$sql =("select manufacturer_name,model_name,price,feature from manufacturer m1 inner join model m2 on m1.manufacturer_id=m2.manufacturer_id inner join model m3 on m2.model_id=m3.model_id inner  join price m4 on m3");
// $sql = "SELECT * FROM manufacturer LEFT JOIN model ON manufacturer.manufacturer_id = model.manufacturer_id SELECT * FROM price RIGHT JOIN feature ON price.model_id = feature.model_id";
 $result = mysqli_query($connect, $sql);  
 $result2 = mysqli_query($connect, $sql2); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Online Car Showroom</title>  
       
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
       <link rel="stylesheet" href="hw1.css">
	   </head> 
<header>
		<h1>Online Car Showroom</h1>
		<nav>
			<a href="Home.php" class = "active">Home</a>
			<a href="raufu370.php">Explore</a>
		
		</nav>
	</header>
       
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align=""><b><i>Showing All Cars, Manufacturer List, Price and Features</i></b></h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Manufacturer Name</th>  
                               <th>Model Name</th>  
			
                          </tr>  
						 <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
						   
                          <tr>  
								<td><?php echo $row["manufacturer_name"];?></td>  
                                <td><?php echo $row["model_name"]; ?></td>  
							    
						   </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
						   </table>  
						   </div>
						   <div>
						    <table class="table table-striped">  
							 <tr>
						  <th>Price</th>
							   <th>Feature</th>
							   </tr>
                          
						  <?php  
                          if(mysqli_num_rows($result2) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result2))  
                               {  
                          ?>  
						   
                          <tr>  
								
							    <td><?php echo $row["price"];?></td>
							    <td><?php echo $row["feature"];?></td> 
						   </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                    
                </div>  
           </div>  
           <br />  
      </body>  

 </html> 