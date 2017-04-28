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
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   w3schools.com

        //   create   connection
        $connection = mysqli_connect($_SERVER["SERVER_NAME"],"root","");

        //   check   connection
        if(mysqli_connect_errno())
            echo "<p>Failed   to   connect   to   MySQL : ERROR   No.# : ".mysqli_connect_errno()
                ." ERROR : ".mysqli_connect_error()."</p>";

        //   create   database
        $sql1 = "CREATE DATABASE db_pw3s_php_04_database";

        //   execute   query
        if(mysqli_query($connection,$sql1))
            echo "<p>Database : db_pw3s_php_04_database has been created successfully .</p>";
        else {
            echo "<p>Error   creating   DataBase : ERROR No.# : ".mysqli_errno($connection)
                    ." ERROR : ".mysqli_error($connection)."</p>";
}

        mysqli_close($connection);

        //   create   connection2

        require './w3037a_connection.php';

        $connection2 = connect_db();

        //   create   table
        $sql2 = "CREATE TABLE persons
            (
                persons_id INT NOT NULL AUTO_INCREMENT,
                PRIMARY KEY(persons_id),
                first_name CHAR(20),
                last_name CHAR(15),
                age INT
            )";

        //   execute   query
        if(mysqli_query($connection2,$sql2))
            echo "<p>Table : persons has been created successfully .</p>";
        else {
            echo "<p>Error   creating   Table : ERROR No.# : ".mysqli_errno($connection2)
                ." ERROR : ".mysqli_error($connection2)."</p>";
        }

        mysqli_close($connection2);
        ?>
        <br/>
        <a href="index.html">Back</a>
    </body>
</html>
