<?php

if (isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
    header('Location: /overview');
}

?>

<!-- Container -->
<div class="container">

<!-- Row -->
<div class="row">

    <div class="col-md-6 col-xs-12 pull-right">

        <div class="page-header">
            <h2>Login</h2>
        </div>

        <form action="/" method="post">
            <div class="form-group">
                <label for="login1">Username</label>
                <input type="text" name="email" class="form-control" id="login1" placeholder="Username">
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
            <h1>bynkr</h1>
            <p>The bridge between you, your bank and your financial security.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>

    </div>

</div>
<!-- End Row -->

</div>
<!-- End Container -->
