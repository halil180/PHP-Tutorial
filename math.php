<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   echo " 2 <sup>4</sup> = " ;
   echo pow(2,4); 
   echo "<br>";
   echo ' <span style="white-space: nowrap">&radic;<span style="text-decoration:overline;">&nbsp;144 &nbsp;</span></span>  = ';
   echo sqrt(144);
   echo "<br>";
   echo max(2,10,234);
   echo "<br>";

   echo round(3.7); //4.0


   echo "<br>";

   echo ceil(3.1); // ceil will always round it up // 4.0

   echo "<br>";

   echo floor(3.9); // floor will always round it down //3.0


    ?>
    
</body>
</html>