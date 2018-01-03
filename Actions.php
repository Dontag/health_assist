<?php include 'config.php';?>
<?php 
    session_start();
    $username = '';
    $email = '';
    $firstName = '';
    $lastName = '';
    $placeName = '';
    $city = '';
    $fee = '';
    $phoneNo = '';
    
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
            
            if(mysqli_num_rows($result) > 0) {
                $_SESSION['username'] = $username;
                $_SESSION['sucess'] = "You are logged in";
                $_SESSION['type'] = "P";
                header('location: dashboardPatient.php');
                echo isset($_SESSION['username']);
                
            } else {
                array_push($errors, "The username/password is wrong!");
            }
        }
    }
    
    
    
    if(isset($_POST['registerDoctorButton'])) {
        
        $username = mysqli_real_escape_string($conn,$_POST["username"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $password2 = mysqli_real_escape_string($conn,$_POST["password2"]);
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $firstName =mysqli_real_escape_string($conn,$_POST["firstName"]);
        $lastName = mysqli_real_escape_string($conn,$_POST["lastName"]);
        $placeName = mysqli_real_escape_string($conn,$_POST["placeName"]);
        $city = mysqli_real_escape_string($conn,$_POST["city"]);
        $fee = mysqli_real_escape_string($conn,$_POST["fee"]);
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
            echo $firstName;
            echo $lastName;
            echo $placeName;
            echo $city;
            echo $fee;
            echo $phoneNo;
            echo $email;
            echo $username;
            echo $password;
            echo $password2;
            
            $password = md5($password);
            $qRegisterDoctor = "INSERT INTO doctors (firstName, lastName, placeName, city, fee, phoneNo, email, username, password)
                                VALUES ('$firstName','$lastName','$placeName','$city','$fee','$phoneNo', $email, $username, $password)";
            mysqli_query($conn, $qRegisterDoctor);
            
            
            $_SESSION['username'] = $username;
            
            $_SESSION['sucess'] = "You are logged in";
            $_SESSION['type'] = "P";
            //header('location: dashboardDoctor.php');
        } else {
        }
    }
    
    if(isset($_POST['loginDoctorButton'])) {
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
            
            $qValidate = "SELECT * from doctors WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $qValidate);
            echo mysqli_num_rows($result);
            echo isset($_SESSION['username']);
            if(mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['sucess'] = "You are logged in";
                $_SESSION['type'] = "D";
                header('location: dashboardDoctor.php');
                echo isset($_SESSION['username']);
                
            } else {
                array_push($errors, "The username/password is wrong!");
            }
        }
    }
    
    if(isset($_GET['logout'])) {
        unset($_SESSION['username']);
    }
    
    
?>