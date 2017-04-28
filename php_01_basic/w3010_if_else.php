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
        
        $t = date("H")+6;
        
        if($t<4)
            echo "Have   a   good   <b>Night</b>   !!!";
        
            elseif ($t<"10")
                echo 'Have   a  good   <b>Morning</b>   !!!';
            
                elseif ($t<19)
                    echo "Have   a  good   <b>Day</b>   !!!";
                
                else
                    echo 'Have   a   good   <b>Night</b>   !!!';
                
           echo "<br>Now,   the   time  is  :  ",$t;
        
        ?>
    </body>
</html>
