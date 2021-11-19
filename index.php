<?php require __DIR__ . '/config.php'; ?>
<?php require __DIR__ . '/funkce.php'; ?>
<!DOCTYPE html>
<html>
  <?php require __DIR__ . '/layout/head.php'; ?>
  <body>
    <div id="wrapper">
      <?php require __DIR__ . '/layout/sidebar.php'; ?>

      <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
          <?php require __DIR__ . '/layout/topbar.php'; ?>

        <!-- Main content -->
        
        <div class="wrapper wrapper-content animated fadeInRight">
          <div class="row">
              <?php echo vypisKontakty($kontakty);?>
          </div>
        </div>
        <!-- /End Main content -->

        <?php require __DIR__ . '/layout/footer.php'; ?>
      </div>
    </div>
    <?php require __DIR__ . '/layout/scripts.php'; ?>
    
  </body>
</html>