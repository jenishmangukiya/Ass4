<?php
	if(!isset($_POST['sellerName']))
	{
		header("location:index.php");
	}
?>
<html>
<head>
	<?php include('includes/cdn.php'); ?>
</head>
<body>
	<div class="container" style="margin-top:10px">
		<div class="jumbotron">
		  <h1 class="display-4">Thank you</h1>
		  <hr class="my-4">
		  <nav aria-label="breadcrumb">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Thank You</li>
					  </ol>
			</nav>
		  <?php
		  $jd_link = 'http://www.jdpower.com/cars/'.$_POST['vmake'].'/'.$_POST['vmodel'].'/'.$_POST['vyear'];
		  echo '
		  <h5><b>Seller name: </b>'.$_POST['sellerName'].'</h5>
		  <h5><b>Address: </b>'.$_POST['address'].'</h5>
		  <h5><b>City: </b>'.$_POST['city'].'</h5>
		  <h5><b>Phone no.: </b>'.$_POST['phno'].'</h5>
		  <h5><b>Email address: </b>'.$_POST['email'].'</h5>
		  <h5><b>Vehicle make: </b>'.$_POST['vmake'].'</h5>
		  <h5><b>Vehicle model: </b>'.$_POST['vmodel'].'</h5>
		  <h5><b>Vehicle year: </b>'.$_POST['vyear'].'</h5>
		  <h5><a href="'.$jd_link.'" target="_blank">JD Power link</a></h5>
		  
		  ';
		  
		  include('includes/db_con.php');
		  
		  $query = 'insert into seller_info values("'.$_POST['sellerName'].'","'.$_POST['address'].'","'.$_POST['city'].'","'.$_POST['phno'].'","'.$_POST['email'].'","'.$_POST['vmake'].'","'.$_POST['vmodel'].'","'.$_POST['vyear'].'","'.$jd_link.'")';
		  
			if (mysqli_query($conn, $query)) {
				echo "<div class='alert alert-primary' role='alert'>Your data has been saved in our system!</div>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);
		  ?>
		</div>
	</div>
</body>
</html>