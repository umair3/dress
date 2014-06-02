<?php

// fetches data from university database and provide to soap server

class DataProvider
{
	public function makeAgreement () {
		return array ("test1","test2");
	}
	
	public function findStudent (string $search_string, string $search_criteria, string $institute) {
		//return array ("test1","test2");
		/*$doc.= '<tns:DocType>Registration</DocType>';
		$doc.= '<tns:SerialNo>Registration</SerialNo>';
		$doc.= '<tns:Date>Registration</Date>';*/
		
		
		$doc.= '<xml>';
		$doc.= '<documentType>REG</documentType>';
		$doc.= '<serialNo>17654</serialNo>';
		$doc.= '<registrationNo>2011-NUST-MS PhD-IT-049</registrationNo>';
		$doc.= '<date>2004-12-12</date>';
		$doc.= '<firstName>Umair</firstName>';
		$doc.= '<lastName>Anwar</lastName>';
		$doc.= '<institute>NUST</institute>';
		$doc.= '<image></image>';
		$doc.= '</xml>';
		
		return $doc;
	}
	
	public function validateDegree($doc_type) {
		// return array ("test1","test2");
		
		// Get Degree Map array
		/*$map = $this->mapper_model->getMap('DEGREE');
		
		$map['documentType'];
		
		// Tags linked to same table should be in one query.
		foreach ($map as $tag) {
			//get table name
			
		}*/
		
		/*
		[
		table: t1,
		column: c1
		]
		*/
		
		$doc.= '<xml>';
		$doc.= '<documentType>DEGREE</documentType>';
		$doc.= '<level>16-YEARS</level>';
		$doc.= '<examSystem>SEMESTER</examSystem>';
		$doc.= '<title>Master of Science in Information Technology</title>';
		$doc.= '<serialNo>012466</serialNo>';
		$doc.= '<registrationNo>0810256230</registrationNo>';
		$doc.= '<rollNo>0810256230</rollNo>';
		$doc.= '<date>2004-12-12</date>';
		$doc.= '<firstName>Umair</firstName>';
		$doc.= '<lastName>Anwar</lastName>';
		$doc.= '<institute>UOG</institute>';
		$doc.= '<image>https://drive.google.com/file/d/0BxY0BVINEp7NMDVlOGVjY2ItODJjNi00ZGE5LTlmOTQtNTc5OGU5MDkyM2Uz/edit?usp=sharing</image>';
		$doc.= '</xml>';
		
		return $doc;
	}
	
	public function checkRegistration($search_string, $search_criteria, $institute){
		
		//$registration_card_details_array = array();
		$doc.= '<xml>';
		$doc.= '<documentType>REG</documentType>';
		$doc.= '<serialNo>17654</serialNo>';
		$doc.= '<registrationNo>2011-NUST-MS PhD-IT-049</registrationNo>';
		$doc.= '<date>2004-12-12</date>';
		$doc.= '<firstName>Umair</firstName>';
		$doc.= '<lastName>Anwar</lastName>';
		$doc.= '<institute>NUST</institute>';
		$doc.= '<image></image>';
		$doc.= '</xml>';
		//return array ("test1","test2");
		
		return $doc;
	}

}

?>
