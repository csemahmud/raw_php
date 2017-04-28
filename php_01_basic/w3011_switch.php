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
        
        function choose_favcolor($favcolor = "blue")
        {
            switch ($favcolor)
            {
                case "blue":
                    echo "Your   Favorite   color   is   <b>Blue</b>";
                    break;
                case "green":
                    echo "Your   Favorite   color   is   <b>Green</b>";
                    break;
                case "red":
                    echo "Your   Favorite   color   is   <b>Red</b>";
                    break;
                default :
                    echo 'Your   favorite   color   is   neither  red,   blue   or   green';
            }
        }
        
        choose_favcolor();
        echo '<br>';
        choose_favcolor("White");
        ?>
    </body>
</html>
