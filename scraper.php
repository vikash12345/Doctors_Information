<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';


//$MAX_ID = 3;

   $MyWebsite = ("http://www.mciindia.org/ViewDetails.aspx?ID=".$id);
   $html  = file_get_html($MyWebsite);
    


echo $Name =     $html->find("//span[@id='Name']", 0)->plaintext; . '<br/>';
echo $FName =    $html->find("//span[@id='FatherName']", 0)->plaintext; . '<br/>';
echo $DOB =      $html->find("//span[@id='DOB']", 0)->plaintext; . '<br/>';
echo $lblinfo =  $html->find("//span[@id='lbl_Info']", 0)->plaintext;. '<br/>';
echo $reginfo =  $html->find("//span[@id='Regis_no']", 0)->plaintext; . '<br/>';
echo $Date-reg = $html->find("//span[@id='Date_Reg']", 0) ->plaintext;. '<br/>';  

?>
