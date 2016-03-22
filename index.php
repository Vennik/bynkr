<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico">

    <title>Bynkr</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
</head>

<body role="document">

<?php require 'navigation.php' ?>

<div class="container theme-showcase" role="main">

    <!-- Row -->
    <div class="row">

        <div class="col-md-6 col-xs-12 pull-right">

            <div class="page-header">
                <h2>Login</h2>
            </div>

            <form action="overview.php" method="post">
                <div class="form-group">
                    <label for="login1">Email address</label>
                    <input type="email" class="form-control" id="login1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="login2">Password</label>
                    <input type="password" class="form-control" id="login2" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
            </form>

        </div>

        <div class="col-md-6 col-xs-12">

            <div class="jumbotron">
                <h1>Bynkr</h1>
                <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point
                    to create something more unique by building on or modifying it.</p>
            </div>

        </div>

    </div>
    <!-- End Row -->

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="vendor/components/jquery/jquery.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>