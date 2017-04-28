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
        
        //   define   a   case - insensitive   constant
        define("GREETING1","Welcome to W3Schools.com");
        echo GREETING1;
        echo "<br>";
        //   will   not   output   the   value   of   constant
        echo greeting1;
        echo "<br><hr/>";
        define("GREETING2","Welcome to W3Schools.com",TRUE);
        echo GREETING2;
        echo "<br>";
        //   will   also   output   the   value   of   constant
        echo greeting2;
        ?>
    </body>
</html>
