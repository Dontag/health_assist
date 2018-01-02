<?php include 'dheader.php';?>
<?php




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
	<h1>Appointments</h1>
	<small> Appointment features</small>
	<ol class="breadcrumb hidden-xs">
		<li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
		<li class="active">Appointment</li>
	</ol>
</div>
</section>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-bd" data-index="0">
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>First Name</th>
									<th>Last Time</th>
									<th>Title</th>
									<th>Date</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
							<tr>
<?php
$queryAppointmentList = "SELECT patient.id, patient.firstName, patient.lastName, appointment.title, appointment.date, appointment.description, appointment.patientId FROM patient INNER JOIN appointment ON patient.id = appointment.patientId";
$getAppointmentList = $conn->query($queryAppointmentList);

if ($getAppointmentList->num_rows > 0) {
    while ($row = $getAppointmentList->fetch_assoc()) {
        echo  '<td>' . $row['firstName'] . '</td>'. '<td>' . $row['lastName'] . '</td>' . '<td>' . $row['title'] . '</td>'. '<td>' . $row['date'] . '</td>'. '<td>' . $row['description'] . '</td>';
    }
    
} else {
    echo "0 results";
}
?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<?php include 'dfooter.php';?>

