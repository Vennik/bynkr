<ul class="main-menu">
    <li>
        <a href="overview" class="dropdown" onclick="return false;"><span class="fa fa-shopping-cart"></span>Products</a>
        <ul class="submenu">
            <?php

            foreach ($pages as $page) {
                echo '<li' . (isset($components[1]) && $components[1] == $page['url'] ? ' class="active"' : '') . '><a href="overview/' . $page['url'] . '">'.$page['name'].'</a></li>';
            }

            ?>
        </ul>
    </li>
    <li class="active"><a href="correspondence"><span class="glyphicon glyphicon-comment"></span>Correspondence</a></li>
</ul>

<div class="menu-push">
    <div class="container-fluid" role="main">
        <!-- Row -->
        <div class="row">

            <!-- Col -->
            <div class="col-md-8">

                <div class="documents">

                    <div class="page-header">
                        <h2>Correspondence</h2>
                    </div>

                    <!-- Table -->
                    <table class="table">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-md-1">Date</th>
                                <th class="col-md-1">Time</th>
                                <th class="col-md-1">Platform</th>
                                <th class="col-md-10">Title</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="even">
                                <td>22-3-2016</td>
                                <td>18:00</td>
                                <td><span class="label label-success">Whatsapp</span></td>
                                <td>lorem ipsum <span class="badge">4</span></td>
                            </tr>
                            <tr class="odd">
                                <td>22-3-2016</td>
                                <td>19:00</td>
                                <td><span class="label label-primary">Facebook</span></td>
                                <td>amet john doe <span class="badge">12</span></td>
                            </tr>
                            <tr class="even">
                                <td>22-3-2016</td>
                                <td>20:00</td>
                                <td><span class="label label-default">Call</span></td>
                                <td>Dolor set <span class="badge">5</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </table>

                </div>

            </div>
            <!-- End Col -->

            <!-- Col -->
            <div class="col-md-4">

                <div class="messages-side">

                    <div class="page-header">
                        <h2>Conversation</h2>
                    </div>
                        <div class="col-xs-12 col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body msg_container_base">
                                    <div class="row msg_container base_sent">
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_sent">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img
                                                src="images/customer.png"
                                                class=" img-responsive ">
                                        </div>
                                    </div>
                                    <div class="row msg_container base_receive">
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="images/logo.png" class=" img-responsive ">
                                        </div>
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_receive">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- startrepeat -->
                                    <div class="row msg_container base_sent">
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_sent">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img
                                                src="images/customer.png"
                                                class=" img-responsive ">
                                        </div>
                                    </div>
                                    <div class="row msg_container base_receive">
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="images/logo.png" class=" img-responsive ">
                                        </div>
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_receive">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row msg_container base_sent">
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_sent">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img
                                                src="images/customer.png"
                                                class=" img-responsive ">
                                        </div>
                                    </div>
                                    <div class="row msg_container base_receive">
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="images/logo.png" class=" img-responsive ">
                                        </div>
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_receive">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row msg_container base_sent">
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_sent">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img
                                                src="images/customer.png"
                                                class=" img-responsive ">
                                        </div>
                                    </div>
                                    <div class="row msg_container base_receive">
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="images/logo.png" class=" img-responsive ">
                                        </div>
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_receive">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row msg_container base_sent">
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_sent">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img
                                                src="images/customer.png"
                                                class=" img-responsive ">
                                        </div>
                                    </div>
                                    <div class="row msg_container base_receive">
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="images/logo.png" class=" img-responsive ">
                                        </div>
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_receive">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row msg_container base_sent">
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_sent">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img
                                                src="images/customer.png"
                                                class=" img-responsive ">
                                        </div>
                                    </div>
                                    <div class="row msg_container base_receive">
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="images/logo.png" class=" img-responsive ">
                                        </div>
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_receive">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row msg_container base_sent">
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_sent">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img
                                                src="images/customer.png"
                                                class=" img-responsive ">
                                        </div>
                                    </div>
                                    <div class="row msg_container base_receive">
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="images/logo.png" class=" img-responsive ">
                                        </div>
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_receive">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row msg_container base_sent">
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_sent">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img
                                                src="images/customer.png"
                                                class=" img-responsive ">
                                        </div>
                                    </div>
                                    <div class="row msg_container base_receive">
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="images/logo.png" class=" img-responsive ">
                                        </div>
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_receive">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row msg_container base_sent">
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_sent">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img
                                                src="images/customer.png"
                                                class=" img-responsive ">
                                        </div>
                                    </div>
                                    <div class="row msg_container base_receive">
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="images/logo.png" class=" img-responsive ">
                                        </div>
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_receive">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row msg_container base_sent">
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_sent">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img
                                                src="images/customer.png"
                                                class=" img-responsive ">
                                        </div>
                                    </div>
                                    <div class="row msg_container base_receive">
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="images/logo.png" class=" img-responsive ">
                                        </div>
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_receive">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row msg_container base_sent">
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_sent">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img
                                                src="images/customer.png"
                                                class=" img-responsive ">
                                        </div>
                                    </div>
                                    <div class="row msg_container base_receive">
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="images/logo.png" class=" img-responsive ">
                                        </div>
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_receive">
                                                <p>that mongodb thing looks good, huh?
                                                    tiny master db, and huge document store</p>
                                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                            </div>
                                        </div>
                                    </div>

                                    <!--endrepeat -->


                            </div>
                        </div>
                    </div>

                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-cog"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#" id="new_chat"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Ver outras</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Fechar Tudo</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><span class="glyphicon glyphicon-eye-close"></span> Invisivel</a></li>
                        </ul>
                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- End Col -->

        </div>
        <!-- End Row -->

    </div>
</div>
