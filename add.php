<html>
<head>
	<?php include('includes/cdn.php'); ?>
</head>
<body>
	<div class="container">
		<div class="jumbotron jumbotron-fluid" style="margin-top:10px">
			<div class="container">
				<h1 class="display-4"><i class="material-icons" style="font-size:100%">note_add</i>Add your car for sell</h1>
				<hr class="my-4">
				<nav aria-label="breadcrumb">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add</li>
					  </ol>
				</nav>
				<form action="add_complete.php" method="post" onSubmit="return subChk()">
					<div class="form-group">
						<label for="sellerName">Seller Name</label>
						<input type="text" class="form-control" id="sellerName" name="sellerName" placeholder="Abc Xyz">
					</div>
					
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-4">
						  <label for="city">City</label>
						  <input type="text" class="form-control" id="city" name="city" placeholder="Waterloo">
						</div>
						<div class="form-group col-md-4">
						  <label for="phno">Phone Number</label>
						  <input type="text" class="form-control" id="phno" name="phno" placeholder="123-123-1234"  onfocusout="phChk(this)">
						  <small id="phwar" class="text-warning"></small>
						</div>
						<div class="form-group col-md-4">
							<label for="email">Email address</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="xyz@abc.com">
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-4">
						  <label for="vmake">Vehicle Make</label>
						  <input type="text" class="form-control" id="vmake" name="vmake" placeholder="BMW">
						</div>
						<div class="form-group col-md-4">
						  <label for="vmodel">Vehicle Model</label>
						  <input type="text" class="form-control" id="vmodel" name="vmodel" placeholder="328i">
						</div>
						<div class="form-group col-md-4">
						  <label for="vyear">Vehicle Year</label>
						  <input type="number" class="form-control" id="vyear" name="vyear" placeholder="2012">
						</div>
					</div>
					  
					<button type="submit" class="btn btn-primary">Submit</button>
					
					<p class="text-warning" id="warning"></p>
				</form>
				
				<script>
					function phChk(obj)
					{
						var re = /(?:\d{3}|\(\d{3}\))([-\/\.])\d{3}\1\d{4}/;  
						//alert(obj.value);
						if(!re.exec(obj.value))
						{
							document.getElementById('phwar').innerHTML='Please enter valid phone no. ex.123-123-1234';
							obj.value=null;
						}
					}
					function subChk()
					{
						var sn = document.getElementById('sellerName').value;
						var add = document.getElementById('address').value;
						var cty = document.getElementById('city').value;
						var phno = document.getElementById('phno').value;
						var email = document.getElementById('email').value;
						var vmake = document.getElementById('vmake').value;
						var vmodel =  document.getElementById('vmodel').value;
						var vyear =  document.getElementById('vyear').value;
						
						if(sn=="" || add=="" || cty=="" || phno=="" || email=="" || vmake=="" || vmodel=="" || vyear=="")
						{
							document.getElementById('warning').innerHTML='Please fill all the details.';
							return false;
						}
					}
				</script>
			</div>
		</div>	
	</div>
</body>
</html>