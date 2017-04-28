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
        
        $txt1 = "<h1>PHP   is   FUN   !!!</h1><br>";
        $txt2 = '<a href="http://w3schools.com/" target="_blank">W3Schools.com</a>';
        $mobiles = array("Nokia","Samsung","Walton","Symphony");
        echo $txt1,"Study   PHP   at   $txt2<br>",
                "My   mobile   is   {$mobiles[1]}<br>",
                        "This"," string"," was"," made"," with",
                            " multiple parameters .<br>";
        print $txt1;
        print "Study   PHP   at   $txt2<br>";
        print "My   mobile   is   {$mobiles[1]}<br>";
        
        ?>
    </body>
</html>
