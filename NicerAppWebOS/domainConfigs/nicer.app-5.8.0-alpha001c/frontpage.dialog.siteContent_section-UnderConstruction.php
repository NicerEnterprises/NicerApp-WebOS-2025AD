<?php
$rootPath = realpath(dirname(__FILE__).'/../../../');

require_once ($rootPath.'/NicerAppWebOS/boot.php');
global $naWebOS;
require_once ($rootPath.'/NicerAppWebOS/domainConfigs/'.$naWebOS->domainFolder.'/mainmenu.items.php');
?>
