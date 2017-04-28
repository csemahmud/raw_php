<?php

setcookie("user", "", time()-60*60*24*30);

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
        
        if (!isset($_COOKIE["user"]))
            echo "<p>user   Cookie   has   been   deleted</p>";
        else
            echo "<p>Refresh   this  page   to   Delete   user   Coookie</P>";
        ?>
        
        <p>
            <a href="w3030a_cookies.php" target="_blank">Set   user   Cookie   again</a>
        </p>
    </body>
</html>
