<?php
	include "simple_html_dom.php";
	$MyWebsite = ("http://www.mciindia.org/ViewDetails.aspx?ID=");
	$MAX_ID = 3;
	
	for ($pageLoop = 1; $pageLoop <= $MAX_ID; $pageLoop++) {
		$html  = file_get_html($MyWebsite . $pageLoop);
		if ($html) {
             $info['$Name']			=	$html->find("//span[@id='Name']", 0);
	     $info['$FName']			=	$html->find("//span[@id='FatherName']", 0);
	    $info['$DOB']			=	$html->find("//span[@id='DOB']", 0);
	    $info['$lblinfo']			=	$html->find("//span[@id='lbl_Info']", 0);
	    $info['$reginfo']			=	$html->find("//span[@id='Regis_no']", 0);
	    $info['$Datereg']			=	$html->find("//span[@id='Date_Reg']", 0);
            $info['$state']			=	$html->find("//span[@id='Lbl_Council']", 0);
            $info['$qua']			=	$html->find("//span[@id='Qual']", 0);
            $info['$quayear']			=	$html->find("//span[@id='QualYear']", 0);
            $info['$University']		=	$html->find("//span[@id='Univ']", 0);
            $info['$address']			=	$html->find("//span[@id='Address']", 0);



             scraperwiki::save_sqlite(array('mci_snum','registration_number'), 
    	array('mci_snum' => $id, 
          'name' => (trim($info['doc_name'])), 
          'fathers_name' => (trim($info['doc_fname'])),
          'date_of_birth' => (trim($info['doc_dob'])),
          'information_year' => (trim($info['doc_infoyear'])),
          'registration_number' => (trim($info['doc_regnum'])),
          'date_of_reg' => (trim($info['doc_datereg'])),
          'council' => (trim($info['doc_council'])),
          'qualifications' => (trim($info['doc_qual'])),
          'qualification_year' => (trim($info['doc_qualyear'])),
          'permanent_address' => (trim($info['doc_address']))
    ));
    
  //clean out the dom
  $dom->__destruct();
							


                

			}
		}
	}
?>
