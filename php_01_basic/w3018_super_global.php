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
        
        $x = 75;
        $y = 25;
        
        function addition()
        {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        
        addition();
        echo "$z";
        ?>
    </body>
</html>
