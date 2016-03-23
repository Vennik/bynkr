<ul class="main-menu">
    <li>
        <a href="overview" class="dropdown" onclick="return false;"><span
                class="fa fa-shopping-cart"></span>Products</a>
        <ul class="submenu">
            <?php

            foreach ($pages as $page) {
                echo '<li' . (isset($components[1]) && $components[1] == $page['url'] ? ' class="active"' : '') . '><a href="overview/' . $page['url'] . '">' . $page['name'] . '</a></li>';
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
                    <div class="panel panel-default">
                        <div class="panel-body msg_container_base">
                            <?php
                            $minutes = 9;
                            $last = null;
                            $count = 0;
                            $text = file_get_contents('http://loripsum.net/api/1/verylong/plaintext');
                            $text = array_filter(explode("\n", wordwrap($text, 80)));
                            foreach ($text as $t):
                                $rand = rand(0, 1);
                                if ($last === $rand) {
                                    if ($count < 1) {
                                        $count += 1;
                                    } else {
                                        $count = 0;
                                        $rand = 1 - $rand;
                                    }
                                } else {
                                    $count = 0;
                                }
                                $last = $rand;
                                $minutes += rand(0, 5);
                                ?>
                                <div class="row msg_container base_sent">
                                    <?php if (!$rand): ?>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="/images/logo.png" class="img-responsive">
                                        </div>
                                    <?php endif ?>
                                    <div class="col-md-10 col-xs-10">
                                        <div class="messages msg_<?php if ($rand): ?>sent<?php else: ?>receive<?php endif ?>">
                                            <p><?= $t ?></p>
                                            <time datetime="2009-11-13T20:00">
                                                <?php if ($rand): ?>Randy<?php else: ?>Timothy<?php endif ?>
                                                • <?= $minutes ?> min
                                            </time>
                                        </div>
                                    </div>
                                    <?php if ($rand): ?>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="/images/customer.png" class="img-responsive">
                                        </div>
                                    <?php endif ?>
                                </div>
                            <?php endforeach ?>

                            <!--endrepeat -->


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
