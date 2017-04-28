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
        //    MAHMUDUL   HASAN   KHAN   w3schools.com
        
        $x = 5;   //   global   scope
        $txt = "<h1>Heading   1</h1>";   //   global   scope
        
        echo "<p>Before   calling   the   function</p>";
        echo "Variable   x   is : $x";
        
        function myTest(){
            $y = -10.05;   //   local   scope
            
            $GLOBALS['x'] = $GLOBALS['x'] + $y;
            
            echo "<p>Test   variables   inside   the   function</p>";
            echo "Variable   Global   txt   is : ".$GLOBALS['txt'];
            echo "Variable   x   is : $x";
            echo '<br>';
            echo "Variable   y   is : $y";
            
            global $x;
            $x = $x + $y;
        }
        
        myTest();
        
        echo "<p>Test   variables   outside   the   function</p>";
        echo "Variable   x   is : $x";
        echo '<br>';
        echo "Variable   y   is : $y";
        
        ?>
    </body>
</html>
