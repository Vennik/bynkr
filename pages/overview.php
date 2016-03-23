<ul class="main-menu">
    <li class="active">
        <a href="#" class="dropdown" onclick="return false;"><span class="fa fa-shopping-cart"></span>Products</a>
        <ul class="submenu">
            <?php

            foreach ($pages as $page) {
                echo '<li' . (isset($components[1]) && $components[1] == $page['url'] ? ' class="active"' : '') . '><a href="overview/' . $page['url'] . '">'.$page['name'].'</a></li>';
            }

            ?>
        </ul>
    </li>
    <li><a href="correspondence"><span class="glyphicon glyphicon-comment"></span>Correspondence</a></li>
    <li><a href="vault"><span class="glyphicon glyphicon-lock"></span>Personal Vault</a></li>
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

                <div class="clear"></div>

                <div class="page-header">
                    <h2>Personal documents</h2>
                </div>

                <?php

                $amount = rand(2, 5);

                for ($i = 0; $i < $amount; $i++) {
                    echo '<a href="#" class="document"><span class="glyphicon ' . $icons[array_rand($icons)] . '"></span><br><p>' . $files[array_rand($files)] . '</p></a>';
                }

                ?>

                <!--for file upload -->
                <div class="documents" id="placeholder"></div>

                <a href="#" class="document uploadbutton buzz" data-toggle="modal" data-target="#myModal"><span
                        class="glyphicon glyphicon glyphicon-plus"></span><br>
                    <p>Add file</p></a>

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Upload a file</h4>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-orange btn-file">
                                               <input type="file" multiple> Browse
                                            </span>
                                        </span>
                                    <input type="text" class="form-control" id="selected-file" readonly>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn  btn-orange upload" data-dismiss="modal">Upload
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!--End for file upload -->

            </div>

        </div>
        <!-- End Col -->

        <!-- Col -->
        <div class="col-md-4">

            <div class="messages-side">

                <div class="page-header">
                    <h2>Correspondence</h2>
                </div>

                <?php

                $messageTitles = [
                    'Hello from ING',
                    'Your new CC is here!',
                    'Your ticket [#103]',
                    'Try it out!',
                    'Happy new year!',
                    'Your year overview',
                    'Question answered',
                    'Also hello!'
                ];

                $months = array('January', 'February', 'March', 'April', 'May', 'June', 'Juli', 'August', 'September', 'October', 'November', 'December');

                ?>

                <div class="between">
                    January 2016
                </div>
                <?php

                $amount = rand(1, 2);
                for ($i = 0; $i < $amount; $i++) {
                    echo '<a href="#" class="message">
                    <h4><span class="glyphicon glyphicon-comment"></span> ' . $messageTitles[array_rand($messageTitles)] . '</h4>
                <p>' . rand(1, 30) . ' January</p>
                </a>';
                }

                ?>

                <div class="between">
                    2015
                </div>
                <?php

                $in = array_rand($months, rand(1, 3));
                if (sizeof($in) == 1) $in = [$in];
                foreach(array_reverse($in) as $m) {


                echo '<a href="#" class="message">
                    <h4><span class="glyphicon glyphicon-comment"></span> ' . $messageTitles[array_rand($messageTitles)] . '</h4>
                <p>' . rand(1, 30) . ' ' . $months[$m] . '</p>
                </a>';

                }

                ?>

                <div class="between">
                    2014
                </div>
                <?php

                $in = array_rand($months, rand(1, 3));
                if (sizeof($in) == 1) $in = [$in];
                foreach(array_reverse($in) as $m) {

                    echo '<a href="#" class="message">
                    <h4><span class="glyphicon glyphicon-comment"></span> ' . $messageTitles[array_rand($messageTitles)] . '</h4>
                <p>' . rand(1, 30) . ' ' . $months[$m] . '</p>
                </a>';

                }

                ?>

            </div>

        </div>
        <!-- End Col -->

    </div>
    <!-- End Row -->

    </div>
    <!-- End Container -->

</div>
