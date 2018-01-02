<?php include 'dheader.php';?>
<?php
$doctorsList = "SELECT firstName, lastName, placeName, email, phoneNo, fee, city, timingFrom, timingTo FROM doctor";
$result = $conn->query($doctorsList);

?>
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
        echo '<tr>' . '<td>' . $row['firstName'] . '</td>' . '<td>' . $row['lastName'] . '</td>' . '<td>' . $row['placeName'] . '</td>' . '<td>' . $row['email'] . '</td>' . '<td>' . $row['phoneNo'] . '</td>' . '<td>' . $row['fee'] . '</td>' . '<td>' . $row['timingFrom'] . ' - ' . $row['timingTo'] . '</td>' . '<td>' . $row['city'] . '</td>';
    }
} else {
    echo "0 results";
}
?>
							<td><a class="btn btn-xs btn-success" href="forms_basic.html"> <i
									class="fa fa-plus"></i> Schedule Appointment
							</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- /.content -->


<?php include 'pfooter.php';?>