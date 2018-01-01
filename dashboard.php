<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thememinister Health Admin panel</title>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/admin_page/dist/img/ico/favicon.png" type="image/x-icon">
   <!-- Start Global Mandatory Style
   =====================================================================-->
   <!-- jquery-ui css -->
   <link href="assets/admin_page/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
   <!-- Bootstrap -->
   <link href="assets/admin_page/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <!-- Bootstrap rtl -->
   <!--<link href="assets/admin_page/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
   <!-- Lobipanel css -->
   <link href="assets/admin_page/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
   <!-- Pace css -->
   <link href="assets/admin_page/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
   <!-- Font Awesome -->
   <link href="assets/admin_page/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <!-- Pe-icon -->
   <link href="assets/admin_page/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
   <!-- Themify icons -->
   <link href="assets/admin_page/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
        <!-- End Global Mandatory Style
        =====================================================================-->
        <!-- Start page Label Plugins 
        =====================================================================-->
        <!-- Toastr css -->
        <link href="assets/admin_page/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
        <!-- Emojionearea -->
        <link href="assets/admin_page/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
        <!-- Monthly css -->
        <link href="assets/admin_page/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
        <!-- End page Label Plugins 
        =====================================================================-->
        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="assets/admin_page/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
        <!--<link href="assets/admin_page/admin_page/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- End Theme Layout Style
        =====================================================================-->
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header">
                <a href="index.html" class="logo"> <!-- Logo -->
                    <span class="logo-mini">
                        <!--<b>A</b>H-admin-->
                        <img src="assets/admin_page/dist/img/mini-logo.png" alt="">
                    </span>
                    <span class="logo-lg">
                        <!--<b>Admin</b>H-admin-->
                        <img src="assets/admin_page/dist/img/logo.png" alt="">
                    </span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top ">
                    <a href="index.html#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-tasks"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Orders -->
                            <li class="dropdown messages-menu">
                               <a href="index.html#" class="dropdown-toggle admin-notification" data-toggle="dropdown"> 
                                <i class="pe-7s-cart"></i>
                                <span class="label label-primary">5</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"><i class="fa fa-shopping-basket"></i> 4 Orders</li>
                                <li>
                                    <ul class="menu">
                                        <li ><!-- start Order -->
                                         <a href="index.html#" class="border-gray">
                                            <div class="pull-left">
                                                <img src="assets/admin_page/dist/img/stethescope.png" class="img-thumbnail" alt="User Image"></div>
                                                <h4>stethescope</h4>
                                                <p><strong>total item:</strong> 21
                                                </p>
                                            </a>     
                                        </li>
                                        <li>
                                            <a href="index.html#" class="border-gray">
                                                <div class="pull-left">
                                                    <img src="assets/admin_page/dist/img/nocontrol.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Nocontrol</h4>
                                                    <p><strong>total item:</strong> 11
                                                    </p>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href="index.html#" class="border-gray">
                                                    <div class="pull-left">
                                                        <img src="assets/admin_page/dist/img/lab.png" class="img-thumbnail" alt="User Image"></div>
                                                        <h4>lab</h4>
                                                        <p><strong>total item:</strong> 16
                                                        </p>
                                                    </a> 
                                                </li>
                                                <li class="nav-list">
                                                    <a href="index.html#" class="border-gray">
                                                        <div class="pull-left">
                                                            <img src="assets/admin_page/dist/img/therm.jpg" class="img-thumbnail" alt="User Image"></div>
                                                            <h4>Pressure machine</h4>
                                                            <p><strong>total item:</strong> 10
                                                            </p>
                                                        </a> 
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="footer"><a href="index.html#"> See all Orders <i class="fa fa-arrow-right"></i></a></li>
                                        </ul>
                                    </li>
                            <!-- Messages -->
                            <li class="dropdown messages-menu">
                                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-mail"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                
                                <ul class="dropdown-menu">
                                    <li class="header"><i class="fa fa-envelope-o"></i>
                                    4 Messages</li>
                                    <li>
                                        <ul class="menu">
                                            <li><!-- start message -->
                                               <a href="index.html#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/admin_page/dist/img/avatar2.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Alrazy</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right">11.00am</span>
                                                </a>       

                                            </li>
                                            <li>
                                                <a href="index.html#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/admin_page/dist/img/avatar4.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Tanjil</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right"> 12.00am</span>
                                                </a>       

                                            </li>
                                            <li>
                                                <a href="index.html#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/admin_page/dist/img/avatar3.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Jahir</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right"> 10.00am</span>
                                                </a>       

                                            </li>
                                            <li>
                                               <a href="index.html#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/admin_page/dist/img/avatar4.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Shawon</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right"> 09.00am</span>
                                                </a>       

                                            </li>
                                            <li>
                                                <a href="index.html#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/admin_page/dist/img/avatar3.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Shipon</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right"> 03.00pm</span>
                                                </a>       
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="index.html#">See all messages <i class=" fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Notifications -->
                            <li class="dropdown notifications-menu">
                                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-bell"></i>
                                    <span class="label label-warning">8</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header"><i class="fa fa-bell"></i> 8 Notifications</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                            <a href="index.html#" class="border-gray"><i class="fa fa-inbox"></i> Inbox  <span class=" label-success label label-default pull-right">9</span></a>
                                            </li>
                                            <li>
                                            <a href="index.html#" class="border-gray"><i class="fa fa-cart-plus"></i> New Order <span class=" label-success label label-default pull-right">3</span> </a>
                                            </li>
                                            <li>
                                            <a href="index.html#" class="border-gray"><i class="fa fa-money"></i> Payment Failed  <span class="label-success label label-default pull-right">6</span> </a>
                                            </li>
                                            <li>
                                            <a href="index.html#" class="border-gray"><i class="fa fa-cart-plus"></i> Order Confirmation <span class="label-success label label-default pull-right">7</span> </a>
                                            </li>
                                            <li>
                                            <a href="index.html#" class="border-gray"><i class="fa fa-cart-plus"></i> Update system status <span class=" label-success label label-default pull-right">11</span> </a>
                                            </li>
                                            <li>
                                            <a href="index.html#" class="border-gray"><i class="fa fa-cart-plus"></i> client update <span class="label-success label label-default pull-right">12</span> </a>
                                            </li>
                                            <li>
                                            <a href="index.html#" class="border-gray"><i class="fa fa-cart-plus"></i> shipment cancel 
                                            <span class="label-success label label-default pull-right">2</span> </a>
                                            </li>
                                        </ul>
                                    </li>
                                   <li class="footer">
                                   <a href="index.html#"> See all Notifications <i class=" fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Tasks -->
                            <li class="dropdown tasks-menu">
                                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-file"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header"><i class="fa fa-file"></i> 9 tasks</li>
                                    <li>
                                        <ul class="menu">
                                            <li> <!-- Task item -->
                                                <a href="index.html#">
                                                    <h3>
                                                        <i class="fa fa-check-circle"></i> Data table error
                                                        <span class="label-primary label label-default pull-right">35%</span>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="35%" style="width: 35%">
                                                            <span class="sr-only">35% Complete (primary)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li> <!-- end task item -->
                                            <li> <!-- Task item -->
                                                <a href="index.html#">
                                                    <h3>
                                                      <i class="fa fa-check-circle"></i>  Change theme color
                                                       <span class="label-success label label-default pull-right">55%</span>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="55%" style="width: 55%">
                                                            <span class="sr-only">55% Complete (primary)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li> <!-- end task item -->
                                            <li> <!-- Task item -->
                                                <a href="index.html#">
                                                    <h3>
                                                        <i class="fa  fa-check-circle"></i> Change the font-family 
                                                        <span class="label-info label label-default pull-right">60%</span>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="60%" style="width: 60%">
                                                            <span class="sr-only">60% Complete (info)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li> <!-- end task item -->
                                            <li> <!-- Task item -->
                                                <a href="index.html#">
                                                    <h3>
                                                       <i class="fa  fa-check-circle"></i> Animation should be skip
                                                       <span class="label-warning label label-default pull-right">80%</span>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="80%"  style="width: 80%">
                                                            <span class="sr-only">80% Complete (warning)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="index.html#">See all tasks <i class=" fa fa-arrow-right"></i></a></li>
                                </ul>

                            </li>
                            <!-- user -->
                            <li class="dropdown dropdown-user admin-user">
                                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"> 
                                <div class="user-image">
                                <img src="assets/admin_page/dist/img/avatar4.png" class="img-circle" height="40" width="40" alt="User Image">
                                </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.html"><i class="fa fa-users"></i> User Profile</a></li>
                                    <li><a href="index.html#"><i class="fa fa-gear"></i> Settings</a></li>
                                    <li><a href="login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- =============================================== -->
            <!-- Left side column. contains the sidebar -->
          <aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="image pull-left">
                            <img src="assets/admin_page/dist/img/avatar5.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="info">
                            <h4>Welcome</h4>
                            <p>Mr. Alrazy</p>
                        </div>
                    </div>
                   
                    <!-- sidebar menu -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html"><i class="fa fa-hospital-o"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                                <i class="fa fa-user-md"></i><span>Doctor</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="forms_basic.html">Add Doctor</a></li>
                                <li><a href="table.html">Doctor list</a></li>
                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                                <i class="fa fa-user"></i><span>Patient</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add-patient.html">Add patient</a></li>
                                <li><a href="pt-list.html">patient list</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                                <i class="fa fa-sitemap"></i><span>Department</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add-department.html">Add Department</a></li>
                                <li><a href="dep-list.html">Department list</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                                <i class="fa fa-list-alt"></i> <span>Schedule</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add-schedule.html">Add schedule</a></li>
                                <li><a href="sch-list.html">schedule list</a></li>
                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                                <i class="fa fa-check-square-o"></i><span>Appionment</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add-app.html">Add appoinemnt</a></li>
                                <li><a href="app-list.html">Appionment list</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                                <i class="fa fa-credit-card-alt"></i><span>payment</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add-payment.html">Add payment</a></li>
                                <li><a href="pay-list.html">payment list</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="index.html#">
                              <i class="fa fa-file-text"></i><span>Report</span>
                              <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="patient-wise-report.html">Patient wise Report</a></li>
                            <li><a href="doctor-wise-report.html">Doctor wise Report</a></li>
                            <li><a href="total-report.html">Total Report</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="widgets.html">
                            <i class="fa fa-user-circle-o"></i><span>Human Resources</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="add-emp.html">Add Employee</a></li>
                            <li><a href="emp-list.html">employee list</a></li>
                            <li><a href="add-ns.html">Add Nurse</a></li>
                            <li><a href="ns-list.html">Nurse list</a></li>
                            <li><a href="add-ph.html">Add pharmacist</a></li>
                            <li><a href="ph-list.html">pharmacist list</a></li>
                            <li><a href="add-rep.html">Add Representative</a></li>
                            <li><a href="rep-list.html">Representative list</a></li>
                            
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="index.html#">
                            <i class="fa fa-bed"></i><span>Bed Manager</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="add-bed.html">Add Bed</a></li>
                            <li><a href="bed-list.html">Bed list</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="index.html#">
                            <i class="fa fa-file-text-o"></i><span>Notice</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="add-notice.html">Add Notice</a></li>
                            <li><a href="not-list.html">Notice list</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="mailbox.html">
                         <i class="fa fa-envelope"></i><span> Mail</span>
                     </a>
                 </li>
                 <li>
                    <a href="widgets.html">
                        <i class="fa fa-shopping-bag"></i><span> Widgets</span> 
                    </a>
                </li>
                <li class="treeview">
                    <a href="index.html#">
                        <i class="fa fa-file-text"></i><span>pages</span>
                        <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="register.html">Sign up</a></li>
                        <li><a href="login.html">Sign in</a></li>
                        <li><a href="forget_password.html">Forget password</a></li>
                        <li><a href="lockscreen.html">Lockscreen</a></li>
                        <li><a href="404.html">404 Error</a></li>
                        <li><a href="505.html">505 Error</a></li>
                        <li><a href="blank.html">Blank Page</a></li>
                        <li><a href="profile.html">Profile page</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="index.html#">
                        <i class="fa fa-list-alt fw"></i><span> User Interface</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="calender.html">Calender</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="panels.html">Panels</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="tabs.html">Tabs & accordian</a></li>
                        <li><a href="icons_fontawesome.html">Icons</a></li>
                        <li><a href="notification.html">Notifications</a></li>
                        <li><a href="profile.html">Modals</a></li>
                        <li><a href="gridSystem.html">grid</a></li>
                        <li><a href="slider.html">slider</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="labels-badges-alerts.html">Badges</a></li>
                        <li><a href="progressbars.html">progress bar</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="modals.html">
                        <i class="fa fa-window-maximize"></i><span> Modals</span> 
                    </a>
                </li>
                
                <li class="treeview">
                    <a href="index.html#">
                        <i class="fa fa-columns"></i><span> Layout</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="layout_fixed.html">Fixed layout</a></li>
                        <li><a href="layout_boxed.html">Boxed layout</a></li>
                        <li><a href="layout_collapsed_sidebar.html">collapsed layout</a></li>
                    </ul>
                </li>                
            </ul>
        </div> <!-- /.sidebar -->
    </aside>
            <!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                     <form action="index.html#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                            <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>   
                    <div class="header-icon">
                        <i class="fa fa-tachometer"></i>
                    </div>
                    <div class="header-title">
                        <h1> Dashboard</h1>
                        <small> Dashboard features</small>
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </section>
            <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">15</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-users fa-2x"></i>
                                        <br><br>
                                        <h4>Today</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">19</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-users fa-2x"></i>
                                        <br><br>
                                        <h4>Past</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">05</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-user-circle fa-2x"></i>
                                        <br><br>
                                        <h4>Scheduled</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">9</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-users fa-2x"></i>
                                        <br><br>
                                        <h4>Attended</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </section> <!-- /.content -->

            </div> <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
                <strong>Copyright &copy; 2016-2017 <a href="index.html#">Thememinister</a>.</strong> All rights reserved.
            </footer>
        </div> <!-- ./wrapper -->
        <!-- ./wrapper -->
         <!-- Start Core Plugins
        =====================================================================-->
        <!-- jQuery -->
        <script src="assets/admin_page/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- jquery-ui --> 
        <script src="assets/admin_page/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="assets/admin_page/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- lobipanel -->
        <script src="assets/admin_page/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- Pace js -->
        <script src="assets/admin_page/plugins/pace/pace.min.js" type="text/javascript"></script>
        <!-- SlimScroll -->
        <script src="assets/admin_page/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="assets/admin_page/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- Hadmin frame -->
        <script src="assets/admin_page/dist/js/custom1.js" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- Toastr js -->
        <script src="assets/admin_page/plugins/toastr/toastr.min.js" type="text/javascript"></script>
        <!-- Sparkline js -->
        <script src="assets/admin_page/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
        <!-- Data maps js -->
        <script src="assets/admin_page/plugins/datamaps/d3.min.js" type="text/javascript"></script>
        <script src="assets/admin_page/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
        <script src="assets/admin_page/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
        <!-- Counter js -->
        <script src="assets/admin_page/plugins/counterup/waypoints.js" type="text/javascript"></script>
        <script src="assets/admin_page/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- ChartJs JavaScript -->
        <script src="assets/admin_page/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
        <script src="assets/admin_page/plugins/emojionearea/emojionearea.min.js" type="text/javascript"></script>
        <!-- Monthly js -->
        <script src="assets/admin_page/plugins/monthly/monthly.js" type="text/javascript"></script>
        <!-- Data maps -->
        <script src="assets/admin_page/plugins/datamaps/d3.min.js" type="text/javascript"></script>
        <script src="assets/admin_page/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
        <script src="assets/admin_page/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
      
        <!-- End Page Lavel Plugins
        =====================================================================-->
        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="assets/admin_page/dist/js/custom.js" type="text/javascript"></script>

        <!-- End Theme label Script
        =====================================================================-->
         <script>
                "use strict"; // Start of use strict
                // notification
                setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 1000
                    };
                    toastr.success('Hi Everyone !', 'Welcome to Health Assist');

                }, 1300);

                //counter
                $('.count-number').counterUp({
                    delay: 10,
                    time: 5000
                });

                //data maps
                var basic_choropleth = new Datamap({
                    element: document.getElementById("map1"),
                    projection: 'mercator',
                    fills: {
                        defaultFill: "#009688",
                        authorHasTraveledTo: "#fa0fa0"
                    },
                    data: {
                        USA: {fillKey: "authorHasTraveledTo"},
                        JPN: {fillKey: "authorHasTraveledTo"},
                        ITA: {fillKey: "authorHasTraveledTo"},
                        CRI: {fillKey: "authorHasTraveledTo"},
                        KOR: {fillKey: "authorHasTraveledTo"},
                        DEU: {fillKey: "authorHasTraveledTo"}
                    }
                });

                var colors = d3.scale.category10();

                window.setInterval(function () {
                    basic_choropleth.updateChoropleth({
                        USA: colors(Math.random() * 10),
                        RUS: colors(Math.random() * 100),
                        AUS: {fillKey: 'authorHasTraveledTo'},
                        BRA: colors(Math.random() * 50),
                        CAN: colors(Math.random() * 50),
                        ZAF: colors(Math.random() * 50),
                        IND: colors(Math.random() * 50)
                    });
                }, 2000);

        //bar chart
                var ctx = document.getElementById("barChart");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [65, 59, 80, 81, 56, 55, 40, 25, 35, 51, 94, 16],
                                borderColor: "#009688",
                                borderWidth: "0",
                                backgroundColor: "#009688"
                            },
                            {
                                label: "My Second dataset",
                                data: [28, 48, 40, 19, 86, 27, 90, 91, 41, 25, 34, 47],
                                borderColor: "#009688",
                                borderWidth: "0",
                                backgroundColor: "#009688"
                            }
                        ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                        }
                    }
                });
                      //radar chart
                var ctx = document.getElementById("radarChart");
                var myChart = new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [65, 59, 66, 45, 56, 55, 40],
                                borderColor: "#00968866",
                                borderWidth: "1",
                                backgroundColor: "rgba(0, 150, 136, 0.35)"
                            },
                            {
                                label: "My Second dataset",
                                data: [28, 12, 40, 19, 63, 27, 87],
                                borderColor: "rgba(55, 160, 0, 0.7",
                                borderWidth: "1",
                                backgroundColor: "rgba(0, 150, 136, 0.35)"
                            }
                        ]
                    },
                    options: {
                        legend: {
                            position: 'top'
                        },
                        scale: {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Message
                $('.message_inner').slimScroll({
                    size: '3px',
                    height: '320px'
                });

                //emojionearea
                $(".emojionearea").emojioneArea({
                    pickerPosition: "top",
                    tonesStyle: "radio"
                });

                //monthly calender
                $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });
            
            
             //line chart
                var ctx = document.getElementById("lineChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [
                            {
                                label: "My First dataset",
                                borderColor: "rgba(0,0,0,.09)",
                                borderWidth: "1",
                                backgroundColor: "rgba(0,0,0,.07)",
                                data: [22, 44, 67, 43, 76, 45, 12, 45, 65, 55, 42, 61, 73]
                            },
                            {
                                label: "My Second dataset",
                                borderColor: "#009688",
                                borderWidth: "1",
                                backgroundColor: "#009688",
                                pointHighlightStroke: "#009688",
                                data: [16, 32, 18, 26, 42, 33, 44, 24, 19, 16, 67, 71, 65]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });


        </script>

    </body>
</html>