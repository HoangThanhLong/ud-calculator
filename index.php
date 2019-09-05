<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    First operand: <input type="text" name="First">
    <br><br>
    Operator: <select name="operator">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="multi">Multiplication</option>
        <option value="div">Division</option>
    </select>
    <br><br>
    Second operand: <input type="text" name="Second">
    <br><br>
    <input type="submit" value="Calculator">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $first = $_POST["First"];
    $second = $_POST["Second"];
    $operator = $_POST["operator"];
}
if ($operator == "add"){
    $result = $first + $second;
    echo "Result: " . $result;
}
if ($operator == "sub"){
    $result = $first - $second;
    echo "Result: " . $result;
}
if ($operator == "multi"){
    $result = $first * $second;
    echo "Result: " . $result;
}
if ($operator == "div"){
    $result = $first / $second;
    echo  "Result: " . $result;
}
?>
</body>
</html>
