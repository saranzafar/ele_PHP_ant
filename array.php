<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="countery">Enter a countery name: </label>
        <input type="text" name="countery" id="countery">

        <input type="submit" value="start">

    </form>
</body>

</html>

<?php
$capitals = array("USA" => "Washington D.C", "Japan" => "Tokyo", "pakitan" => "Islamabad");
$capital = $capitals[$_POST["countery"]];

echo "This is capital: {$capital}"


// $capitals["USA"] = "Las Vegas";
// $capitals["China"] = "Beiging";
// array_pop($capitals);
// array_shift($capitals);
// $keys = array_keys($capitals);
// $values = array_values($capitals);
// $capitals = array_flip($capitals);
// $capitals = array_reverse($capitals);

// echo count($capitals) . "<br>";
// foreach ($capitals as $key => $value) {
// foreach ($keys as $key) {
// foreach ($values as $value) {
// echo "{$key} - {$value} <br>";
// echo "{$key} <br>";
// echo "{$value} <br>";
// }


// $arr = array("var1", "var2", "var3", "var4");
// echo $arr[0];
// $arr[0] = "new Var";
// array_push($arr,"new variable","2nd");
// array_pop($arr);
// $array = array_shift($arr);
// $reversedArr = array_reverse($arr);
// echo count($arr);

// foreach ($arr as $a) {
//     echo $a . "<br>";
// }


?>