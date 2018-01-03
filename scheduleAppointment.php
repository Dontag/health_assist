<?php include 'pheader.php';?>
<?php 

$doctorId = $_GET['doctorId']; 
echo $doctorId;
/* $scheduleAppointment = "INSERT INTO `appointments` (`status`,`title`,`description`,`doctorId`) VALUES(0, )";
$result = $conn->query($doctorsList); */


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

<?php include 'pfooter.php'?>
