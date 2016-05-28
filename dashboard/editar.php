<?php 
  $title = "LHM - Editar usuário";
  include 'partials/header.php';
  include 'functions/database.php';
?>

<body>

    <div id="wrapper">

        <?php include 'partials/navbar.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Editar
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                      <?php include 'partials/form-editar.php'; ?>
                    </div>
                    
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include 'partials/footer.php'; ?>
