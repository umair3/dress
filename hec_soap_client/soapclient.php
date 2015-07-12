<?php
//$options = array("location" => "http://203.99.61.82/umair/thesis/uni_soap_server/soapserver.php", "uri" => "http://localhost");
//$options = array("location" => "http://localhost/thesis/uni_soap_server/soapserver.php", "uri" => "http://localhost");
//$options = array("location" => "http://10.66.100.111/dressclient/dress-master/uni_soap_server/soapserver.php", "uri" => "http://localhost");

//$options = array("location" => "http://10.66.100.111/dressclient/dress-master/uni_soap_server/soapserver.php", "uri" => "http://localhost");
//http://10.66.100.111/dressclient/dress-master/uni_soap_server/gen_wsdl.php/

try {
	//$client = new SoapClient(null, $options);
	
	// Using WSDL Mode, Second parameter $options is optional in this mode.
	$client = new SoapClient("http://10.66.100.111/dressclient/dress-master/uni_soap_server/gen_wsdl.php/"); 
	
	//$student = $client->makeAgreement();
	
	//print_r($client->__getFunctions());
	//print_r($client);
	//print_r($client->__getTypes());
	$student = $client->validateDegree(1);
	//print_r($student);
	//exit;
	
	//print_r($client->__getFunctions());
	
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