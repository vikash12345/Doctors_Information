<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_html.php';


$MAX_ID = 3;
for($id = 1; $id <= $MAX_ID; $id++)
{
   $MyWebsite = ("http://www.mciindia.org/ViewDetails.aspx?ID=".$id);
   $html  = file_get_html($MyWebsite);
    


   echo $info['doc_name'] = $html->find('span[id=Name]')->plaintext;
   echo $info['doc_fname'] = $html->find('span[id="FatherName"]')->plaintext;
   echo $info['doc_dob'] = $html->find('span[id="DOB"]')->plaintext;
   echo $info['doc_infoyear'] = $html->find('span[id="lbl_Info"]')->plaintext;
   echo $info['doc_regnum'] = $html->find('span[id="Regis_no"]')->plaintext;
   echo $info['doc_datereg'] = $html->find('span[id="Date_Reg"]')->plaintext;
   echo $info['doc_council'] = $html->find('span[id="Lbl_Council"]')->plaintext;
   echo $info['doc_qual'] = $html->find('span[id="Qual"]')->plaintext;
   echo $info['doc_qualyear'] = $html->find('span[id="QualYear"]')->plaintext;
   echo $info['doc_univ'] = $html->find('span[id="Univ"]')->plaintext;
   echo $info['doc_address'] = $html->find('span[id="Address"]')->plaintext;
}
?>
