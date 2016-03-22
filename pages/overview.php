<ul class="main-menu">
    <li>
        <a href="#" class="dropdown"><span class="fa fa-shopping-cart"></span>Products</a>
        <ul class="submenu">
            <li><a href="loans">Loans</a></li>
            <li><a href="mortgages">Mortgages</a></li>
            <li><a href="leases">Leases</a></li>
            <li><a href="insurances">Insurances</a></li>
            <li><a href="credit-cards">Credit Cards</a></li>
        </ul>
    </li>
    <li><a href="correspondence"><span class="glyphicon glyphicon-comment"></span>Correspondence</a></li>
</ul>

<div class="container-fluid menu-push" role="main">
    <!-- Row -->
    <div class="row">

        <!-- Container -->
        <div class="container-fluid">

        <!-- Col -->
        <div class="col-md-8">


            <div class="documents">

                <div class="page-header">
                    <h2>ING documents</h2>
                </div>

                <?php

                $icons = ['glyphicon-file', 'glyphicon-tag', 'glyphicon-briefcase', 'glyphicon-euro'];
                $files = ['filename.png', 'a-very-long-filename.png', 'test.jpg'];
                $amount = rand(5, 10);

                for ($i = 0; $i < $amount; $i++) {
                    echo '<a href="#" class="document"><span class="glyphicon ' . $icons[array_rand($icons)] . '"></span><br><p>' . $files[array_rand($files)] . '</p></a>';
                }

                ?>

                <div class="page-header">
                    <h2>Personal documents</h2>
                </div>

                <?php

                $amount = rand(2, 5);

                for ($i = 0; $i < $amount; $i++) {
                    echo '<a href="#" class="document"><span class="glyphicon ' . $icons[array_rand($icons)] . '"></span><br><p>' . $files[array_rand($files)] . '</p></a>';
                }

                ?>

            </div>

        </div>
        <!-- End Col -->

        <!-- Col -->
        <div class="col-md-4">

            <div class="messages">

                <div class="page-header">
                    <h2>Correspondence</h2>
                </div>

                <div class="between">
                    January 2016
                </div>
                <a href="#" class="message">
                    <h4><span class="glyphicon glyphicon-comment"></span> Title of message</h4>
                    <p>28 January</p>
                </a>
                <a href="#" class="message">
                    <h4><span class="glyphicon glyphicon-comment"></span> An other message</h4>
                    <p>21 January</p>
                </a>

                <div class="between">
                    2015
                </div>
                <a href="#" class="message">
                    <h4><span class="glyphicon glyphicon-comment"></span> Message</h4>
                    <p>21 November</p>
                </a>
                <a href="#" class="message">
                    <h4><span class="glyphicon glyphicon-comment"></span> Title of message</h4>
                    <p>16 August</p>
                </a>

                <div class="between">
                    2014
                </div>
                <a href="#" class="message">
                    <h4><span class="glyphicon glyphicon-comment"></span> Title of message</h4>
                    <p>8 June</p>
                </a>

            </div>

        </div>
        <!-- End Col -->

    </div>
    <!-- End Row -->

    </div>
    <!-- End Container -->

</div>
