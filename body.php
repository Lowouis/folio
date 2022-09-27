<?php
$menu = ["HOME","ABOUT", "PROJECTS","PERKS","CONTACT"];
?>
<body>

    <div class="empty-bar"></div>
    <div class="menu" >
        <?php for($i=0;$i<sizeof($menu);$i++) : ?>
        <a data-tilt data-tilt-scale="1.1"><?= $menu[$i]?></a>
        <?php endfor ?>
    </div>




</body>