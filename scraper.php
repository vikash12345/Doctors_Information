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
            $state	=	$html->find("//span[@id='Lbl_Council']", 0);
            $qua	=	$html->find("//span[@id='Qual']", 0);
            $quayear	=	$html->find("//span[@id='QualYear']", 0);
            $University	=	$html->find("//span[@id='Univ']", 0);
            $address	=	$html->find("//span[@id='Address']", 0);



            
			
			if ($Name) {
		echo	'Name # : ' . $Name->plaintext . '<br/>';
  		echo	'Father Name # : ' . $FName->plaintext . '<br/>';
                echo    '$DOB # :' .$DOB->plaintext.'<br/>';
                echo    '$Lable-Info # :' .$lblinfo->plaintext.'<br/>';
                echo    '$Region-Information # :' .$reginfo->plaintext.'<br/>';
                echo    '$Date_Of Reg # :' .$Datereg->plaintext.'<br/>';
                echo    '$State # :' .$state->plaintext.'<br/>';
                echo    '$Qualification # :' .$qua->plaintext.'<br/>';
                echo    '$Qua_Year # :' .$quayear->plaintext.'<br/>';
                echo    '$University Name # :' .$University->plaintext.'<br/>';
                echo    '$Address Name # :' .$address->plaintext.'<br/>';


                

			}
		}
	}
?>
