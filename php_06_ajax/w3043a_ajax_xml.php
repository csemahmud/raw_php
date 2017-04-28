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
            
            function show_product(str){
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
                
                xmlhttp.open('GET','w3043b_get_product.php?q='+str,true);
                xmlhttp.send();
            }
            
        </script>
    </head>
    <body>
        
        <form action="" method="post">
            
            <strong>Select   a   product : </strong>
            <select name="products" onchange="show_product(this.value)">
                <option value="">Select   a  product : </option>
        
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   w3schools.com   
        
        $xml_doc = new DOMDocument();

        $xml_doc->load('documents/product_catalog.xml');
        
        $product_ids = $xml_doc->getElementsByTagName('product_id');
        $names = $xml_doc->getElementsByTagName('name');
        for($i = 0; $i<$product_ids->length; $i++){
            echo '<option value="'.$product_ids->item($i)->nodeValue.'">'.$names->item($i)->nodeValue.'</option>';
        }
        
        ?>
            </select>
        </form>
        <div id="text_hint"><strong>Product   info   will   be   listed   here   .....</strong></div>
    </body>
</html>
