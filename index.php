<?php require_once('./config.php'); ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
  <body class="layout-top-nav layout-fixed layout-navbar-fixed" style="height: auto;">
    <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
    <?php require_once('inc/topBarNav.php') ?>
    <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
    <?php endif;?>    

    <!-- Main content -->
    <section class="content" style="background-color:#e7ddff;">
      <?php 
        if(!file_exists($page.".php") && !is_dir($page)){
          include '404.html';
        }
        else{
          if(is_dir($page))
            include $page.'/index.php';
          else
            include $page.'.php';
        }
      ?>
    </section>
    <?php require_once('inc/footer.php') ?>
  </body>
</html>
