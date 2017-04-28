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
        
        //   error   handler   function
        function custom_error($err_no,$err_str)
        {
            echo "<b>Error : </b> [$err_no] $err_str<br/>";
            echo "Ending   Script ...";
            die();
        }
        
        //   set   error   handler
        set_error_handler("custom_error", E_USER_WARNING);
        
        //   trigger   error
        $test_num = -0.00001;
        if($test_num>0)
        {
            echo "<br/>Given   Number  is : $test_num";
        }
        else
        {
            trigger_error("Value   must   be   greater   than  Zero(0)   !!!", E_USER_WARNING);
        }
        
        echo "This  line   will  not  be  displayed   .";
        ?>
    </body>
</html>
