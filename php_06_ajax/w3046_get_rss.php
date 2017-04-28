<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   w3schools.com   

//   Get   the   parameter   from   URL

$title_q = $_GET['q'];

switch ($title_q) {
    case 'Google':
        $url = 'https://news.google.com/news/feeds?ned=us&topic=h&output=rss';
        break;
    case 'MSNBC':
        $url = 'http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml';
        break;
    case 'ESPN':
        $url = 'http://sports.espn.go.com/espn/rss/news';
        break;
}

$xml_doc = new DOMDocument();
$xml_doc->load($url);

//   Get   elements   from   '<channel>'

$channel = $xml_doc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
        ->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
        ->item(0)->childNodes->item(0)->nodeValue;
$channel_description = $channel->getElementsByTagName('description')
        ->item(0)->childNodes->item(0)->nodeValue;

//   output   elements   from   '<channel>'

echo ('<p><a href = "'.$channel_link.'">'.$channel_title.'</a>');
echo ('<br/>');
echo ($channel_description.'</p>');

$x = $xml_doc->getElementsByTagName('item');
for ($i = 0; $i<=2; $i++){
    $item_title = $x->item($i)->getElementsByTagName('title')
            ->item(0)->childNodes->item(0)->nodeValue;
    $item_link = $x->item($i)->getElementsByTagName('link')
            ->item(0)->childNodes->item(0)->nodeValue;
    $item_description = $x->item($i)->getElementsByTagName('description')
            ->item(0)->childNodes->item(0)->nodeValue;

    //   output   elements   from   '<item>'

    echo ('<p><a href = "'.$item_link.'">'.$item_title.'</a>');
    echo ('<br/>');
    echo ($item_description.'</p>');

}
?>
