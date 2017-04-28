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
        
        $x = 10;
        $y = 6;
        
        echo ($x + $y),"<br>",($x - $y),"<br>",($x * $y),
                "<br>",($x / $y),"<br>",($x % $y),"<br><hr/>";
        echo ($x+=10),"<br>",($x-=6),"<br>",($x*=10),"<br>",
                ($x/=6),"<br>",($x%=10),"<br><hr/>";
        echo $x++,"<br>",++$x,"<br>",$x--,"<br>",--$x,"<br><hr/>";
        
        $x = "Hello";
        $y = $x." world   !!!";
        echo $y,"<br>";   //   outputs   "Hello world   !!!"
        $x .= " world   !!!";
        echo $x,"<br><hr/>";   //   outputs   "Hello world   !!!"
        
        $x = array("a"=>"red","b"=>"green");
        $y = array("c"=>"red","d"=>"green");
        $z = $x + $y;
        var_dump($z);
        echo "<br>";
        var_dump($x==$y);
        echo "<br>";
        var_dump($x===$y);
        echo "<br>";
        var_dump($x!=$y);
        echo "<br>";
        var_dump($x<>$y);
        echo "<br>";
        var_dump($x!==$y);
        echo "<br>";
        ?>
    </body>
</html>
