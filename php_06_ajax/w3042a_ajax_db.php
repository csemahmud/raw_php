<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript">
            
            function show_user(str){
                if(str.length==0){
                    document.getElementById('text_hint').innerHTML = '';
                    return ;
                }
                
                if(window.XMLHttpRequest){
                    //   code   for   IE7+,   Firefox   Chrome,   Opera   and   Safari
                    var xmlhttp = new XMLHttpRequest();
                }
                else{
                    //   code   for   IE6,   IE5
                    var xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                        document.getElementById('text_hint').innerHTML = xmlhttp.responseText;
                    }
                }
                
                xmlhttp.open('GET','w3042b_get_user.php?q='+str,true);
                xmlhttp.send();
            }
            
        </script>
    </head>
    <body>
        
        <form action="" method="post">
            
            <select name="users" onchange="show_user(this.value)">
                
                <option value="">Select   a   person : </option>
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   w3schools.com   
        
        //   create   connection
        $connection = mysqli_connect($_SERVER['SERVER_NAME'],'root','','db_pw3s_php_04_database');

        //   check   connection
        if(mysqli_connect_errno())
            echo '<p>Failed   to   connect   to   MySQL : ERROR   No.# : '.mysqli_connect_errno()
                .' ERROR : '.mysqli_connect_error().'</p>';
        
        $result= mysqli_query($connection, 'SELECT * FROM persons');
        
        while ($row = mysqli_fetch_array($result))
        {
            echo '<option value="'.$row['persons_id'].'">'.$row['first_name'].'</option>';
        }
        
        mysqli_close($connection);
        
        ?>
                
            </select>
            
        </form>
        
        <br/>
        
        <div><p id="text_hint"><strong>Persons   info   will  be   displayed   here   .</strong></p></div>
        
    </body>
</html>
