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
                <img src="/images/customer.png" class="img-responsive">
            </div>
        <?php endif ?>
    </div>
<?php endforeach ?>