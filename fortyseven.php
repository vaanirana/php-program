
<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$length = count($cars);
for($x = 0; $x < $length; $x++) {
    echo $cars[$x];
    echo "<br>";  // Properly closed <br> tag
}
?>

</body>
</html>

<p>THIS PROGRAM IS DONE BY VAANI ERP- 162</p>

