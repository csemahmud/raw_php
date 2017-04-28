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
        
        $my_cars = array("Ferrary","BMW","Toyota");
        echo "<h3>My   cars   are   :- </h3>";
        echo "<ul>";
        for ($x = 0; $x<count($my_cars); $x++)
        {
            echo "<li>$my_cars[$x]</li>";
        }
        echo "</ul>";
        ?>
    </body>
</html>
