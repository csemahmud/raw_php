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
        
        $x = 6;
        
        while ($x)
            echo "The   number   is   ",$x--,"<br>";
        echo "<hr/>";
        do
            {
            echo 'The   number   is   ',$x++,'<br>';
            }
            while ($x<=6);
        echo "<hr/>";
        do
            {
            echo "The   number   is   $x";
            }
            while ($x<=3);
        
        ?>
    </body>
</html>
