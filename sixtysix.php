<!DOCTYPE html>
<html>

<body>

<?php
//php code to demonstrate date_add() function 
$date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string
("40 days"));
echo date_format($date,"Y-m-d");
?>

</body>
</html>
<p> THIS PROGRAM IS DONE BY VAANI ERP - 162</P>

