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
        
        function check_int($test_num)
        {
            $int_options = array(
                "options" => array(
                    "min_range"=>-100,
                    "max_range"=>100
                        )
            );
            if(filter_var($test_num, FILTER_VALIDATE_INT, $int_options)===$test_num)
            {
                echo "<p>$test_num : is valid .</p>";
            }
            else 
                {
                echo "<p>$test_num : is <b>not</b> valid .</p>";
                }
        }
        check_int(-100);
        check_int(-101);
        check_int(100);
        check_int(101);
        check_int(0);
        check_int('10');
        ?>
    </body>
</html>
