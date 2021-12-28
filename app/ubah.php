<?php
if(isset($_POST['perbarui']))
{
    $id = $_POST['ID'];
    $nama = $_POST['Name'];
    $kode = $_POST['CountryCode'];
    $distrik = $_POST['District'];
    $populasi = $_POST['Population'];

    include_once("config.php");

    $result = mysqli_query($mysqli, "UPDATE city SET Name='$nama',CountryCode='$kode',District='$distrik',Population='$populasi'
    WHERE ID=$id");

    header("location: index.php");
}
?>

<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM city WHERE id=$id");
while($data = mysqli_fetch_array($result))

{
    $nama = $data['Name'];
    $kode = $data['CountryCode'];
    $distrik = $data['District'];
    $populasi = $data['Population'];
}
?>



<!-- Tampilan User -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ubah Kota</title>

    <!-- Custom fonts for this template-->
    <link href="uts/../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="uts/../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Kota Dunia</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah.php">Tambah Data Kota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Landing</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    <br>
    <h1> &nbsp; &nbsp; &nbsp;Ubah Kota</h1>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
              <br>
              <br>
              <br>

                <!-- Topbar -->
                <!-- End of Topbar -->
                <!-- Begin Page Content -->

                <!-- UBAH -->
                <div class="container-fluid">
                  <form action="ubah.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <br>
                        <input type="text" name="Name" required="" value="<?php echo $nama; ?>" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Country Code</label>
                        <br>
                        <input type="text" name="CountryCode" required="" value="<?php echo $kode; ?>" placeholder="Country Code">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">District</label>
                        <br>
                        <input type="text" name="District" required="" value="<?php echo $distrik; ?>" placeholder="District">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Population</label>
                        <br>
                        <input type="text" name="Population" required="" value="<?php echo $populasi; ?>" placeholder="Population">
                    </div>
                    <input type="hidden" name="ID" value=<?php echo $_GET['id']; ?>>
                    <input type="submit" name="perbarui" value="Ubah" class="btn btn-primary"></input>
                  </form>
                  </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 192410101007 Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="uts/../vendor/jquery/jquery.min.js"></script>
    <script src="uts/../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="uts/../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="uts/../js/sb-admin-2.min.js"></script>

</body>
</html>      
