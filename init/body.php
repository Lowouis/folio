<?php
$menu = ["HOME","ABOUT", "PROJECTS","PERKS","CONTACT"];
?>
<body>
<div id="barbara-wrap" class="wrapper">
    <div class="barbara-container">
        <div class="menu-container">
            <div class="hi"><p data-tilt>Hi there, i'm <u>Louis</u></p></div>
            <div class="menu">
                <?php for($i=0;$i<sizeof($menu);$i++) : ?>
                <a data-tilt data-tilt-scale="1.1" href=<?= "../home/ " . strtolower($menu[$i]) . ".php"?> ><?= $menu[$i]?></a>
                <?php endfor ?>
            </div>
        </div>
    </div>
</div>


<div class="cursor-inner"></div>




</body>