<?php
$serverName = "UMAIRANWAR\SQLEXPRESS"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
//$connectionInfo = array( "Database"=>"node1");
$connection = array(
			'UID'				=> 'sa',
			'PWD'				=> 'umair1',
			'Database'			=> 'node1',
			'ConnectionPooling' => 0,
			//'CharacterSet'		=> $character_set,
			'ReturnDatesAsStrings' => 1
		);
$conn = sqlsrv_connect( $serverName, $connection);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
