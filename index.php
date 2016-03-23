<?php

session_start();

$uri = $_SERVER['REQUEST_URI'];
$components = explode('?', $uri);
$components = explode('/', trim($components[0], '/'));
if (isset($_GET['logout'])) {
    $_SESSION['email'] = null;
}

$pages = [
    ['url' => 'loans', 'name' => 'Loans'],
    ['url' => 'mortgages', 'name' => 'Mortgages'],
    ['url' => 'leases', 'name' => 'Leases'],
    ['url' => 'insurances', 'name' => 'Insurances'],
    ['url' => 'credit-cards', 'name' => 'Credit Cards']
];

if (empty($components[0])) {
    $components[0] = 'index';
}
$page = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . $components[0] . '.php';
if (!file_exists($page)) {
    $content = "$page is not found";
    header("HTTP/1.0 404 Not Found");
} else {
    ob_start();

    include $page;

    $content = ob_get_contents();

    ob_end_clean();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico">

    <title>Bynkr</title>
    <base href="/">

    <!-- Bootstrap core CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/components/font-awesome/css/font-awesome.min.css">

</head>

<body role="document">

<?php require 'navigation.php' ?>

<?= $content ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="vendor/components/jquery/jquery.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
