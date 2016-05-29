<?php 
  $title = "NG - Cadastro de Funcionário";
  include '../../functions/config.php';
  include '../header.php';
  include '../../functions/database.php';
  include '../../functions/product/product.php';
  include '../../functions/employe/employe.php';
  include '../../functions/client/client.php';
?>

<body>

    <div id="wrapper">

        <?php include '../navbar.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Cadastro de Funcionário
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                      <?php include 'form-employe.php'; ?>
                    </div>
                    
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include '../footer.php'; ?>
