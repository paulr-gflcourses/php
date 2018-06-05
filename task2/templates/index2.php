<?php
include 'config.php';
?>

<html>
<head><title>Calculator</title></head>
<body>

<form>
<label for='a'>Enter the numbers:</label>
<input type='text' name='a'>
<input type='text' name='b'>

<ul>
<li>
<input type="radio" id="add" name="action" value="add">
+
</li>

<li>
<input type="radio" id="sub" name="action" value="sub">
-
</li>

<li>
<input type="radio" id="mul" name="action" value="mul">
*
</li>

<li>
<input type="radio" id="div" name="action" value="div">
/
</li>

<li>
<input type="radio" id="sqrt" name="action" value="sqrt">
sqrt
</li>

<li><input type="radio" name="action" value="frac">1/x</li>

<li><input type="radio" name="action" value="mod">%</li>
<li><input type="radio" name="action" value="neg">-x</li>
</ul>
<input type='submit' value='='>
<!--button formaction='index.php?action=add'>+</button-->
<?php
    print "<label>Result: $result</label>";
?>
</form>



</body>
</html>

