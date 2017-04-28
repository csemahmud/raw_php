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
        
        class Car
        {
            var $name,$color;
            function Car($name,$color = "Blue")
            {
                $this->name = $name;
                $this->color = $color;
            }
            
            function get_color()
            {
                return $this->color;
            }
            
            function get_name()
            {
                return $this->name;
            }
            
            function change_name($new_name)
            {
                $this->name = $new_name;
            }
        }
        
        function print_vars($obj)
        {
            $txt = "<ul>";
            foreach (get_object_vars($obj) as $prop => $val)
            {
                $txt .= "<li>$prop : $val</li>";
            }
            $txt .= "</ul>";
            return $txt;
        }

        $myCar = new Car("BMW");
        echo "<h3>My   Car   properties :- </h3>",print_vars($myCar);
        echo "<h3>After   changing   Name,</h3>";
        $myCar->change_name("<b><i>Ferrary</i></b>");
        echo "<h3>My   Car   properties :- </h3>",print_vars($myCar);
        $herCar = new Car("Toyota","Red");
        echo "<h3>Her   Car   properties :- </h3>",print_vars($herCar);
        
        ?>
    </body>
</html>
