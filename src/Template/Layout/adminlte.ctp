<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $this->fetch('title') ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <?php echo $this->Html->css('TwitterBootstrap.AdminLTE.min.css');?>
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <?php echo $this->Html->css('TwitterBootstrap.skins/skin-blue.min.css');?>

  <?= $this->fetch('css') ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
    <?php
        $element = ROOT.DS.'src'.DS.'Template'.DS.'Element'.DS.'adminlte'.DS.'header.ctp';
        if (file_exists($element)) {
            ob_start();
            include $element;
            echo ob_get_clean();
        }
        else {
            echo $this->element('adminlte/header');
        }
    ?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php
        $element = ROOT.DS.'src'.DS.'Template'.DS.'Element'.DS.'adminlte'.DS.'sidebar.ctp';
        if (file_exists($element)) {
            ob_start();
            include $element;
            echo ob_get_clean();
        }
        else {
            echo $this->element('adminlte/sidebar');
        }
    ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
        $element = ROOT.DS.'src'.DS.'Template'.DS.'Element'.DS.'adminlte'.DS.'content.ctp';
        if (file_exists($element)) {
            ob_start();
            include $element;
            echo ob_get_clean();
        }
        else {
            echo $this->element('adminlte/content');
        }
    ?>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <?php
        $element = ROOT.DS.'src'.DS.'Template'.DS.'Element'.DS.'adminlte'.DS.'footer.ctp';
        if (file_exists($element)) {
            ob_start();
            include $element;
            echo ob_get_clean();
        }
        else {
            echo $this->element('adminlte/footer');
        }
    ?>
  </footer>

  <?php
        $element = ROOT.DS.'src'.DS.'Template'.DS.'Element'.DS.'adminlte'.DS.'control_sidebar.ctp';
        if (file_exists($element)) {
            ob_start();
            include $element;
            echo ob_get_clean();
        }
        else {
            echo $this->element('adminlte/control_sidebar');
        }
    ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<?php echo $this->Html->script('TwitterBootstrap.app.min.js'); ?>

<?= $this->fetch('script') ?>
</body>
</html>
