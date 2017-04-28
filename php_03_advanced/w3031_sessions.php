<?php session_start();?>

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
        
        if(isset($_SESSION['views']))
        {
            echo "<p>Page   Views   =  ".$_SESSION['views']."</p>";
            unset($_SESSION['views']);
            echo "<p>Refresh   this   page   to   <b><i>Unset</i></b>   View   Session   !!!</p>";
        }
        else 
        {
            echo "<p>View   Session   is   Unset</p>";
            $_SESSION['views'] = 1;
            echo "<p>Refresh   this   page   to   <b><i>Set</i></b>   View   Session   !!!</p>";
        }
        ?>
    </body>
</html>
