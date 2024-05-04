<?php

include('./assets/function.php');
$func = new MyFunction('./assets/config.php', "About Monster2408");

$func->addStyle('/assets/css/style.min.css');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
    <head>
        <?php $func->printMetaData(); ?>
    </head>
    <body>
        <?php include('./assets/include/header.php'); ?>
        <div class="contents d-flex align-items-center p-1">
            <?php include('./assets/include/profile.php'); ?>
        </div>
        <?php include('./assets/include/footer.php'); ?>
    </body>
</html>