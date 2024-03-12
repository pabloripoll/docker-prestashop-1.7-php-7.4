<?php

$this->private();

$js = "javascript:;";

?>
<ul class="subsubsub">
    <?php
    $i = 0;
    $count = count($sections);
    foreach ($sections as $key => $section) :
        $i++;
        $pipe = $i == $count ? '' : '|';
        ?>
        <li class="all">
            <a href="<?= $js; ?>" class="spapage" data-target="<?= $key; ?>"><?= $section['title']; ?> </a> <?= $pipe; ?>
        </li>
        <?php
    endforeach;
    ?>
</ul>
