<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<!--Kalkuliatorius-->
<form method="post">
    <input type="text" name="number1">
    <input type="text" name="number2">
    <select name="operator" id="">
        <option>None</option>
        <option>Add</option>
        <option>Substract</option>
        <option>Multiply</option>
        <option>Divide</option>
        <option>Exponentiate</option>
    </select>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>

<?php

if (isset($_POST["submit"])) {
    $result1 = $_POST["number1"];
    $result2 = $_POST["number2"];
    $operator = $_POST["operator"];
    switch ($operator) {
        case "Add":
            echo $result1 + $result2;
            break;
        case "Substract":
            echo $result1 - $result2;
            break;
        case "Multiply":
            echo $result1 * $result2;
            break;
        case "Divide":
            echo $result1 / $result2;
            break;
        case "Exponentiate":
            echo $result1 ** $result2;
            break;
        default:
            echo "Please select a calculator action.";
    }
}

?>


</body>
</html>