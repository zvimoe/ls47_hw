<?php
require_once "api.php"
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="api.php" method="post">
select city: <select name="newCity">
<?php
    city::getAllCiteis()
    ?>
    </select>
type in new street:<input name="newStreet">
<button name="b" value="city insert">insert street</button>