<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            
            img{
                height: 500px;
                margin-left: 5%;
                margin-top: 50px;
                box-shadow: -10px 10px 10px #000000;
                border-style: groove;
                border-color: gold;
                border-width: thick;
                position: relative;
                z-index: 1;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                transition: all 1s;
                -webkit-transition: all 1s;
            }
            img:hover{
                box-shadow: -10px 10px 15px #000000;
                position: relative;
                z-index: 10;
                -webkit-transform: scale(1.5);
                -moz-transform: scale(1.5);
            }
            
        </style>
        <title></title>
    </head>
    <body>
        <h2>MHK   Image   Uploader</h2>
        <form action="w3029_images_uploader.php" method="post" enctype="multipart/form-data">
            
            <label for="file">Image   File   Name : </label>
            <input type="file" name="file" id="file"><br>
            <input type="submit" name="submit" value="Upload   Image">
            
        </form>
        <?php
        //   MAHMUDUL   HASAN   KHAN   w3schools.com
        
        //   Restrictions   on   Upload
        
        $allowedExts = array("gif","jpeg","jpg","png","GIF","JPEG","JPG","PNG");
        $temp = explode(".", $_FILES["file"]["name"]);
        $extension = end($temp);
        
        if
        (
                (
                    ($_FILES["file"]["type"] == "image/gif")
                    ||   ($_FILES["file"]["type"] == "image/jpeg")
                    ||   ($_FILES["file"]["type"] == "image/jpg")
                    ||   ($_FILES["file"]["type"] == "image/pjpeg")
                    ||   ($_FILES["file"]["type"] == "image/x-png")
                    ||   ($_FILES["file"]["type"] == "image/png")
                )
                &&   ($_FILES["file"]["size"] < 450000)   //   Maximum   File   Size
                && in_array($extension, $allowedExts)
         )
        {
            //   Create   The   Upload   Script
            
            if($_FILES["file"]["error"]>0)
            {
                echo "Return   Code : ".$_FILES["file"]["error"]."<br>";
            }
            else 
            {
                echo "Upload : ".$_FILES["file"]["name"]."<br>";
                echo "Type : ".$_FILES["file"]["type"]."<br>";
                echo "Size : ".($_FILES["file"]["size"]/1024)." kB<br>";
                echo "Tmp   file : ".$_FILES["file"]["tmp_name"]."<br>";
                
                //   Saving   the   Uploaded   File
                
                if (file_exists("images/".$_FILES["file"]["name"]))
                {
                    echo "<b>Error : </b>".$_FILES["file"]["name"]."   already   exists   !!!";
                }
                else 
                {
                    move_uploaded_file($_FILES["file"]["tmp_name"], 
                            "images/".$_FILES["file"]["name"]);
                    echo "<b>Success   !!!   </b>Stored   in : "."images/".$_FILES["file"]["name"]."<br>";
                    echo '<img src="images/'.$_FILES["file"]["name"].'" height="500">';
                }
            }
        }
        else 
        {
            echo "Invalid   file   !!!";
        }
        
        ?>
        
    </body>
</html>
