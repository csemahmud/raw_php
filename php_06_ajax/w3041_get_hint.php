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
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   w3schools.com   
        
        //   Fill    up   array   with   names
        
        $names = array('Alia','Anushka','Afridi','Ashraful','Austine','Batista','Big Show','Bat Man','Bolt','Charmi Kaur',
            'Captain America','Cyclopes','Dead Man','Diana','Dare Devil','Deepika','Danetelo','Flash','Fucker','Green Lantern',
            'Green Arrow','Himel','Hulk','Harry Potter','Hercules','He Man','Himel','Hawk Eye','Iron Man','Ilieana','Imran Khan',
            'Kane','Katrina','Koel','Kajal','Kareena','Leo','Madhuri','Mahmud','Mashrafee','Manisha','Micheal Angelo','Magneto',
            'Nargis','Neimar','Parineeti','Preeti','Pele','Professor X','Ronaldo','Rivaldo','Ronaldinho','Robinho','Romareo',
            'Rekha','Rock','Rakhi','Rambo','Robocop','Robin','Shraddha','Sayeed Anwar','Sexy','Sucker','Shakib Al Sahan',
            'Super Man','Spider Man','Sherlock Holmes','Samantha','Srabanti','Shoaib Akhter','Tamim Iqbal','Thor','Undertaker',
            'Wolverine','Wasim Akram');
        
        //   get   the   q   parameter   from   from   URL
        
        $q = $_REQUEST['q']; $hint = '';
        
        //   look   up    all   hints   from   array   if   $q   is   different   from   ''
        
        if($q!=''){
            $len = strlen($q);
            foreach ($names as $name) {
                if(stristr($q, substr($name, 0, $len))){
                    if($hint===''){
                        $hint = $name;
                    }
                    else {
                         $hint.=", $name";
                    }
                }
            }
        }
        
        //   Output   no   suggestion   if   no   hint   were   found
        //   or   output   the   correct   values
        
        echo $hint==='' ? 'No   suggestion' : $hint;
        
        ?>
    </body>
</html>
