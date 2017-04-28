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
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            
            Name : <input type="text" name="fname">
            <input type="submit">
            
        </form>
        <?php
        //   MAHMUDUL   HASAN   KHAN   w3schools.com
        
        $name = $_REQUEST["fname"];
        if($name)
            echo "Hello,   $name   !!!";
        
        ?>
    </body>
</html>
