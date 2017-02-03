<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';


/$MAX_ID = 3;
for($id = 1; $id <= $MAX_ID; $id++)
{
   $MyWebsite = ("http://www.mciindia.org/ViewDetails.aspx?ID=".$id);
   $html  = file_get_html($MyWebsite);
    


   echo $info['doc_name'] = $dom->find('span[id=Name]')->plaintext;
   echo $info['doc_fname'] = $dom->find('span[id="FatherName"]')->plaintext;
   echo $info['doc_dob'] = $dom->find('span[id="DOB"]')->plaintext;
   echo $info['doc_infoyear'] = $dom->find('span[id="lbl_Info"]')->plaintext;
   echo $info['doc_regnum'] = $dom->find('span[id="Regis_no"]')->plaintext;
   echo $info['doc_datereg'] = $dom->find('span[id="Date_Reg"]')->plaintext;
   echo $info['doc_council'] = $dom->find('span[id="Lbl_Council"]')->plaintext;
   echo $info['doc_qual'] = $dom->find('span[id="Qual"]')->plaintext;
   echo $info['doc_qualyear'] = $dom->find('span[id="QualYear"]')->plaintext;
   echo $info['doc_univ'] = $dom->find('span[id="Univ"]')->plaintext;
   echo $info['doc_address'] = $dom->find('span[id="Address"]')->plaintext;
}
?>
