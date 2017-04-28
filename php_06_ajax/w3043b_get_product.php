<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   w3schools.com   

$xml_doc = new DOMDocument();

$xml_doc->load('documents/product_catalog.xml');

$product_id = $_GET['q'];

$category_elements = $xml_doc->getElementsByTagName('product_id');
$siblings = NULL;

for ($i = 0; $i<$category_elements->length; $i++){
    if($category_elements->item($i)->nodeValue==$product_id){
        $siblings = $category_elements->item($i)->parentNode->childNodes;
    }
}

echo '<ul>';

for ($i = 1; $i<$siblings->length; $i+=2){
    echo '<li><strong>'.$siblings->item($i)->nodeName.' : </strong><i>'
            .$siblings->item($i)->nodeValue.'</i></li>';
}

echo '<li><strong>'.$siblings->item(1)->parentNode->parentNode->parentNode->childNodes->item(1)->nodeName.' : </strong><i>'
            .$siblings->item(1)->parentNode->parentNode->parentNode->childNodes->item(1)->nodeValue.'</i></li>';

echo '<li><strong>'.$siblings->item(1)->parentNode->parentNode->childNodes->item(1)->nodeName.' : </strong><i>'
            .$siblings->item(1)->parentNode->parentNode->childNodes->item(1)->nodeValue.'</i></li>';

echo '</ul>';

?>
