<?php include('../inc/fonction.php') ?>
<?php include('../inc/pdo/pdo.php') ?>
<?php
$title = 'Delete vaccins';
$id = $_GET['id'];
$sql = "SELECT * FROM vaccin1_vaccin WHERE id =$id";
$query = $pdo ->prepare($sql);
$query -> execute();
$vaccins = $query -> fetch ();
$vaccin = $vaccins['nom_vaccin'];
$vaccin .= ' /'.$vaccins['nom_maladie'];
if (!empty($_POST['submitted'])) {
  $sql = "DELETE FROM vaccin1_vaccin WHERE id=$id ";
  $query = $pdo ->prepare($sql);
  $query -> execute();
  header('Location:listvaccins.php');
}
?>
<?php include('inc/headerback.php') ?>
<body>
    <?php include('inc/navback.php');?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Delete Vaccins</h1>
                </div>
        <a href="listvaccins.php">Retour à la liste</a>
        <form action="" method="post">
          <span>VOULEZ-VOUS VRAIMENT SUPPRIMER CE VACCIN '<?php echo $vaccin ?>'</span>
          <input class="btn btn-danger" type="submit" name="submitted" value="Supprimer">
        </form>
                <!-- /.col-lg-12 -->
                </div>
          <!-- /.row -->
          </div>
      <!-- /.container-fluid -->
      </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="asset/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="asset/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="asset/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="asset/sb-admin-2.js"></script>
<?php include('inc/footerback.php');
