#!/usr/bin/php
<?php
require_once ("clientDB.php.inc");
$testDataBase = new clientDB();
$testDataBase->addNewClient('Jay','jaywan');
?>