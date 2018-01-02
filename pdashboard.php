<?php include 'pheader.php';?>
<?php
$doctorsList = "SELECT id, firstName, lastName, placeName, email, phoneNo, fee, city, timingFrom, timingTo FROM doctor";
$result = $conn->query($doctorsList);
?>
<form action="index.html#" method="get"
	class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
	<div class="input-group">
		<input type="text" name="q" class="form-control"
			placeholder="Search..."> <span class="input-group-btn">
			<button type="submit" name="search" id="search-btn" class="btn">
				<i class="fa fa-search"></i>
			</button>
		</span>
	</div>
</form>
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
					<div class="table-responsive">
						<form method="post" action="scheduleAppointment.php">
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
    
    while ($row = $result->fetch_assoc()) {
        echo '<tr name="doc' . $row['id'] . '" value="' . $row['id'] . '">' . '<td>' . $row['firstName'] . '</td>' . '<td>' . $row['lastName'] . '</td>' . '<td>' . $row['placeName'] . '</td>' . '<td>' . $row['email'] . '</td>' . '<td>' . $row['phoneNo'] . '</td>' . '<td>' . $row['fee'] . '</td>' . '<td>' . $row['timingFrom'] . ' - ' . $row['timingTo'] . '</td>' . '<td>' . $row['city'] . '</td>'.
   
							'<td>
										<button type="button" class="btn btn-success md-trigger m-b-5 m-r-2"
											data-modal="modal-9">Schedule Appointment</button>
									</td>
									</tr>';
    }
} else {
    echo "0 results";
}
?>
								</tbody>
							</table>
							<!-- Modal 3D flip (vertical) effects -->
							<div class="md-modal md-effect-9" id="modal-9">
								<div class="md-content">
									<h3>Schedule Appointment</h3>
									<div class="n-modal-body">
										<p>Schedule an appointment with your doctor - </p>
										<input name="title" class="col-md-12" type="text" placeholder="Add Title" />
										<input name="description" class="col-md-12" type="text" placeholder="Add Description" style="height: 400px"/>
										 <?php
										while ($row = $result->fetch_assoc()) {
                                            echo '<a href="scheduleAppointment.php?doctorId='.$row['id'].'" type="submit" class="btn btn-success md-close">Submit</a>';
										}?>
									</div>
								</div>
							</div>

							<div class="md-overlay"></div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- /.content -->


	<?php include 'pfooter.php';?>