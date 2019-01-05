<!DOCTYPE html>
<html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">
     <title>Soal nomor 7</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body role="document">
    <div class="container">
	<table class="table table-bordered">
	 <thead>
	 <tr>
	 <th>id</th>
	 <th>category_name</th>
	 <th>product</th>
	 </tr>
	 </thead>
	 <tbody>
	 <tr>
	 <?php
	 include("db.php");
	 
	 $result = mysqli_query($con,"SELECT ct.id as id,ct.name AS category_name, GROUP_CONCAT(pr.name) AS products FROM categories ct JOIN products pr WHERE ct.id=pr.id GROUP BY ct.id");
	 
	 while($test = mysqli_fetch_array($result))
	 {
	 $id = $test['id']; 
	 echo"<td>".$test['id']."</td>";
	 echo"<td>".$test['category_name']."</td>";
	 echo"<td>".$test['products']."</td>";
	 echo "</tr>";
	 }
	 mysqli_close($con);
	 ?>
	</table>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </body>
</html>
