<?php include 'config.php';?>
<?php echo "Hello mAN !";?>
<?php 
    if(isset($_POST['registerButton'])) {
        $username =mysql_real_escape_string($_POST["username"]);
        $password = mysql_real_escape_string($_POST["password"]);
        $password2 = mysql_real_escape_string($_POST["password2"]);
        $email = mysql_real_escape_string($_POST["email"]);
        $firstName = mysql_real_escape_string($_POST["firstName"]);
        $lastName = mysql_real_escape_string($_POST["lastName"]);
        $phoneNo = mysql_real_escape_string($_POST["phoneNo"]);
    
        if($password == $password2) {
            $password = md5($password);
            $qRegisterUser = "INSERT INTO patient(username, password, email, firstName, lastName, phoneNo) 
                                VALUES ('$username','$password','$email','$firstName','$lastName','$phoneNo')";
            mysqli_query($conn, $qRegisterUser);
        } else {
        }
    }
?>