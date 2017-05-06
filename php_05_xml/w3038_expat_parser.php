<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">
            
            #root{
                float: left;
                display: block;
                background-color: #000066;
                color: #ffff99;
                margin: 50px;
                padding: 10px;
                width: 500px;
                border-radius: 30px;
                text-align: center;
            }
            
            #root table{
                width: 100%;
                text-align: left;
            }
            
            #root table tr{
                width: 100%;
            }
            
            #root table tr td{
                border-color: #ffff99;
                border-width: 2px;
                border-style: dotted;
                padding: 2px;
            }
            
            strong{
                font-weight: 900;
                font-family: sans-serif;
            }
            
            i{
                font-style: italic;
                font-family: cursive;
            }
            
        </style>
    </head>
    <body>
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   w3schools.com   
        
        //   Initialize   the   XML   parser
        
        $parser = xml_parser_create();
        
        //   Function   to   use   at   the   start   of   an   element
        
        function start_element_handler($parser,$element_name,$element_attrs){
            switch ($element_name){
                case "ROOT":
                    echo "<div id = 'root'>";
                    break;
                case "NOTE":
                    echo "<h3>   -----   Note   -----   </h3><table>";
                    break;
                case "TO":
                    echo "<tr><td><strong>   To : </strong></td><td><i>";
                    break;
                case "FROM":
                    echo "<tr><td><strong>   From : </strong></td><td><i>";
                    break;
                case "HEADING":
                    echo "<tr><td><strong>   Heading : </strong></td><td><i>";
                    break;
                case "BODY":
                    echo "<tr><td><strong>   Message : </strong></td><td><i>";
                    break;
            }
        }
        
        //   Function   to   use   at   the   end   of   an   element
        
        function end_element_handler($parser,$element_name){
            switch ($element_name){
                case "ROOT":
                    echo "</div>";
                    break;
                case "NOTE":
                    echo "</table><hr/>";
                    break;
                default :
                    echo "</i></td></tr>";
            }
        }
        
        //   Function   to   use   when   finding   character   data
        
        function data_handler($parser,$data){
            echo "$data";
        }
        
        //   Specify   element   handler
        
        xml_set_element_handler($parser, "start_element_handler", "end_element_handler");
        
        //   Specify   data   handler
        
        xml_set_character_data_handler($parser, "data_handler");
        
        //   Open   XML   file
        
        $handle = fopen("documents/first_message.xml", "r");
        
        //   Read   data
        
        while ($data = fread($handle, 4096)){
            xml_parse($parser, $data, feof($handle)) or
            die(sprintf("XML   ERROR : %s AT LINE : %d",
                    xml_error_string(xml_get_error_code($parser)),
                    xml_get_current_line_number($parser)));
        }
        
        //   Free   the   XML   parser
        
        xml_parser_free($parser);
        
        ?>
    </body>
</html>
