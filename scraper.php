<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';


//$MAX_ID = 3;

   $MyWebsite = ("http://www.mciindia.org/ViewDetails.aspx?ID=".$id);
   $html  = file_get_html($MyWebsite);
    


$Name =     $html->find("//span[@id='Name']", 0) . '<br/>';
$FName =    $html->find("//span[@id='FatherName']", 0) . '<br/>';
$DOB =      $html->find("//span[@id='DOB']", 0) . '<br/>';
$lblinfo =  $html->find("//span[@id='lbl_Info']", 0). '<br/>';
$reginfo =  $html->find("//span[@id='Regis_no']", 0) . '<br/>';
$Datereg = $html->find("//span[@id='Date_Reg']", 0) . '<br/>';  


if ($Name && $FName && $DOB && $$lblinfo && $reginfo && $Datereg) {
    print $Name->plaintext . ' --> ' . $FName->plaintext; . ' --> ' . $DOB->plaintext;. ' --> ' . $lblinfo->plaintext;. ' --> ' . $reginfo->plaintext;. ' --> ' . $Datereg->plaintext;. ' --> '
    echo '<br/>';
   }

?>
