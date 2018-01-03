<?php include 'pheader.php';?>

<?php
$doctorsList = "SELECT id, firstName, lastName, placeName, email, phoneNo, fee, city FROM doctor";
$result = $conn->query($doctorsList);
?>

<div class="header-icon">
	<i class="fa fa-tachometer"></i>
</div>
<div class="header-title">
	<h1>Dashboard</h1>
	<small> Dashboard features</small>
	<ol class="breadcrumb hidden-xs">
		<li><a href="index.html"><i class="pe-7s-home"></i>Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</div>
</section>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="dataTables_length">
				<div class="input-group custom-search-form">
					<input type="search" class="form-control"
						placeholder="Search for doctors.."> <span class="input-group-btn">
						<button class="btn btn-primary" type="button">
							<span class="fa fa-search"></span>
						</button>
					</span>
				</div>
				<!-- /input-group -->
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-bd" data-index="0">
				<div class="panel-body">
					<div class="table-responsive"  ng-controller="myController">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Department</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Price</th>
										<th>Timing</th>
										<th>City</th>
										<th>Scheduler</th>
									</tr>
								</thead>
								
								<tbody>
	<?php 
	
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<tr> <td>".$row["firstName"] . "</td> </tr>";
	    }
	} else {
	    echo "0 results";
	}
	
	
	?>
								</tbody>
							</table>
					</div>
				</div>
			</div>
	</div>
</div>


	<!-- /.content -->

	<?php include 'pfooter.php';?>