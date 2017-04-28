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
        //   MAHMUDUL   HASAN   KHAN   w3schools.com
        
        function convert_space($string)
        {
            return str_replace("_", " ", $string);
        }
        
        $string = "We_love_Bangladesh!_This_is_our_motherland.";
        echo filter_var($string, FILTER_CALLBACK, array("options"=>"convert_space"));
        
        ?>
    </body>
</html>
