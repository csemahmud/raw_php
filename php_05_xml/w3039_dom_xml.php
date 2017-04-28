<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   w3schools.com   
        
        $xml_doc = new DOMDocument();
        $xml_doc->load("documents/first_message.xml");
        
        echo $xml_doc->saveXML()."<hr/>";
        
        $x = $xml_doc->documentElement;
        foreach ($x->childNodes as $items){
            echo $items->nodeName." : ".$items->nodeValue;
            $child_items = $items->childNodes;
            if($child_items!=NULL)
            {
                echo "<ul>";
                foreach ($child_items as $child_item) {
                    echo "<li>".$child_item->nodeName." : ".$child_item->nodeValue."</li>";
                }
                echo "</ul>";
            }
            echo "<hr/>";
        }
        
        ?>
    </body>
</html>
