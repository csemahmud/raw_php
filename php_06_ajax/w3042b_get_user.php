<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   w3schools.com   
        
        $q = intval($_GET['q']);

        //   create   connection2
        $connection2 = mysqli_connect($_SERVER['SERVER_NAME'],'root','','db_pw3s_php_04_database');

        //   check   connection2
        if(mysqli_connect_errno())
            echo '<p>Failed   to   connect   to   MySQL : ERROR   No.# : '.mysqli_connect_errno()
                .' ERROR : '.mysqli_connect_error().'</p>';

        echo '<table border="1" padding="10px">';

        $result= mysqli_query($connection2, "SELECT * FROM persons WHERE persons_id = $q;");
        
        $row = mysqli_fetch_array($result);
        
        echo '<tr>';
        
        foreach ($row as $key=>$value)
        {
            echo "<th>$key</th>";
        }
        
        echo '</tr>';
        
        echo '<tr>';
        
        foreach ($row as $key=>$value)
        {
            echo "<td>$value</td>";
        }
        
        
        mysqli_close($connection2);
            
        echo '</table>';

?>
