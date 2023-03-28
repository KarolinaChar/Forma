<?php 
//13 UZDUOTIS
?>
<p class="text-muted credit"> &copy;
    <?php
        $copyYear = 2015; 
        $curYear = date('Y'); 
        echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
    ?> 
</p>    