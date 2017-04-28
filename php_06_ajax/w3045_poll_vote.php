<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   w3schools.com   

$vote = $_REQUEST['vote'];

//   get   content   of   text   file

$filename = 'documents/poll_result.txt';
$content = file($filename);

//   put   content   in   array

$array = explode('||', $content[0]);
$yes = $array[0];
$no = $array[1];

if($vote==1){
    $yes++;
}
 else {
    $no++;
}

//   insert   votes   to   txt   file

$insertvote = $yes.'||'.$no;
$fp = fopen($filename, 'w');
fputs($fp, $insertvote);
fclose($fp);

?>

<h2>Result : </h2>

<table>
    
    <tr>
        
        <td>Yes : </td>
        <td>
            <img src="images/yes_poll.gif" width="<?php 
            
            echo (300*round($yes/($yes+$no),2));
            
            ?>" height="20"> <?php echo (100*round($yes/($yes+$no),2)); ?>%
        </td>
        
    </tr>
    <tr>
        
        <td>No : </td>
        <td>
            <img src="images/no_poll.gif" width="<?php 
            
            echo (300*round($no/($yes+$no),2));
            
            ?>" height="20"> <?php echo (100*round($no/($yes+$no),2)); ?>%
        </td>
        
    </tr>
    
</table>
