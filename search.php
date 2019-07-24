<html>
<head>
	<?php include('includes/cdn.php'); ?>
</head>
<body>
	<div class="container" style="margin-top:20">
		<div class="jumbotron">
		  <h1 class="display-4"><i class="material-icons" style="font-size:100%;position:relatiove">search</i>Saved Details</h1>
		  <hr class="my-4">
			<nav aria-label="breadcrumb">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Search</li>
				  </ol>
			</nav>
		  <?php
		  
		  echo '
		  
		 <table class="table table-responsive table-bordered">
		  <thead>
			<tr>
			  <th scope="col">Seller Name</th>
			  <th scope="col">Address</th>
			  <th scope="col">Ciy</th>
			  <th scope="col">Phone no</th>
			  <th scope="col">Email</th>
			  <th scope="col">Vehicle make</th>
			  <th scope="col">Vehicle model</th>
			  <th scope="col">Vehicle year</th>
			  <th scope="col">JD power link</th>
			</tr>
		  </thead>
		  <tbody>
			';
			include('includes/db_con.php');
		  
			$query = 'select * from seller_info';
			$result = mysqli_query($conn, $query);
			if (mysqli_num_rows($result) > 0) 
			{
				$temp="";
				while($row = mysqli_fetch_row($result)) 
				{
					$temp.="<tr>";
					for($i=0;$i<count($row);$i++)
					{
						if($i==(count($row)-1))
						{
							$temp.='<td><a href='.$row[$i].' target="_blank">'.$row[$i].'</a></td>';
							continue;
						}
						$temp.='<td>'.$row[$i].'</td>';
					}
					$temp.="</tr>";
				}
			} 
			else 
			{
				echo "0 results";
			}
			
			echo $temp;
			echo '
			  </tbody>
			</table>
		  ';
		  
		  ?>
		 </div>
	</div>
</body>
</html>