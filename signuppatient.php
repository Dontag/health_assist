<html>
<script type="text/javascript">
window.location.href = 'u-login.php';
</script>
</html>

<?php include 'config.php';?>

<?php 
$a = $_POST["firstName"];
$b = $_POST["lastName"];
$c = $_POST["phone"];
$d = $_POST["username"];
$e = $_POST["password"];
$f = $_POST["emailId"];


$sql = "INSERT INTO `patient` (`firstName`, `lastName`, `phoneNo`, `username`, `password`,`email`) VALUES ('$a', '$b', '$c', '$d', '$e','$f');";

if ($conn->query($sql) === TRUE) {
    echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
    echo "data is submitted! ";
} else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
 
?>