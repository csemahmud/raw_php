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
        
        for($x = 0; $x<=10; $x++)
        {
            echo "The   number   is   $x<br>";
        }
        echo "<hr/>";
        $colors = array("red","blue","green","yellow");
        foreach ($colors as $key=>$value)
        {
            echo "color : $key => value : $value<br>";
        }
        
        ?>
    </body>
</html>
