<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   w3schools.com   

$xml_doc = new DOMDocument();
$xml_doc->load('documents/links.xml');

$link_elements = $xml_doc->getElementsByTagName('link');

//   Get   the   q   parameter   from   URL

$title_q = $_GET['q'];

//   look   up  all   links   of   xml   file   if   length   of   $title>0

if(strlen($title_q)>0){
    $hint = '';
    for ($i = 0; $i<$link_elements->length; $i++){
        $title_elements = $link_elements->item($i)->getElementsByTagName('title');
        $url_elements = $link_elements->item($i)->getElementsByTagName('url');
        if ($title_elements->item(0)->nodeType == 1){
            
            //   find   a   link   matching   the   search   text
            
            if(stristr($title_elements->item(0)->childNodes->item(0)->nodeValue, $title_q)){
                if($hint==''){
                    $hint = '<ul><li><a href="'.$url_elements->item(0)->childNodes->item(0)->nodeValue.'" target = "_blank">'
                            .$title_elements->item(0)->childNodes->item(0)->nodeValue.'</a></li>';
                }
                else {
                    $hint .= '<li><a href="'.$url_elements->item(0)->childNodes->item(0)->nodeValue.'" target = "_blank">'
                            .$title_elements->item(0)->childNodes->item(0)->nodeValue.'</a></li>';
                }
            }
        }
    }
}

//   set   output   to   "No  suggestion"  if   no   hint   were   found
//   or   to   the   correct   values

if ($hint==''){
    echo 'no   suggestion';
}
 else {
    echo "$hint</ul>";
}

?>
