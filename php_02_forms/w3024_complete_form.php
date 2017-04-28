<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            .error{
                color: orangered;
            }
        </style>
    </head>
    <body>
        <?php
        //   MAHMUDUL   HASAN   KHAN   w3schools.com
        
        //   define   all   variable   and   set   to   empty   values
        $name = $email = $gender = $comment = $website = "";
        
        function test_input($data)
        {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if (empty($_POST["name"]))
                $nameErr = "Name   is   required   !!!";
            else
            {
                $name = test_input($_POST["name"]);
                //   Check   if   name   only   contains   letters   and   whitespace   .
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only   letters   and   white   space   allowed   !!!";
                    $name = NULL;
                }
            }
            if (empty($_POST["email"]))
                $emailErr = "Email   is   required   !!!";
            else
            {
                $email = test_input($_POST["email"]);
                //   Check   if   email   address   if   valid   .
                if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
                    $emailErr = "Invalid   email   format   !!!";
                    $email = NULL;
                }
            }
            if (!empty($_POST["email"]))
            {
                $website = test_input($_POST["website"]);
                if (!preg_match(
                    "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", 
                    $website)) {
                    $websiteErr = "Invalid   URL   !!!";
                    $website = NULL;
                }
            }
            $comment = test_input($_POST["comment"]);
            if (empty($_POST["gender"]))
                $genderErr = "Gender   is   required   !!!";
            else
                $gender = test_input($_POST["gender"]);
        }
        
        ?>
        
        <h2>PHP   Form   validation   example :- </h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
            Name : <input type="text" name="name">
            <span class="error">*   <?php echo $nameErr;?></span>
            <br><br>
            Email : <input type="text" name="email">
            <span class="error">*   <?php echo $emailErr;?></span>
            <br><br>
            Website : <input type="text" name="website">
            <span class="error"><?php echo $websiteErr;?></span>
            <br><br>
            Comment : <textarea name="comment" rows="5" cols="20"></textarea>
            <br><br>
            Gender : <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <span class="error">*   <?php echo $genderErr;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
            
        </form>
        
        <?php
        
        echo "<h2>Your   Input : </h2>";
        echo $name,"<br>";
        echo $email,"<br>";
        echo $website,"<br>";
        echo $comment,"<br>";
        echo $gender,"<br>";
        
        ?>
    </body>
</html>
