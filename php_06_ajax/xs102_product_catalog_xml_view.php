<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>product_catalog</title>
    </head>
    <body>
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   w3schools.com   
        
        // Load XML File
        $xml = new DOMDocument();
        $xml->load("documents/product_catalog.xml");
        
        // Load XSL File
        $xsl = new DOMDocument();
        $xsl->load("documents/product_catalog.xsl");
        
        // Configure the transformer
        $proc = new XSLTProcessor;
        
        // Attach the xsl rules
        $proc->importStylesheet($xsl);
        
        echo $proc->transformToXml($xml);
        ?>
    </body>
</html>
