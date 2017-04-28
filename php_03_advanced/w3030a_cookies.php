<?php

setcookie("user", "Mahmudul   Hasan   Khan", time()+60*60*24*30);

?>

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
        
        if (isset($_COOKIE["user"]))
            echo "<p>Welcome ! ".$_COOKIE["user"]."</p>";
        else 
            echo "<p>Refresh   this  page   to   Set   user   Coookie</P>";
        
        echo "<p>All   the   Cookies  of  this  page   are : </p>";
        
        print_r($_COOKIE);
        ?>
        
        <p>
            <a href="w3030b_delete_cookie.php" target="_blank">Delete   User   Cookie</a>
        </p>
    </body>
</html>
