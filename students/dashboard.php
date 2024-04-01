<?php
include '../conn.php';
session_start();

if (empty($_SESSION['email'])) {
?>
    <script>
        alert("Session Empty!");
        location.href = '../index.php';
    </script>
<?php
} else {
    $e = $_SESSION['email'];
    $get_user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$e'");
    while ($row = mysqli_fetch_object($get_user)) {
        $name = $row->name;
    }
}

?>
<!doctype html>

<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online submission</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel" style="background-color: #609450;">
        <nav class="navbar  navbar-expand-sm 
        navbar-default" style="background-color: #609450;">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="../"><img src="images/kk.jpg" alt="Logo" class="rounded-circle" style="height:45px;"> Student Page</a>

            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Components</h3><!-- /.menu-title -->
                    <li class="">
                        <a href="upload.php"> <i class="menu-icon fa fa-dashboard"></i>Upload Requirements </a>
                    </li>
                    <li class="">
                        <a href="records.php"> <i class="menu-icon fa fa-dashboard"></i>Update Records </a>
                    </li>
                    <li class="">
                        <a href="cite.php"> <i class="menu-icon fa fa-dashboard"></i>CITE FACULTIES</a>
                    </li>
                    <li class="">
                        <a href="upload-record.php"> <i class="menu-icon fa fa-dashboard"></i>Upload Record</a>
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->

            </div>
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin1.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">




                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">

                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Welcome! 1st YearBite: Online Application Submission App</h1>
                        <p style="white-space: nowrap;">Welcome to our BSIT Community! We're thrilled to have you. </p>
                        <p style="white-space: nowrap;">Explore the endless possibilities of technology with us, and let the journey toward knowledge and innovation begin!</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="content mt-3">
        </div> <!-- .content -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">REQUIREMENTS</div>
                    <div class="card-body">
                        <p>1. Senior High School Card (Grade 12)</p>
                        <p>2. Form 137</p>
                        <p>3. Good Moral</p>
                        <p>4. Birth Certificate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">Guidelines How to upload your Documents</div>
                    <div class="card-body">
                        <ul style="list-style-type: disc; margin-left: 20px;">
                            <li>
                                <p>Look for an "Upload Requirements" button on the left side of your Dashboard</p>
                            </li>
                            <li>
                                <p>Select file (Birth Certificate, Card, Good Moral, Form 137)</p>
                            </li>
                            <li>
                                <p>Look for an "Upload Files" button</p>
                            </li>
                            <li>
                                <p>Select the said Documents you want to upload</p>
                            </li>
                            <li>
                                <p>Confirm the upload by clicking "Upload" button.</p>
                            </li>
                            <li>
                                <p>Wait for the approval of Admin</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>



</body>

</html>