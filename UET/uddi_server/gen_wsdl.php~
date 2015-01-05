<?php
require("WSDLCreator.php");

$className = 'dataprovider';

$s = sprintf("%s", Php2WSDL::genWSDL($className));

header("Content-Type: text/xml");
header(sprintf("Content-Length: %d", strlen($s)));
printf("%s", $s);

?>
