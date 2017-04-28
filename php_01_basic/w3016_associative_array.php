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
        
        $age = array("Mahmud"=>"23","Rafiq"=>"23","Zaman"=>"22");
        echo "Mahmud   is : ".$age["Mahmud"]."   years   old   .<br>";
        
        foreach ($age as $key=>$value)
        {
            echo 'Key : '.$key.", Value : ".$value.'<br>';
        }
        ?>
    </body>
</html>
