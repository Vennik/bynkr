<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><i class="fa fa-circle"></i> bynkr</a>
        </div>
        <div id="navbar" class="navbar-right">
            <ul class="nav navbar-nav">
                <?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])): ?>
                    <li class="navbar-text">Logged in as <?= $_SESSION['email'] ?></li>
                    <li><a href="/?logout=1"><span class="fa fa-sign-out"></a></li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>
