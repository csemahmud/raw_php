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
        
        $xml = simplexml_load_file("documents/first_message.xml");
        echo "<pre>";
        print_r($xml);
        echo "</pre><hr/>";
        
        echo "<ul>";
        
        echo "<li>$xml->comment</li>";
        echo "<li>".$xml->note[0]->to."</li>";
        echo "<li>".$xml->note[0]->from."</li>";
        echo "<li>".$xml->note[0]->heading."</li>";
        echo "<li>".$xml->note[0]->body."</li>";
        echo "<li>".$xml->note[1]->to."</li>";
        echo "<li>".$xml->note[1]->from."</li>";
        echo "<li>".$xml->note[1]->heading."</li>";
        echo "<li>".$xml->note[1]->body."</li>";
        
        echo "</ul><hr/>";
        
        echo "<ul>";
        
        echo "<li>".$xml->getName()."</li>";
        
        foreach ($xml->children() as $child1)
        {
            echo "<li>".$child1->getName()."</li>";
            foreach ($child1->children() as $child2) {
            echo "<li>".$child2->getName()." : ".$child2."</li>";
            }
        }
        
        ?>
    </body>
</html>
