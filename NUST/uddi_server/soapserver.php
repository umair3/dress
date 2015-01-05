<?php

require('dataprovider.php');
$options = array("uri" => "http://localhost");
$server = new SoapServer(null, $options);
$server->setClass('DataProvider');
$server->handle();

?>
