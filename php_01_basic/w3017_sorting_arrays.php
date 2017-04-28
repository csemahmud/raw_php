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
        
        $mobiles = array("Symphony","Walton","Nokia","Samsung");
        sort($mobiles);
        echo "Ascending : ";
        for($i = 0; $i<count($mobiles); $i++)
            echo "$mobiles[$i],   ";
        rsort($mobiles);
        echo "<br>Descending : ";
        for($i = 0; $i<count($mobiles); $i++)
            echo "$mobiles[$i],   ";
        
        $numbers = array("-4.2",6,-2,22.5,"11",-4.201,22.501,-50,50.5,"ASD","ZXC","Zxc","aSd");
        sort($numbers);
        echo "<br><hr/>Ascending : ";
        for($i = 0; $i<count($numbers); $i++)
            echo "$numbers[$i],   ";
        rsort($numbers);
        echo "<br>Descending : ";
        for($i = 0; $i<count($numbers); $i++)
            echo "$numbers[$i],   ";
        
        $age = array("Shahrukh"=>37,"Aamir"=>"35","Badshah"=>43);
        asort($age);
        echo "<br><hr/>Ascending   Value : ";
        foreach ($age as $key => $value) {
            echo "<br>Key : $key,   Value : $value";
        }
        
        ksort($age);
        echo "<br><hr/>Ascending   Key : ";
        foreach ($age as $key => $value) {
            echo "<br>Key : $key,   Value : $value";
        }
        
        arsort($age);
        echo "<br><hr/>Descending   Value : ";
        foreach ($age as $key => $value) {
            echo "<br>Key : $key,   Value : $value";
        }
        
        krsort($age);
        echo "<br><hr/>Descending   Key : ";
        foreach ($age as $key => $value) {
            echo "<br>Key : $key,   Value : $value";
        }
        ?>
    </body>
</html>
