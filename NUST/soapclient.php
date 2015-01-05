<?php
//$options = array("location" => "http://203.99.61.82/umair/thesis/uni_soap_server/soapserver.php", "uri" => "http://localhost");
$options = array("location" => "http://localhost/thesis/uni_soap_server/soapserver.php", "uri" => "http://localhost");
try {
	$client = new SoapClient(null, $options);
	//$student = $client->makeAgreement();
	
	if (isset($_GET['operation']) && $_GET['operation'] == 'findStudent') {
		$student = $client->findStudent(1);
		header("Content-type: text/xml");
		echo $student;		
	
	} else if (isset($_GET['operation']) && $_GET['operation'] == 'checkRegistration') {
		$student = $client->checkRegistration(1);
		header("Content-type: text/xml");
		echo $student;		
	
	}  else if (isset($_GET['operation']) && $_GET['operation'] == 'validateDegree') {
		$student = $client->validateDegree(1);
		header("Content-type: text/xml");
		echo $student;		
	
	} 
	
	//var_dump($student);
} catch (SoapFault $e) {
	//echo 1;exit();
	var_dump($e);
}
?>