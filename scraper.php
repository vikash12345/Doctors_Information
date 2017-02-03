<?php
include "simple_html_dom.php";

//$MAX_ID = 3;

   $MyWebsite = ("http://www.mciindia.org/ViewDetails.aspx?ID=1");
   $html  = file_get_html($MyWebsite);
    


echo $Name =     $html->find("//span[@id='Name']", 0) . '<br/>';
echo $FName =    $html->find("//span[@id='FatherName']", 0) . '<br/>';
echo $DOB =      $html->find("//span[@id='DOB']", 0) . '<br/>';
echo $lblinfo =  $html->find("//span[@id='lbl_Info']", 0). '<br/>';
echo $reginfo =  $html->find("//span[@id='Regis_no']", 0) . '<br/>';
echo $Datereg = $html->find("//span[@id='Date_Reg']", 0) . '<br/>';  


if ($Name && $FName && $DOB && $$lblinfo && $reginfo && $Datereg) {
    
   
echo  $Name->plaintext . ' -->' . $FName->plaintext . ' -->' . $DOB->plaintext . ' -->' . $$lblinfo->plaintext . ' -->' . $reginfo->plaintext . ' -->' . $Datereg->plaintext; 
    
   
   echo '<br/>';
   }

?>
