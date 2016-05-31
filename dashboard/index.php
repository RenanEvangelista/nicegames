<?php 
  $title = "Nice games Store";
  include 'partials/header.php';
  include 'functions/functions.php';
?>

<body>

  <div id="wrapper">

    <!-- Navigation -->
    <?php include 'partials/navbar.php'; ?>

    <div id="page-wrapper">

      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              Painel <small>visão geral</small>
            </h1>
          </div>
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-users fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><?php $product->count('produto'); ?></div>
                    <div>Número de produtos</div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Produtos</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <?php include 'partials/product/user-head.php'; ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $product->wrapperList( $product->readAll('produto'), true ); ?>
                    </tbody>
                  </table>
                  <a href="./product.php">
                    Ver todos produtos <i class="fa fa-arrow-circle-right"></i>
                  </a>

                  <?php include 'partials/message.php'; ?>
                </div>
              </div>
            </div>

          </div><!-- /.product -->

          <div class="col-lg-4 col-md-6">
            <div class="panel panel-red">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-ban fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><?php $employe->count('cliente'); ?></div>
                    <div>Clientes</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-red">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Clientes</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <?php include 'partials/client/user-head.php'; ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $client->wrapperList( $client->readAll('cliente'), true ); ?>
                    </tbody>
                  </table>
                  <a href="./client.php">
                    Ver todos clientes <i class="fa fa-arrow-circle-right"></i>
                  </a>
                  <?php include 'partials/message.php'; ?>
                </div>
              </div>
            </div>

          </div> <!-- /.Client -->

          <div class="col-lg-4 col-md-6">
            <div class="panel panel-green">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><?php $client->count('funcionario'); ?></div>
                    <div>Funcionários</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-green">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Funcionários</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <?php include 'partials/employe/user-head.php'; ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $employe->wrapperList( $employe->readAll('funcionario'), true ); ?>
                    </tbody>
                  </table>
                  <a href="./employe.php">
                    Ver todos funcionários <i class="fa fa-arrow-circle-right"></i>
                  </a>
                  <?php include 'partials/message.php'; ?>
                </div>
              </div>
            </div>

          </div> <!-- /.employe -->

        </div>
        <!-- /.row -->

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php include 'partials/footer.php'; ?>
