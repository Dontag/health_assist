<?php include 'pheader.php';?>
<?php
/*
 * $scheduleAppointment = "INSERT INTO `appointments` (`status`,`title`,`description`,`doctorId`) VALUES(0, )";
 * $result = $conn->query($doctorsList);
 */

?>

<div class="header-icon">
	<i class="fa fa-tachometer"></i>
</div>
<div class="header-title">
	<h1>Schedule Appointment</h1>
	<small> Schedule Your Appointment</small>
	<ol class="breadcrumb hidden-xs">
		<li><a href="index.html"><i class="pe-7s-home"></i>Home</a></li>
		<li class="active">Dashboard</li>
		<li class="active">Add Appointment</li>
	</ol>
</div>
</section>
<!-- Main content -->

<section class="content">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-bd" data-index="0">
				<div class="panel-body">
				 <div class="row">
                        	<?php include 'errors.php'?>
                        </div><br><br>
				<form action="scheduleAppointment.php" method="post">
					<input name="patientId" value="<?php $_SESSION['id'];?>"/>
					<input name="title" placeholder="Title" value="<?php $title;?>">
					<input name="description" placeholder="Describe" value="<?php $description;?>">
					<input class="btn btn-primary" type="submit" name="scheduleAnAppointment"/>
				</form>
					
				</div>
			</div>
		</div>
	</div>

</section>
<?php include 'pfooter.php'?>
