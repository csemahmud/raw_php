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
    <h2>Email</h2>
    <body>
        <?php
        //   MAHMUDUL   HASAN   KHAN   w3schools.com
        
        //  display   form   is   user   has   not   clicked   submit
        
        if(!isset($_POST["email"]))
        {
            ?>
        
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            
            <table>
                
                <tr>
                    
                    <td>From : </td>
                    <td><input type="text" name="from"></td>
                    
                </tr>
                <tr>
                    
                    <td>Email : </td>
                    <td><input type="email" name="email" required="required">
                    <span style="color:orangered">*</span>
                    </td>
                    
                </tr>
                <tr>
                    
                    <td>Subject : </td>
                    <td><input type="text" name="subject">
                    </td>
                    
                </tr>
                <tr>
                    
                    <td valign="top">Message : </td>
                    <td><textarea rows="10" cols="40" name="message"></textarea>
                    </td>
                    
                </tr>
                <tr>
                    
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit Email">
                    </td>
                    
                </tr>
                
            </table>
            
        </form>
             
             <?php
        }
        else
            //   The   user   has   submitted   the   form
            
            {
                //   Check   if   the   "from"   input   field   is   filled   out
                if (isset($_POST["from"]))
                {
                    mail($_POST["email"],$_POST["subject"],$_POST["message"],"From: ".$_POST["from"]."\r\nReply-To: ".$_POST["from"]);
                    echo "Yes !!! This program works";
                }
                else
                    echo "Please   input   this   field : <b>From</b>";
            }
        ?>
    </body>
</html>
