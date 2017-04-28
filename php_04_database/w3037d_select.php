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
        
        <form action="w3037d_select.php" method="post">
        
            <table>
            
                <tr>
                
                    <td></td>
                    <td><strong>Enter   the   range   for   Age : </strong></td>
                
                </tr>
                <tr>
                
                    <td><strong>Lower   Limit</strong></td>
                    <td><input type="number" name="lower_limit" value="0"></td>
                
                </tr>
                <tr>
                
                    <td><strong>Upper   Limit</strong></td>
                    <td><input type="number" name="upper_limit" value="80"></td>
                
                </tr>
                <tr>
                
                    <td></td>
                    <td>
                    
                        <input type="submit" name="range_btn" value="Show according to range">   |   
                        <input type="submit" name="refresh_btn" value="Refresh">
                    
                    </td>
                
                </tr>
            
        </table>
        
        </form>
        
        <table border="1" padding="10px">
        
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   w3schools.com
        
        require './w3037a_connection.php';
        
        $connection = connect_db();
        
        if(isset($_POST["refresh_btn"]))
            $_POST["range_btn"] = NULL;
        
        if (isset($_POST["range_btn"])&&isset($_POST["upper_limit"])&&isset($_POST["lower_limit"]))
            $result= mysqli_query($connection, "SELECT * FROM persons 
                WHERE age <= $_POST[upper_limit] AND age >= $_POST[lower_limit] ORDER BY age");
        else {
            $result= mysqli_query($connection, "SELECT * FROM persons");
        }
        
        $row = mysqli_fetch_array($result);
        
        echo "<tr>";
        
        foreach ($row as $key=>$value)
        {
            echo "<th>$key</th>";
        }
        
        echo "</tr>";
        
        echo "<tr>";
        
        foreach ($row as $key=>$value)
        {
            echo "<td>$value</td>";
        }
        
        echo '<td><a href="w3037e_details.php?persons_id='.$row[0].'" target="_blank">Details</a></td></tr>';
        
        while ($row = mysqli_fetch_array($result))
        {
            
            echo "<tr>";
        
            foreach ($row as $key=>$value)
            {
                echo "<td>$value</td>";
            }
        
            echo '<td><a href="w3037e_details.php?persons_id='.$row[0].'" target="_blank">Details</a></td></tr>';
        }
        
        mysqli_close($connection);
        ?>
            
        </table>
        
        <br/>
        <a href="index.html">Back</a>
        
    </body>
</html>
