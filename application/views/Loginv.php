<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SPEK VPS</title>

    <!-- Link asset-->
    <link rel="stylesheet" type="text/css" href="asset/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="asset/bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/bootstrap5/css/login.css">
    <link rel="stylesheet" type="text/css" href="asset/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="asset/fontawesome/css/brands.css">
    <link rel="stylesheet" type="text/css" href="asset/fontawesome/css/solid.css">
    <script type="text/javascript" src="asset/bootstrap5/js/bootstrap.js"></script>
    <script type="text/javascript" src="asset/bootstrap5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap5/js/bootstrap.bundle.min.js"></script>
</head>

<!-- body-->
<body class="text-center bg-primary">
    <form class="form-signin" method="POST" action="<?php echo base_url()?>Login/auth">
      <h1 class="h3 mb-3 font-weight-normal">LOGIN</h1>
      <span style="font-size: 96px; color: HEX: #3F729B;">
  <i class="fas fa-user-circle"></i>
</span>
      <label for="inputusername" class="sr-only">Username</label>
      <input type="text" id="inputusername" name="username" class="form-control" placeholder="Username">
      <label for="inputpassword" class="sr-only">Password</label>
      <input type="password" id="inputpassword" name="password" class="form-control" placeholder="Password">
      <button class="btn btn-lg btn-info btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-dark">&copy; 2021</p>
    </form>
  </body>

</html>






