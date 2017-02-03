<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';


$MAX_ID = 3;


or($id = 1; $id <= $MAX_ID; $id++)
{
    $html = scraperwiki::scrape("http://www.mciindia.org/ViewDetails.aspx?ID=".$id);
$dom = new simple_html_dom();
   $dom->load($html);
 echo $dom;
  
}
  ?>
