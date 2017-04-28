<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   w3schools.com

function connect_db()
{
    
    //   create   connection
    $connection = mysqli_connect($_SERVER["SERVER_NAME"],"root","","db_pw3s_php_04_database");

    //   check   connection
    if(mysqli_connect_errno())
        echo "<p>Failed   to   connect   to   MySQL : ERROR   No.# : ".mysqli_connect_errno()
            ." ERROR : ".mysqli_connect_error()."</p>";
    
        return   $connection;
}
?>
