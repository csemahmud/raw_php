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
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   w3schools.com
        
        $first_name = NULL;
        $last_name = NULL;
        $age = NULL;
        
        if(isset($_GET["persons_id"]))
        {
            $_SESSION["persons_id"] = $_GET["persons_id"];
            
            require './w3037a_connection.php';
            
            $connection = connect_db();
            
            $result = mysqli_query($connection, "SELECT * FROM persons WHERE persons_id = $_GET[persons_id]");
            $array = mysqli_fetch_array($result);
            $first_name = $array["first_name"];
            $last_name = $array["last_name"];
            $age = $array["age"];
            
            mysqli_close($connection);
        }
        
        if(isset($_POST["update_btn"]))
        {
            $_POST["delete_btn"] = NULL;
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $age = $_POST["age"];
            
            require './w3037a_connection.php';
            
            $connection = connect_db();
            
            if(mysqli_query($connection,"UPDATE persons SET first_name = '$first_name', last_name = '$last_name', 
                age = $age WHERE persons_id = $_SESSION[persons_id];"))
            {
                echo "<h3>Person   Record   has   been   updated   successfully</h3>";
            }
            else {
                die("Error No.# : ".mysqli_errno($connection)." Error : ". mysqli_error($connection));
            }
            
            mysqli_close($connection);
        }
        if(isset($_POST["delete_btn"]))
        {
            $_POST["update_btn"] = NULL;
            
            require './w3037a_connection.php';
            
            $connection = connect_db();
            
            if(mysqli_query($connection,"DELETE FROM persons WHERE persons_id = $_SESSION[persons_id];"))
            {
                echo "<h3>Person   Record   has   been   Deleted</h3>";
                $_SESSION[persons_id] = NULL;
                $first_name = NULL;
                $last_name =  NULL;
                $age =  NULL;
            }
            else {
                die("Error No.# : ".mysqli_errno($connection)." Error : ". mysqli_error($connection));
            }
            
            mysqli_close($connection);
        }
        
        ?>
        
        <form action="w3037e_details.php" method="post">
            
            <table>
                
                <tr>
                    
                    <td><strong>First   Name : </strong></td>
                    <td><input type="text" name="first_name" value="<?php echo "$first_name";?>" required="required"></td>
                    
                </tr>
                <tr>
                    
                    <td><strong>Last   Name : </strong></td>
                    <td><input type="text" name="last_name" value="<?php echo "$last_name";?>" required="required"></td>
                    
                </tr>
                <tr>
                    
                    <td><strong>Age : </strong></td>
                    <td><input type="number" name="age" value="<?php echo "$age";?>" required="required"></td>
                    
                </tr>
                <tr>
                    
                    <td></td>
                    <td>
                        <input type="submit" name="update_btn" value="Update">   |   
                        <input type="submit" name="delete_btn" value="Delete">
                    </td>
                    
                </tr>
                
            </table>
            
        </form>
        
        <br/>
        <a href="index.html">Back</a>
        
    </body>
</html>
