<?php
include "simple_html_dom.php";

//$MAX_ID = 3;

   $MyWebsite = ("http://www.mciindia.org/ViewDetails.aspx?ID=1");
   $html  = file_get_html($MyWebsite);
    


 $Name =     $html->find("//span[@id='Name']", 0);
 $FName =    $html->find("//span[@id='FatherName']", 0);
 $DOB =      $html->find("//span[@id='DOB']", 0);
 $lblinfo =  $html->find("//span[@id='lbl_Info']", 0)'
 $reginfo =  $html->find("//span[@id='Regis_no']", 0);
 $Datereg = $html->find("//span[@id='Date_Reg']", 0);  


if ($Name && $FName && $DOB && $$lblinfo && $reginfo && $Datereg) {
    
   
echo  $Name . ' -->' . $FName . ' -->' . $DOB  . ' -->' . $lblinfo . ' -->' . $reginfo . ' -->' . $Datereg; 
    
   
   echo '<br/>';
   }

?>
