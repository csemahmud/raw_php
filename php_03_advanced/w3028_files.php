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
        <h1>Welcome   to   my   Page   !!!</h1>
        
        <?php
        //   MAHMUDUL   HASAN   KHAN   w3schools.com
        
        $file = fopen("documents/welcome.txt", "r") or exit("Unable   to   open   file   !!!");
        while (!feof($file)) {
            echo fgetc($file);
        }
        fclose($file);
        
        ?>
    </body>
</html>
