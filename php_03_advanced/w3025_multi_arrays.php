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
        <ul type="square">
            
        <?php
        //   MAHMUDUL   HASAN   KHAN   w3schools.com
        
        $cars = array(
            array("Volvo",100,96),
            array("BMW",60,59),
            array("Toyota",110,100)
        );
        
        for ($i = 0; $i<count($cars);  $i++)
            echo "<li>".$cars[$i][0]." : Ordered : ".$cars[$i][1].", Sold : ".$cars[$i][2]."</li>";
        ?>
            
        </ul>
        
        <hr/>
        
        <ol type="a">
            
            <?php 
            
            
        $cars = array(
            "Volvo" => array(100,96),
            "BMW" => array(60,59),
            "Toyota" => array(110,100)
        );
        
        foreach ($cars as $key => $values)
            echo "<li>$key : Ordered : $values[0], Sold : $values[1]</li>";
            
            ?>
            
        </ol>
    </body>
</html>
