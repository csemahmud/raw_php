<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Insert</title>
    </head>
    <body>
        <form action="w3037c_insert.php" method="post">
            
            <table>
                
                <tr>
                    
                    <td><strong>Fisrt   Name : </strong></td>
                    <td><input type="text" name="first_name"></td>
                    
                </tr>
                <tr>
                    
                    <td><strong>Last   Name : </strong></td>
                    <td><input type="text" name="last_name"></td>
                    
                </tr>
                <tr>
                    
                    <td><strong>Age : </strong></td>
                    <td><input type="number" name="age"></td>
                    
                </tr>
                <tr>
                    
                    <td></td>
                    <td><input type="submit" name="insert_btn" value="Save"></td>
                    
                </tr>
                
            </table>
            
        </form>
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   w3schools.com
        
        if(isset($_POST["insert_btn"]))
        {
            
            require './w3037a_connection.php';
            
            $connection = connect_db();
            
            $sql = "INSERT INTO persons(first_name,last_name,age) VALUES
                ('$_POST[first_name]','$_POST[last_name]','$_POST[age]]')";
            
            if(mysqli_query($connection,$sql))
            {
                echo "Preson   Record   has   been   saved   successfully";
            }
            else {
                die("Error No.# : ".mysqli_errno($connection)." Error : ". mysqli_error($connection));
            }
            
            mysqli_close($connection);
        }
        
        ?>
        
        <br/>
        <a href="index.html">Back</a>
        
    </body>
</html>
