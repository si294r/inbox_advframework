<?php

include("/var/www/mysql-config2.php");

$mydatabase = $IS_DEVELOPMENT ? "advframeworkdev" : "advframework";


define('CACHE_USER_DEV', "advdev_user_");
define('CACHE_USER', "adv_user_");

