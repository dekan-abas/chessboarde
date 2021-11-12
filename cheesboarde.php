<!DOCTYPE html>
<html>
<head>
  <title>Chess Boarde</title>
</head>
<body>
	<table style="margin: outo;">
    <?php
    echo"<tr>";
       $letter=array("","a","b","c","d","e","f","g","h");

       	for($row=8;$row>=1;$row--)
       {
         for($colum=1;$colum<=8;$colum++){

         	$d=$row + $colum ;

         	if($d%2==0)
         	{  
            echo"<td height=90px; width =50px; bgcolor=white>$letter[$colum].$row</td>";
         	}
            else{
                echo"<td height=50px; width =90px; bgcolor=gray>$letter[$colum].$row</td>";
                 }
            }
              echo"</tr>";
       }	
       ?>
   </table>
    </body>
    </html>


      
   