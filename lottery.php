<!DOCTYPE HTML>
<html>
 <body>
  <p>Word: Education </p>
<?php
$random = rand(1,10);
 echo "Result in $random trails:<br>";
 for($i=1; $i<=$random; $i++)
{
  	$a = rand(1,3);	$b = rand(1,3);	$c = rand(0,1);

         	switch($c)
         	{
               	case 0:$result = $a + $b;
                      	break;
               	case 1:$result = $a * $b;
                      	break;
         	}

  	switch($result)
  	{
         	case 1:
               	echo "letter <STRONG>E</STRONG> and a=$a, b=$b, c=$c, result=$result <br>";
				break;
         	case 2:
               	echo "letter <STRONG>D</STRONG> and a=$a, b=$b, c=$c, result=$result <br>";

               	break;
         	case 3:
               	echo "letter <STRONG>U</STRONG> and a=$a, b=$b, c=$c, result=$result <br>";

               	break;
         	case 4:
               	echo "letter <STRONG>C</STRONG> and a=$a, b=$b, c=$c, result=$result <br>";

               	break;
         	case 5:
               	echo "letter <STRONG>A</STRONG> and a=$a, b=$b, c=$c, result=$result <br>";

               	break;
         	case 6:
               	echo "letter <STRONG>T</STRONG> and a=$a, b=$b, c=$c, result=$result <br>";

               	break;
         	case 7:
               	echo "letter <STRONG>I</STRONG> and a=$a, b=$b, c=$c, result=$result <br>";

               	break;
         	case 8:
               	echo "letter <STRONG>O</STRONG> and a=$a, b=$b, c=$c, result=$result <br>";

               	break;
         	case 9:
               	echo "letter <STRONG>N</STRONG> and a=$a, b=$b, c=$c, result=$result <br>";

          break;
        	}
}
?>
 </body>
</html>
