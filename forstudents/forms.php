<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="select.html" method="post">
<p><label>Select a Color:</label>
<select name="color">
<option value="green">Green</option>
<option value="blue" selected>Blue</option>
</select></p>
<p><label>Select several Colors:</label>
<select name="colors[]" multiple>
<option value="green">Green</option>
<option value="blue">Blue</option>
<option value="red">Red</option>
</select></p>
<p><input type="submit" value="Submit"/></p>
</form>


</body>
</html>