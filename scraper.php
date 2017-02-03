<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';


//$MAX_ID = 3;

    $html = 'http://www.mciindia.org/ViewDetails.aspx?ID=999';

$dom = new simple_html_dom();
$dom->load($html);



 echo $html->find("//span[@id='Name']", 0) . '<br/>';
 echo $html->find("//span[@id='FatherName']", 0) . '<br/>';
 echo $html->find("//span[@id='DOB']", 0) . '<br/>';
 echo $html->find("//span[@id='lbl_Info']", 0) . '<br/>';
 echo $html->find("//span[@id='Regis_no']", 0) . '<br/>';
 echo $html->find("//span[@id='Date_Reg']", 0) . '<br/>';  

  ?>





