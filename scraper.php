<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';


$MAX_ID = 3;


($id = 1; $id <= $MAX_ID; $id++)
{
    $MyWebsite = 'http://www.mciindia.org/ViewDetails.aspx?ID=999';
 $html  = file_get_html($MyWebsite);
 print $html;
  
}
  ?>





