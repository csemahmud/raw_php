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
        
        class mhk1_exception extends Exception
        {
            public function error_message()
            {
                //   error   message
                $error_msg = "<p>Error   on   line : ".$this->getLine()." in ".$this->getFile()
                    ." : <b>".$this->getMessage()."</b>   is   not   a   valid   email   address   !!!</p>";
            return $error_msg;
            }
        }
        
        function mhk2_exception($exception)
        {
            echo "<p><b>".$exception->getMessage()."</b> is an example e-mail</p>";
        }
        
        set_exception_handler("mhk2_exception");


        function check_email($email)
        {
            try
            {
                //   check   if
                if(filter_var($email, FILTER_VALIDATE_EMAIL)==FALSE)
                {
                    //   throw   exception   if   email   is   not   valid
                    throw new mhk1_exception($email);
                }
                
                //   check   for   example   in  the   email   address
                if(strpos($email, "example")!==FALSE)
                {
                    throw new Exception($email);
                }
                
                echo "<p><b>$email</b> : is   a   valid   email   address</p>";
            }
            catch (mhk1_exception $ex)
            {
                echo $ex->error_message();
            }
        }
        
        check_email("cse.mahmud@example...com");
        check_email("cse.mahmud@yahoo.com");
        check_email("cse.mahmud@example.com");
        echo "<br/>   This  will   not   be   displayed";
        ?>
        
        <p>This  will   not   be   displayed</p>
        
        <?php
        
        echo "<br/>   This  will   not   be   displayed";
        
        ?>
        
    </body>
</html>
