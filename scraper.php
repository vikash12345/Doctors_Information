<?php
	include "simple_html_dom.php";
	$MyWebsite = ("http://www.mciindia.org/ViewDetails.aspx?ID=");
	$MAX_ID = 3;
	
	for ($pageLoop = 1; $pageLoop <= $MAX_ID; $pageLoop++) {
		$html  = file_get_html($MyWebsite . $pageLoop);
		if ($html) {
			$Name		=	$html->find("//span[@id='Name']", 0);
			$FName		=	$html->find("//span[@id='FatherName']", 0);
			$DOB		=	$html->find("//span[@id='DOB']", 0);
			$lblinfo	=	$html->find("//span[@id='lbl_Info']", 0);
			$reginfo	=	$html->find("//span[@id='Regis_no']", 0);
			$Datereg	=	$html->find("//span[@id='Date_Reg']", 0);
			
			if ($Name) {
				echo	'Page # : ' . $pageLoop . '<br/>';
				echo	'Name # : ' . $Name->plaintext . '<br/>';
				echo	'<br/>\n';
			}
		}
	}
?>
