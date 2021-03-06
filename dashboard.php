<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/pick_drop.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>PICK & DROP</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />


        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet"/>

        <!--  Light Bootstrap Table core CSS    -->
        <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="assets/css/demo.css" rel="stylesheet" />


        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    </head>

    <style>
        .error{
            display:none;
        }
        .alert-inner{
            display:none;
        }
        .dashboard{
            display:all;
        }
        .actions{
            display: none;
        }
        /*#settings-tab, .settings-user-account{
                display: none;
        }*/
    </style>
    <body>
        <script type="text/javascript">

        </script>
        <div class="wrapper">
            <?php //include 'side_nav.php'; 
            ?>
            <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

                <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="http://www.creative-tim.com" class="simple-text">
                            <img src="assets/img/faces/face-6.jpg"/ style="width: 100px; height: 100px; border-radius: 50px;">
                                 Creative Tim
                        </a>
                    </div>

                    <ul class="nav">
                        <li>
                            <a href="">
                                <i class="pe-7s-bell"></i>
                                <p>NOTIFICATIONS</p>
                            </a>
                        </li>
                        <div class="col-xs-12">
                            <div class="alert alert-danger" data-notify="container">
                                <span><b>10</b> devices not turned on today</span>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="alert alert-info" data-notify="container">

                                <span><strong>24</strong> New schedules today</span>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="alert alert-success" data-notify="container">
                                <span> Driver UAX208B is online</span>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="alert alert-danger" data-notify="container">
                                <span>Driver UBA208Y is offline</span>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="alert alert-warning" data-notify="container">
                                <span>10 children not going to school today</span>
                            </div>
                        </div>
                        <!-- </li> -->

                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <nav class="navbar navbar-default navbar-fixed">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Dashboard</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-left">
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#">
                                        <p>Log out</p>
                                    </a>
                                </li>
                                <li class="separator hidden-lg hidden-md"></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="content">
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="nav-tabs-custom">
                                    <div class="card">
                                        <ul class="nav nav-tabs" style="background:#555; " id="myTab">
                                            <li class="active"><a href="#admin" data-toggle="tab" ><i class="fa fa-user"></i>Administrator</a></li>
                                            <li><a href="#driver" data-toggle="tab"><i class="fa fa-car"></i>Driver</a></li>
                                            <li><a href="#parent" data-toggle="tab"><i class="fa fa-user"></i>Parent</a></li>
                                            <li><a href="#child" data-toggle="tab"><i class="fa fa-child"></i>Child</a></li>
                                            <li><a href="#settings" data-toggle="tab"><i class="fa fa-cog"></i>Settings</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <!-- Font Awesome Icons -->
                                            <div class="tab-pane active" id="admin">

                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="nav-tabs-custom">
                                                            <ul class="nav nav-tabs">
                                                                <li class="active"><a href="#admin-new-user" data-toggle="tab"><i class="fa fa-user"></i>New user</a></li>
                                                                <!--<li><a href="#admin-routes" data-toggle="tab"><i class="fa fa-map-marker"></i>Routes</a></li>-->
                                                                <li><a href="#admin-reports" data-toggle="tab"><i class="fa fa-dollar"></i>Transactions</a></li>
                                                                <!-- <li><a href="#admin-settings" data-toggle="tab"><i class="fa fa-cog"></i>Settings</a></li> -->
                                                            </ul>
                                                            <div class="tab-content">
                                                                <!-- Font Awesome Icons -->
                                                                <div class="tab-pane active" id="admin-new-user">
                                                                    <div class="col-md-6" id="admin-form">
                                                                        <div class="header">
                                                                            <h4 class="title">New Administrator</h4>
                                                                        </div>
                                                                        <div class="alert alert-inner alert-success alert-with-icon" id="admin-notify" data-notify="container">
                                                                        </div>
                                                                        <!-- <form id="admin-form" action="" method=""> -->
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputText">First Name</label>
                                                                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name">
                                                                                <label class="error" id="fname_error" for="fname">This field is required</label>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputText">Last Name</label>
                                                                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter other name">
                                                                                <label class="error" id="lname_error" for="lname">This field is required</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputText">Telephone</label>
                                                                                <input type="text" class="form-control" id="tel" name="tel" placeholder="Enter telephone number">
                                                                                <label class="error" id="tel_error" for="tel">This field is required</label>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputEmail4">Email</label>
                                                                                <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter email address">
                                                                                <label class="error" id="mail_error" for="mail">This field is required</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputState">User type</label>
                                                                                <select id="user" class="form-control select2-dropdown" name="user">
                                                                                    <option >Choose...</option>
                                                                                    <option value="1">Administrator</option>
                                                                                    <option value="2">User</option>
                                                                                </select>
                                                                                <label class="error" id="user_error" for="user">This field is required</label>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputState">School</label>
                                                                                <select id="userschool" class="school form-control">
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputText">Username</label>
                                                                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                                                                <label class="error" id="username_error" for="username">This field is required</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputText">Password</label>
                                                                                <input type="password" class="form-control" id="password" name="userpassword" placeholder="Type password">
                                                                                <label class="error" id="password_error" for="password">This field is required</label>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputEmail4">Password again</label>
                                                                                <input type="password" class="form-control" id="password" name="userpassword2" placeholder="Retype password">
                                                                                <label class="error" id="password_error" for="password">This field is required</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" form-row">
                                                                            <div class="form-group col-md-3 pull-left"><button type="submit" name="submitAdmin" id="submit" class="btn btn-default">Register</button></div>
                                                                            <div class="form-group col-md-3 pull-right"><input type="reset" value="Cancel" name="cancel" id="reset" class="btn btn-default "/></div>
                                                                        </div>
                                                                        <!-- </form> -->

                                                                    </div>
                                                                    <div class="col-md-6 ">
                                                                        <div class="header">
                                                                            <h4 class="title">Available Administrators</h4>
                                                                        </div>

                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-bordered" >
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>Telephone</th>
                                                                                <th>Email</th>
                                                                                </thead>
                                                                                <tbody id="admin-data">
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane " id="admin-reports">
                                                                    <div class="header">
                                                                        <h4 class="title">Transaction History</h4>
                                                                    </div>
                                                                    <form>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-4 datepicker-days">
                                                                                <input type="date" class="form-control" />
                                                                            </div>
                                                                            <div class="form-group col-md-4 datepicker-days">
                                                                                <input type="date" class="form-control" />
                                                                            </div>
                                                                            <div class="form-group col-md-3 pull-left"><input type="submit" value="Go" class="btn btn-default"/></div>
                                                                        </div>
                                                                    </form>

                                                                    <div class="col-md-12 ">

                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-striped">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name </th>
                                                                                <th>Travel trips</th>
                                                                                <th>Amount</th>
                                                                                <th>Cash</th>
                                                                                <th>Balance</th>
                                                                                <th>Action</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Dakota Rice</td>
                                                                                        <td>$36,738</td>
                                                                                        <td>Niger</td>
                                                                                        <td>Oud-Turnhout</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /#admin -->
                                            <div class="tab-pane" id="driver">

                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="nav-tabs-custom">
                                                            <ul class="nav nav-tabs">
                                                                <li class="active"><a href="#driver-new-user" data-toggle="tab"><i class="fa fa-user"></i>New Driver</a></li>
                                                                <!--<li><a href="#admin-routes" data-toggle="tab"><i class="fa fa-map-marker"></i>Routes</a></li>-->
                                                                <li><a href="#driver-reports" data-toggle="tab"><i class="fa fa-file"></i>Reports</a></li>
                                                                <!-- <li><a href="#driver-settings" data-toggle="tab"><i class="fa fa-cog"></i>Settings</a></li> -->
                                                            </ul>
                                                            <div class="tab-content">
                                                                <!-- Font Awesome Icons -->
                                                                <div class="tab-pane active" id="driver-new-user">
                                                                    <div class="col-md-6">
                                                                        <div class="header">
                                                                            <h4 class="title">New Driver</h4>
                                                                        </div>
                                                                        <div class="alert alert-inner alert-success alert-with-icon" id="driver-notify" data-notify="container">
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputText">First Name</label>
                                                                                <input type="text" class="form-control" id="drvfname" name="fname" placeholder="Enter first name">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputText">Last Name</label>
                                                                                <input type="text" class="form-control" id="drvlname" name="lname" placeholder="Enter other name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputText">Telephone</label>
                                                                                <input type="text" class="form-control" id="drvtel" name="tel" placeholder="Enter telephone number">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputText">License number</label>
                                                                                <input type="text" class="form-control" id="drvpermit" name="permit" placeholder="Enter driver's permit number">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputText">Vehicle Registration</label>
                                                                                <input type="text" class="form-control" id="drvcarnumber" name="carnumber" placeholder="Enter vehicle number plate">
                                                                            </div>
                                                                        </div>
                                                                        <div class=" form-row">
                                                                            <div class="form-group col-md-3 pull-left"><input type="submit" value="Register" class="btn btn-default" id="drv_submit" name="submit" /></div>
                                                                            <div class="form-group col-md-3 pull-right"><input type="reset" value="Cancel" class="btn btn-default "/></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 ">
                                                                        <div class="header">
                                                                            <h4 class="title">Registered Drivers</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-bordered">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>Telephone</th>
                                                                                <th>Vehicle Number</th>
                                                                                <th>Action</th>
                                                                                </thead>
                                                                                <tbody id="driver-data">

                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane " id="driver-reports">
                                                                    <div class="col-md-12 ">
                                                                        <div class="header">
                                                                            <h4 class="title">Drivers Travel Reports</h4>
                                                                        </div>
                                                                        <form>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-4 datepicker-days">
                                                                                    <input type="date" class="form-control" />
                                                                                </div>
                                                                                <div class="form-group col-md-4 datepicker-days">
                                                                                    <input type="date" class="form-control" />
                                                                                </div>
                                                                                <div class="form-group col-md-3 pull-left"><input type="submit" value="Go" class="btn btn-default"/></div>
                                                                            </div>
                                                                        </form>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-striped">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Vehicle Number</th>
                                                                                <th>Driver</th>
                                                                                <th>Route</th>
                                                                                <th>Trip count</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>6</td>
                                                                                        <td>Mason Porter</td>
                                                                                        <td>$78,615</td>
                                                                                        <td>Chile</td>
                                                                                        <td>Gloucester</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- #driver-->

                                            <div class="tab-pane" id="parent">

                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="nav-tabs-custom">
                                                            <ul class="nav nav-tabs">
                                                                <li class="active"><a href="#parent-new" data-toggle="tab"><i class="fa fa-user"></i>New Parent</a></li>
                                                                <li ><a href="#parent-register" data-toggle="tab"><i class="fa fa-users"></i>Registered Parent</a></li>
                                                                <!-- <li><a href="#admin-routes" data-toggle="tab"><i class="fa fa-map-marker"></i>Routes</a></li>
                                                                <li><a href="#admin-reports" data-toggle="tab"><i class="fa fa-file"></i>Reports</a></li>
                                                                <li><a href="#admin-settings" data-toggle="tab"><i class="fa fa-cog"></i>Settings</a></li >-->
                                                            </ul>
                                                            <div class="tab-content">
                                                                <!-- Font Awesome Icons -->
                                                                <div class="tab-pane active" id="parent-new">
                                                                    <div class="col-md-6">
                                                                        <div class="header">
                                                                            <h4 class="title">New Parent</h4>
                                                                        </div>
                                                                        <div class="alert alert-inner alert-success alert-with-icon" id="parent-notify" data-notify="container">
                                                                        </div>
                                                                        <!-- <form> -->
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputText">First Name</label>
                                                                                <input type="text" class="form-control" id="pfname" placeholder="Enter first name">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputText">Last Name</label>
                                                                                <input type="text" class="form-control" id="plname" placeholder="Enter other name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputText">Telephone</label>
                                                                                <input type="text" class="form-control" id="ptel" placeholder="Enter telephone number">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputEmail4">Email</label>
                                                                                <input type="email" class="form-control" id="pmail" placeholder="Enter email address">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-4">
                                                                                <label for="inputState">District</label>
                                                                                <select id="pdistrict" class="district form-control">
                                                                                    <option>Choose...</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <label for="inputState">Division</label>
                                                                                <select id="pdivision" class="division form-control">
                                                                                    <option>Choose...</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <label for="inputState">Cell/Village</label>
                                                                                <select id="pvillage" class="cell form-control">
                                                                                    <option>Choose...</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" form-row">
                                                                            <div class="form-group col-md-3 pull-left"><input type="submit" id="psubmit" value="Register" class="btn btn-default"/></div>
                                                                            <div class="form-group col-md-3 pull-right"><input type="reset" value="Cancel" class="btn btn-default "/></div>
                                                                        </div>
                                                                        <!-- </form> -->
                                                                    </div>
                                                                    <div class="col-md-6 ">
                                                                        <div class="header">
                                                                            <h4 class="title">Registered Parents</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-bordered">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>Telephone</th>
                                                                                <th>Email</th>
                                                                                <th>Children</th>
                                                                                </thead>
                                                                                <tbody id="parent-data">

                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="parent-register">
                                                                    
                                                                    <div class="col-md-12 ">
                                                                        <div class="header">
                                                                            <h4 class="title">Registered Parents</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-bordered">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>Telephone</th>
                                                                                <th>Email</th>
                                                                                <th>Children</th>
                                                                                </thead>
                                                                                <tbody id="parent-data">

                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /#parents-->
                                            <div class="tab-pane" id="child">

                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="nav-tabs-custom">
                                                            <ul class="nav nav-tabs">
                                                                <li class="active"><a href="#child-new-user" data-toggle="tab"><i class="fa fa-user"></i>New Child</a></li>
                                                                <li><a href="#child-schedules" data-toggle="tab"><i class="fa fa-calendar"></i>Schedules</a></li>
                                                                <li><a href="#child-routes" data-toggle="tab"><i class="fa fa-map-marker"></i>Route logs</a></li>
                                                                <li><a href="#child-accounts" data-toggle="tab"><i class="fa fa-dollar"></i>Transactions</a></li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <!-- Font Awesome Icons -->
                                                                <div class="tab-pane active" id="child-new-user">
                                                                    <div class="col-md-6">
                                                                        <div class="header">
                                                                            <h4 class="title">New Child</h4>
                                                                        </div>
                                                                        <div class="alert alert-inner alert-success alert-with-icon" id="child-notify" data-notify="container">
                                                                        </div>
                                                                        <!-- <form> -->
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputText">First Name</label>
                                                                                <input type="text" class="form-control" id="chfname" placeholder="Enter first name">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputText">Last Name</label>
                                                                                <input type="text" class="form-control" id="chlname" placeholder="Enter other name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputState">School</label>
                                                                                <select id="childschool" class="school form-control">
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputState">class</label>
                                                                                <select id="chclass" class="level form-control">
                                                                                    <option>Choose...</option>
                                                                                    <option value="1">Reception</option>
                                                                                    <option value="2">Junior Kindergarten</option>
                                                                                    <option value="3">Senior Kindergarten</option>
                                                                                    <option value="4">P.1</option>
                                                                                    <option value="5">P.2</option>
                                                                                    <option value="6">P.3</option>
                                                                                    <option value="7">P.4</option>
                                                                                    <option value="8">P.5</option>
                                                                                    <option value="9">P.6</option>
                                                                                    <option value="10">P.7</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputState">Parent</label>
                                                                                <select id="childparent" class="chparent form-control">
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-4">
                                                                                <label for="inputState">District</label>
                                                                                <select id="chdistrict" class="district form-control">
                                                                                    <option>Choose...</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <label for="inputState">Division</label>
                                                                                <select id="chdivision" class="division form-control">
                                                                                    <option>Choose...</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <label for="inputState">Cell/Village</label>
                                                                                <select id="chvillage" class="cell form-control">
                                                                                    <option>Choose...</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" form-row">
                                                                            <div class="form-group col-md-3 pull-left"><input type="submit" value="Register" class="btn btn-default" id="chsubmit" /></div>
                                                                            <div class="form-group col-md-3 pull-right"><input type="reset" value="Cancel" class="btn btn-default "/></div>
                                                                        </div>
                                                                        <!-- </form> -->
                                                                    </div>
                                                                    <div class="col-md-6 ">
                                                                        <div class="header">
                                                                            <h4 class="title">Registered Children</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-bordered">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>School</th>
                                                                                <th>class</th>
                                                                                <th>Residence</th>
                                                                                </thead>
                                                                                <tbody class="child-data">
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane " id="child-schedules">
                                                                    <div class="col-md-12">
                                                                        <div class="header">
                                                                            <h4 class="title">Available Schedules</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-striped">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>Date</th>
                                                                                <th>Trip type</th>
                                                                                <th>Pickup</th>
                                                                                <th>Destination</th>
                                                                                <th>Driver</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Dakota Rice</td>
                                                                                        <td>$36,738</td>
                                                                                        <td>Niger</td>
                                                                                        <td>Oud-Turnhout</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane " id="child-routes">
                                                                    <div class="col-md-12 ">
                                                                        <div class="header">
                                                                            <h4 class="title">Transaction History</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-striped">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>School</th>
                                                                                <th>Fare</th>
                                                                                <th>Period</th>
                                                                                <th>Total</th>
                                                                                <th>Cash</th>
                                                                                <th>Balance</th>
                                                                                <th>Action</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Dakota Rice</td>
                                                                                        <td>$36,738</td>
                                                                                        <td>Niger</td>
                                                                                        <td>Oud-Turnhout</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2</td>
                                                                                        <td>Minerva Hooper</td>
                                                                                        <td>$23,789</td>
                                                                                        <td>Curaçao</td>
                                                                                        <td>Sinaai-Waas</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>3</td>
                                                                                        <td>Sage Rodriguez</td>
                                                                                        <td>$56,142</td>
                                                                                        <td>Netherlands</td>
                                                                                        <td>Baileux</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>4</td>
                                                                                        <td>Philip Chaney</td>
                                                                                        <td>$38,735</td>
                                                                                        <td>Korea, South</td>
                                                                                        <td>Overland Park</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>5</td>
                                                                                        <td>Doris Greene</td>
                                                                                        <td>$63,542</td>
                                                                                        <td>Malawi</td>
                                                                                        <td>Feldkirchen in Kärnten</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>6</td>
                                                                                        <td>Mason Porter</td>
                                                                                        <td>$78,615</td>
                                                                                        <td>Chile</td>
                                                                                        <td>Gloucester</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane " id="child-accounts">
                                                                    <div class="col-md-12 ">
                                                                        <div class="header">
                                                                            <h4 class="title">Transaction History</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-striped">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>School</th>
                                                                                <th>Fare</th>
                                                                                <th>Period</th>
                                                                                <th>Total</th>
                                                                                <th>Cash</th>
                                                                                <th>Balance</th>
                                                                                <th>Action</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Dakota Rice</td>
                                                                                        <td>$36,738</td>
                                                                                        <td>Niger</td>
                                                                                        <td>Oud-Turnhout</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2</td>
                                                                                        <td>Minerva Hooper</td>
                                                                                        <td>$23,789</td>
                                                                                        <td>Curaçao</td>
                                                                                        <td>Sinaai-Waas</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>3</td>
                                                                                        <td>Sage Rodriguez</td>
                                                                                        <td>$56,142</td>
                                                                                        <td>Netherlands</td>
                                                                                        <td>Baileux</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>4</td>
                                                                                        <td>Philip Chaney</td>
                                                                                        <td>$38,735</td>
                                                                                        <td>Korea, South</td>
                                                                                        <td>Overland Park</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>5</td>
                                                                                        <td>Doris Greene</td>
                                                                                        <td>$63,542</td>
                                                                                        <td>Malawi</td>
                                                                                        <td>Feldkirchen in Kärnten</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>6</td>
                                                                                        <td>Mason Porter</td>
                                                                                        <td>$78,615</td>
                                                                                        <td>Chile</td>
                                                                                        <td>Gloucester</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /#child -->
                                            <div class="tab-pane" id="settings">

                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="nav-tabs-custom">
                                                            <ul class="nav nav-tabs">
                                                                <li class="active" id="settings-tab"><a href="#settings-user-account" data-toggle="tab"><i class="fa fa-lock"></i>Administrator</a></li>
                                                                <li id="settings-tab"><a href="#settings-driver" data-toggle="tab"><i class="fa fa-car"></i>Driver</a></li>
                                                                <li id="settings-tab"><a href="#settings-parent" data-toggle="tab"><i class="fa fa-user"></i>Parent</a></li>
                                                                <li id="settings-tab"><a href="#settings-child" data-toggle="tab"><i class="fa fa-child"></i>Child</a></li>
                                                                <li id="settings-tab"><a href="#settings-route" data-toggle="tab"><i class="fa fa-map-marker"></i>Route</a></li>
                                                                <li id="settings-tab"><a href="#settings-finance" data-toggle="tab"><i class="fa fa-dollar"></i>Finance</a></li>
                                                                <li id="settings-tab"><a href="#settings-system" data-toggle="tab"><i class="fa fa-cogs"></i>System</a></li>

                                                            </ul>
                                                            <div class="tab-content">
                                                                <!-- Font Awesome Icons -->
                                                                <div class="tab-pane active" id="settings-user-account">
                                                                    <div class="col-md-12 actions">
                                                                        <div class="alert alert-inner alert-info alert-with-icon" id="village-notify" data-notify="container">
                                                                            <div class="header">
                                                                                <h4 class="title text-center"><i class="pe-7s-bell"></i> NOTIFICATION </h4>
                                                                            </div>
                                                                            <span data-notify="message" class="">Registration Successful</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="header">
                                                                            <h4 class="title">User Accounts Settings</h4>
                                                                        </div>
                                                                        <div class="alert alert-inner alert-success alert-with-icon" id="user-setting-notify" data-notify="container">
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-default">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>Telephone</th>
                                                                                <th>Email</th>
                                                                                <th>Action</th>
                                                                                </thead>
                                                                                <tbody class="user-accounts">
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane " id="settings-driver">
                                                                    <div class="col-md-12 ">
                                                                        <div class="header">
                                                                            <h4 class="title">Driver Accounts Settings</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-default">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>Telephone</th>
                                                                                <th>Vehicle Number</th>
                                                                                <th>License Number</th>
                                                                                <th>Action</th>
                                                                                </thead>
                                                                                <tbody class="driver-data">

                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane " id="settings-parent">
                                                                    <div class="col-md-12 ">
                                                                        <div class="header">
                                                                            <h4 class="title">Parent Account Settings</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-default">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>Telephone</th>
                                                                                <th>Email</th>
                                                                                <th>Residence</th>
                                                                                <th>Action</th>
                                                                                </thead>
                                                                                <tbody class="parent-account-data">
                                                                                    
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane " id="settings-child">
                                                                    <div class="col-md-12">
                                                                        <div class="header">
                                                                            <h4 class="title">Child settings</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-striped">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>Salary</th>
                                                                                <th>Country</th>
                                                                                <th>City</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Dakota Rice</td>
                                                                                        <td>$36,738</td>
                                                                                        <td>Niger</td>
                                                                                        <td>Oud-Turnhout</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2</td>
                                                                                        <td>Minerva Hooper</td>
                                                                                        <td>$23,789</td>
                                                                                        <td>Curaçao</td>
                                                                                        <td>Sinaai-Waas</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane " id="settings-route">
                                                                    <div class="col-md-12">
                                                                        <div class="header">
                                                                            <h4 class="title">Route settings</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-striped">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>Salary</th>
                                                                                <th>Country</th>
                                                                                <th>City</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Dakota Rice</td>
                                                                                        <td>$36,738</td>
                                                                                        <td>Niger</td>
                                                                                        <td>Oud-Turnhout</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2</td>
                                                                                        <td>Minerva Hooper</td>
                                                                                        <td>$23,789</td>
                                                                                        <td>Curaçao</td>
                                                                                        <td>Sinaai-Waas</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane " id="settings-finance">
                                                                    <div class="col-md-12">
                                                                        <div class="header">
                                                                            <h4 class="title">Finance settings</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-striped">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>Salary</th>
                                                                                <th>Country</th>
                                                                                <th>City</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Dakota Rice</td>
                                                                                        <td>$36,738</td>
                                                                                        <td>Niger</td>
                                                                                        <td>Oud-Turnhout</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2</td>
                                                                                        <td>Minerva Hooper</td>
                                                                                        <td>$23,789</td>
                                                                                        <td>Curaçao</td>
                                                                                        <td>Sinaai-Waas</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane " id="settings-system">
                                                                    <div class="col-md-3">
                                                                        <!-- <div class="new-school"> -->
                                                                        <div class="header">
                                                                            <h4 class="title">New school</h4>
                                                                        </div>
                                                                        <div class="alert alert-inner alert-success alert-with-icon" id="school-notify" data-notify="container">
                                                                        </div>
                                                                        <div class=" form-row">
                                                                            <div class="form-group col-md-9">
                                                                                <!-- <label for="inputText">Telephone</label> -->
                                                                                <input type="text" class="form-control" id="idnewschool" placeholder="Enter School Name"/>
                                                                            </div><div class="form-group col-md-3 pull-right"><input type="submit" id="schoolsubmit" value="Add" class="btn btn-default"/></div>
                                                                        </div>
                                                                        <div class="new-division" bg-color="blue">
                                                                            <div class="header">
                                                                                <h4 class="title">New sub-county</h4>
                                                                            </div>
                                                                            <div class="alert alert-inner alert-success alert-with-icon" id="division-notify" data-notify="container">
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-12">
                                                                                    <label for="inputState">District</label>
                                                                                    <select id="sub_dist" class="district form-control">
                                                                                        <option>Choose</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class=" form-row">
                                                                                <div class="form-group col-md-9">
                                                                                    <!-- <label for="inputText">Telephone</label> -->
                                                                                    <input type="text" class="form-control" id="subcty" placeholder="Enter sub-county name">
                                                                                </div><div class="form-group col-md-3 pull-right"><input type="submit" id="divisionsubmit" value="Add" class="btn btn-default"/></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="new-division">
                                                                            <div class="header">
                                                                                <h4 class="title">New village</h4>
                                                                            </div>
                                                                            <div class="alert alert-inner alert-success alert-with-icon" id="village-notify" data-notify="container">
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label for="inputState">District</label>
                                                                                    <select id="vil_dist" class="district form-control">
                                                                                        <option>Choose</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label for="inputState">Division</label>
                                                                                    <select id="vil_sub" class="division form-control">
                                                                                        <option>Choose...</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class=" form-row">
                                                                                <div class="form-group col-md-9">
                                                                                    <!-- <label for="inputText">Telephone</label> -->
                                                                                    <input type="text" class="form-control" id="vil" placeholder="Enter village name">
                                                                                </div><div class="form-group col-md-3 pull-right"><input type="submit" id="villagesubmit" value="Add" class="btn btn-default"/></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="header">
                                                                            <h4 class="title">Registered schools</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-bordered">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>School Name</th>
                                                                                </thead>
                                                                                <tbody class="known-schools">

                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="header">
                                                                            <h4 class="title">Registered locations</h4>
                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-hover table-bordered">
                                                                                <thead>
                                                                                <th>ID</th>
                                                                                <th>Village(Cell)</th>
                                                                                <th>Sub-county</th>
                                                                                <th>District</th>
                                                                                </thead>
                                                                                <tbody class="location-data">

                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane " id="custom-settings-notification">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- #driver-->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
                        <!-- /.col -->
                </div>
                <!-- /.row -->
                </section>
                <?php include 'footer.php'; ?>         
            </div>
        </div>
    </body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <!-- <script src="assets/js/jquery.1.11.1.js" type="text/javascript"></script> -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- <script src="main.js" type="text/javascript"></script> -->
    <script type="text/javascript" src="main.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>      
    <script src="assets/js/utils.min.0.12.12.js"></script>

</html>
