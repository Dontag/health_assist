<?php 
Login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Health Assist</title>  
    <link rel="shortcut icon" href="assets/admin_page/dist/img/ico/favicon.png" type="image/x-icon">
    <link href="assets/admin_page/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/admin_page/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
    <link href="assets/admin_page/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <!-- Content Wrapper -->
    <div class="login-wrapper">
        <div class="back-link">
            <a href="index.html" class="btn btn-success">Back to Home</a>
        </div>
        <div class="container-center lg">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3>Patient Register</h3>
                            <small><strong>Please enter your data to register.</strong></small>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="signuppatient.php" id="loginForm" method="post">
                            <label>id:</label>
                            <br><br>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Firstname</label>
                                <input type="text" value="" id="firstName" class="form-control" name="firstName">
                                
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Lastname</label>
                                <input type="text" value="" id="lastName" class="form-control" name="lastName">
                                
                            </div>
                             <div class="form-group col-lg-6">
                                <label>Phone No:</label>
                                <input type="number" value="" id="phone" class="form-control" name="phone">
                                
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Username</label>
                                <input type="text" value="" id="username" class="form-control" name="username">
                                <span class="help-block small">Your unique username</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Password</label>
                                <input type="password" value="" id="password" class="form-control" name="password">
                                <span class="help-block small">Your hard to guess password</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="text" value="" id="emailid" class="form-control" name="emailId">
                                <span class="help-block small">Your address email to contact</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary">Register</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/admin_page/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="assets/admin_page/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>