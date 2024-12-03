<?php
$uniqidLast = ('localhost:8002'==$_SERVER['HTTP_HOST']) ? uniqid() : '0';
define('THEME_VERSION', '1.0.'.$uniqidLast);

include_once 'inc/finction-init.php';
include_once 'inc/finction-admin.php';
