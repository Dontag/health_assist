<?php include 'config.php';?>
<?php 
    session_start();
    $username = ''; 
    $email = '';
    $password = '';
    $password2 = '';
    $firstName = '';
    $lastName = '';
    $errors = array();
    
    if(isset($_POST['registerPatientButton'])) {
        $username =mysqli_real_escape_string($conn,$_POST["username"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $password2 = mysqli_real_escape_string($conn,$_POST["password2"]);
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $firstName = mysqli_real_escape_string($conn,$_POST["firstName"]);
        $lastName = mysqli_real_escape_string($conn,$_POST["lastName"]);
        $phoneNo = mysqli_real_escape_string($conn,$_POST["phoneNo"]);
    
        if(empty($username)) {
            array_push($errors, "Username is required");
        }
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
        if(empty($email)) {
            array_push($errors, "Email is required");
        }
        
        if($password != $password2) {
            array_push($errors, "Passwords don't match");
        }
        
        if(count($errors) == 0) {
            $password = md5($password);
            $qRegisterUser = "INSERT INTO patient(username, password, email, firstName, lastName, phoneNo) 
                                VALUES ('$username','$password','$email','$firstName','$lastName','$phoneNo')";
            mysqli_query($conn, $qRegisterUser);
            
            $_SESSION['username'] = $username;
            $_SESSION['sucess'] = "You are logged in";
            $_SESSION['type'] = "P";
            header('location: dashboardPatient.php');
        }
    }
    
    if(isset($_POST['loginPatientButton'])) {
        $username =mysqli_real_escape_string($conn,$_POST["username"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        
        if(empty($username)) {
            array_push($errors, "Username is required");
        }
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
        
        if(count($errors) == 0) {
            $password = md5($password);
            
            $qValidate = "SELECT * from patient WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $qValidate);
            
            if(mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['sucess'] = "You are logged in";
                $_SESSION['type'] = "P";
                header('location: dashboardPatient.php');
            } else {
                array_push($errors, "The username/password is wrong!");
            }
        }
    }
    
    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username'], $_SESSION['type']);;
        header('location: index.html');
    }
?>