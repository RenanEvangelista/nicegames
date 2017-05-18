<?php 
  $title = 'NG - Carrinho';
  include_once('views/head.php');
  include_once('config.php');
?>
<body>

  <?php include_once('views/header.php'); ?>

  <h2 class="big-title">Carrinho</h2>

  <div class="single-product-area">
    <div class="container">
      
      <?php
        $currentPage = "Carrinho";
        include_once('views/breadcrumbs.php');
      ?>
      
      <?php include_once('views/cart/table.php'); ?>
      <?php include_once('dashboard/views/message.php'); ?>
    </div>
  </div>

<?php include_once('views/footer.php'); ?>
