<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
 $fruits = [];

?>
<form action="checkbox.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples" >
         <br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges" > <br>
        Pears : <input type="checkbox" name="fruits[]" value="pears" > 

        <input type="submit" >
    </form>

    <?php 
     $fruits =  $_POST["fruits"];

     if ($fruits != null) {
     foreach ($fruits as $fruit) {
        echo "$fruit <br>";
      }
    }
      
    ?>

<br>
    
</body>
</html>