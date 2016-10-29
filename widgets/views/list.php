<?php


//var_dump($vitaminka);

?>
<div class = 'row'>
    <?php foreach ($vitaminka as $value){?>
    <div class = 'col-sm-3'>   
        <?= $value->name;?>
    </div>
    <?php } ?>
</div>