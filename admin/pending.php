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
    $get_user = mysqli_query($conn, "SELECT * FROM adminz WHERE email = '$e'");
    while ($row = mysqli_fetch_object($get_user)) {
        $name = $row->name;
    }
}
if (isset($_POST['submit'])) {
    $status = $_POST['status'];
    $document_id = $_POST['id'];

    $update_query = "UPDATE documents SET status = '$status' WHERE id = '$document_id'";
    if (mysqli_query($conn, $update_query)) {
        echo '<script>alert("Status updated successfully!");</script>';
        echo '<script>window.location.href = "pending.php";</script>';
    } else {
        echo '<script>alert("Error updating status!");</script>';
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


    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.2/datatables.min.css" rel="stylesheet">

    <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.2/datatables.min.js"></script>


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
                <a class="navbar-brand" href="../"><img src="images/ui.png" alt="Admin"></a>
                <a class="navbar-brand hidden" href="../"><img src="images/admin1.jpg" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Components</h3><!-- /.menu-title -->
                    <li class="active">
                        <a href="pending.php"> <i class="menu-icon fa fa-dashboard"></i>Pendings </a>
                    </li>
                    <li class="">
                        <a href="approved.php"> <i class="menu-icon fa fa-dashboard"></i>Approved </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
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
                        <h1>Pending</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="card shadow">
                <div class="card-body">
                    <table id="tblpending" class="table table-striped">
                        <thead>
                            <tr>
                                <td class="text-start">Name</td>
                                <td class="text-center">Section</td>
                                <td class="text-center">Semester</td>
                                <td class="text-center">School Year</td>
                                <td class="text-center">Status</td>
                                <td class="text-center">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $get_user = mysqli_query($conn, "SELECT * FROM user u LEFT JOIN documents d ON u.email = d.uploader_email");
                            // $get_documents = mysqli_query($conn,"SELECT * FROM documents");

                            while ($user = mysqli_fetch_array($get_user)) {
                                // $user = mysqli_fetch_array($get_documents);
                            ?>
                                <tr>
                                    <td class="text-start"><?php echo $user['name']; ?></td>
                                    <td class="text-center"><?php echo $user['section']; ?></td>
                                    <td class="text-center"><?php echo $user['semester']; ?></td>
                                    <td class="text-center"><?php echo $user['school_yr']; ?></td>
                                    <td class="text-center">
                                        <?php if ($user['status'] !== 'No file uploaded') {
                                            if ($user['status'] == 'complete') {
                                        ?>
                                                <span class="mt-4 badge bg-success text-light p-2"><?php echo $user['status']; ?></span>
                                            <?php
                                            } else {
                                            ?>
                                                <span class="mt-4 badge bg-danger text-light p-2"><?php echo $user['status']; ?></span>
                                            <?php
                                            }
                                        } else { ?>
                                            <span class="mt-4 badge bg-danger">No file uploaded</span>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($user['status'] !== 'No file uploaded') { ?>
                                            <div style="display: flex; flex-direction: column; align-items: center;">
                                                <button class="btn btn-success mt-3" data-toggle="modal" data-target="#viewModal<?php echo $user['id']; ?>">View</button>
                                            </div>
                                        <?php } ?>
                                    </td>
                                </tr>

                                <!-- Modal to display document images -->
                                <div class="modal fade" id="viewModal<?php echo $user['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewModalLabel">View Documents</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <p> Name: <?php echo $user['name']; ?></p>
                                            <p> Email: <?php echo $user['email']; ?></p>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <!-- HTML structure for the Card -->
                                                    <?php if (!empty($user['card_img'])) { ?>
                                                        <div class="col-3 text-center">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <p class="card-title"><strong>Report Card</strong></p>
                                                                    <img src="../assets/img/pdf-icon.png" style="height: 150px; width:150px" alt="..."><br><br>
                                                                    <a href="../students/card/<?php echo $user['card_img']; ?>" class="btn btn-primary">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>


                                                    <!-- HTML structure for Birth Certificate -->
                                                    <?php if (!empty($user['birth_img'])) { ?>
                                                        <div class="col-3 text-center">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <p class="card-title"><strong>Birth Certificate</strong></p>
                                                                    <img src="../assets/img/pdf-icon.png" style="height: 150px; width:150px" alt="..."><br><br>
                                                                    <a href="../students/Birth_cert/<?php echo $user['birth_img']; ?>" class="btn btn-primary">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>


                                                    <!-- HTML structure for Form 137 -->
                                                    <?php if (!empty($user['form_img'])) { ?>
                                                        <div class="col-3 text-center">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <p class="card-title"><strong>Form 137</strong></p>
                                                                    <img src="../assets/img/pdf-icon.png" style="height: 150px; width:150px" alt="..."><br><br>
                                                                    <a href="../students/Form_137/<?php echo $user['form_img']; ?>" class="btn btn-primary">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>


                                                    <!-- HTML structure for Good Moral -->
                                                    <?php if (!empty($user['good_img'])) { ?>
                                                        <div class="col-3 text-center">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <p class="card-title"><strong>Good Moral</strong></p>
                                                                    <img src="../assets/img/pdf-icon.png" style="height: 150px; width:150px" alt="..."><br><br>
                                                                    <a href="../students/Good_moral/<?php echo $user['good_img']; ?>" class="btn btn-primary">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                    <!-- Form for document status -->
                                                    <div class="col-12 text-center mt-3">
                                                        <form method="POST" action="">
                                                            <label for="status">Status:</label>
                                                            <select id="status" name="status">
                                                                <option value="incomplete">Incomplete</option>
                                                                <option value="complete">Complete</option>
                                                            </select>
                                                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                                            <input type="submit" name="submit" value="Done" class="form-btn">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <script>
                        let table = new DataTable('#tblpending');
                    </script>

                </div>
            </div>
        </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- Include jQuery if not already included -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.view-btn').click(function() {
                var imageUrl = $(this).data('image');
                $('#modalImage').attr('src', '../students/card/' + imageUrl);
                $('#imageModal').modal('show');
            });
        });
    </script>



    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>



</body>

</html>