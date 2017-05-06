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
        <h3>According   to  time  in   Bangladesh : </h3>
        
        <?php
        //   MAHMUDUL   HASAN   KHAN   w3schools.com
        
        $yesterday = mktime(0,0,0,date("m"),date("d")-1,date("Y"));
        echo "<p>Yesterday   was : ".date("d/m/y", $yesterday)."</p>";
        echo "<p>Today   is : ".  \date("D - M - d - Y   H:i:s", 
                strtotime(date("Y-m-d H.i.s").' + 6 hour'))."</p>";
        echo "<p>Tomorrow   will   be : ".date("Y.m.d", 
                strtotime(date("Y-m-d H.i.s").' + 1 day'))."</p>";
        
        ?>
        
        <p>Warning : There   is   some   bugs   Left   intentionally   !!!</p>
    </body>
</html>
