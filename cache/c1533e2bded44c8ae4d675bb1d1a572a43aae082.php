<html>
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="/lk/assets/images/favicon-32x32.png" type="image/png" />
      <!--plugins-->
      <link href="/lk//lk/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
      <link href="/lk//lk/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
      <link href="/lk/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
      <link href="/lk/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
      <!-- Bootstrap CSS -->
      <link href="/lk/assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="/lk/assets/css/bootstrap-extended.css" rel="stylesheet" />
      <link href="/lk/assets/css/style.css" rel="stylesheet" />
      <link href="/lk/assets/css/icons.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


      <!-- loader-->
    	<link href="/lk/assets/css/pace.min.css" rel="stylesheet" />

      <!--Theme Styles-->
      <link href="/lk/assets/css/dark-theme.css" rel="stylesheet" />
      <link href="/lk/assets/css/light-theme.css" rel="stylesheet" />
      <link href="/lk/assets/css/semi-dark.css" rel="stylesheet" />
      <link href="/lk/assets/css/header-colors.css" rel="stylesheet" />
      <link href="/lk/assets/css/mystyle.css" rel="stylesheet">

      <title>Dovezut.Ru | Личный кабинет</title>
  </head>
  <body>
    <?php echo $__env->make('panel.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('panel.slidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('main_content'); ?>
    <!-- Bootstrap bundle JS -->
    <script src="/lk/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="/lk/assets/js/jquery.min.js"></script>
    <script src="/lk/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="/lk/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="/lk/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="/lk/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/lk/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/lk/assets/js/pace.min.js"></script>
    <script src="/lk/assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="/lk/assets/plugins/chartjs/js/Chart.extension.js"></script>
    <script src="/lk/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <!--app-->
    <script src="/lk/assets/js/app.js"></script>
    <script src="/lk/assets/js/index.js"></script>
    <script src="/lk/assets/js/myscr.js"></script>
    <script>
      new PerfectScrollbar(".best-product")
   </script>
  </body>
</html>
