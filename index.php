<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter burnok"=>"35 and 1/2", "Ben tong"=>"37 and 1/4", "Joe burdik"=>"43 and 1/3");
asort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

</body>
</html>