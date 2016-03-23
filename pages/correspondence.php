<ul class="main-menu">
    <li class="active">
        <a href="overview" class="dropdown" onclick="return false;"><span
                class="glyphicon glyphicon-chevron-down"></span>Products</a>
        <ul class="submenu">
            <?php

            foreach ($pages as $page) {
                echo '<li' . (isset($components[1]) && $components[1] == $page['url'] ? ' class="active"' : '') . '><a href="overview/' . $page['url'] . '">' . $page['name'] . '</a></li>';
            }

            ?>
        </ul>
    </li>
    <li class="active"><a href="correspondence"><span class="glyphicon glyphicon-comment"></span>Correspondence</a></li>
    <li><a href="vault"><span class="glyphicon glyphicon-lock"></span>Personal Vault</a></li>
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
                            <td>23-3-2016</td>
                            <td>18:00</td>
                            <td><span class="label label-success">Whatsapp</span></td>
                            <td>
                                <a class="refrecconv">Refinancing my house</a>
                                <span class="badge">4</span>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>22-3-2016</td>
                            <td>19:00</td>
                            <td><span class="label label-primary">Facebook</span></td>
                            <td>
                                <a class="refrecconv">What to do if I lose my phone while abroad?</a>
                                <span class="badge">12</span>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>22-3-2016</td>
                            <td>20:00</td>
                            <td><span class="label label-default">Call</span></td>
                            <td>
                                <a class="refrecconv">Question: How do I change my PIN?</a>
                                <span class="badge">1</span>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>20-3-2016</td>
                            <td>12:13</td>
                            <td><span class="label label-warning">ING app</span></td>
                            <td>
                                <a class="refrecconv">Feedback: I love the app</a>
                                <span class="badge">3</span>
                            </td>
                        </tr>

                        <?php
                        function getCor()
                        {
                            $platforms = [['Facebook', 'primary'], ['Whatsapp', 'success'], ['ING app', 'warning'], ['Call', 'default']];

                            $text = file_get_contents('http://loripsum.net/api/1/verylong/plaintext');
                            $text = array_filter(explode("\n", wordwrap($text, 80)));
                            $last = null;
                            $count = 1;
                            $even = true;
                            $unix = strtotime('-2 weeks');
                            foreach ($text as $t) {
                                $unix -= rand(60, 7 * 24 * 60 * 60);
                                $date = date('j-n-Y', $unix);
                                $time = date('H:i', $unix);
                                $messages = rand(2, 6);
                                list($platform, $color) = $platforms[array_rand($platforms)];
                                $rand = rand(1, 2);
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

                                echo '<tr class=' . ($even ? 'even' : 'odd') . '>
                                    <td>' . $date . '</td>
                                    <td>' . $time . '</td>
                                    <td><span class="label label-' . $color . '">' . $platform . '</span></td>
                                    <td>
                                        <a class="refrecconv">' . $t . '</a>
                                        <span class="badge">' . $messages . '</span>
                                    </td>
                                </tr>';
                            }

                        }

                        getCor();
                        ?>
                        </tbody>
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
                    <div class="panel panel-default" id="convo">
                        <div class="panel-body msg_container_base">
                            <?php
                            $minutes = 9;
                            $last = null;
                            $count = 0;
                            $text = file_get_contents('http://loripsum.net/api/1/verylong/plaintext');
                            $text = array_filter(explode("\n", wordwrap($text, 80)));
                            $customerimg = ['customer1', 'customer2', 'customer3'];
                            $currentcustomer = $customerimg[array_rand($customerimg)];
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
                                        <div
                                            class="messages msg_<?php if ($rand): ?>sent<?php else: ?>receive<?php endif ?>">
                                            <p><?= $t ?></p>
                                            <time datetime="2009-11-13T20:00">
                                                <?php if ($rand): ?>Randy<?php else: ?>Timothy<?php endif ?>
                                                • <?= $minutes ?> min
                                            </time>
                                        </div>
                                    </div>
                                    <?php if ($rand): ?>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="/images/<?php echo $currentcustomer ?>.png"
                                                 class="img-responsive">
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
