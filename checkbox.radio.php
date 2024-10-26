<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <!-- <input type="radio" name="credit_card" id="visa" value="visa">Visa<br>
        <input type="radio" name="credit_card" id="masterCard" value="masterCard">Master Card<br>
        <input type="radio" name="credit_card" id="express" value="express">Express<br>
        <input type="submit" value="confirm" name="confirm"> -->

        <input type="checkbox" name="foods[]" id="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" id="burger" value="Purger">Purger<br>
        <input type="checkbox" name="foods[]" id="hotDog" value="Hot Dog">Hot Dog<br>
        <input type="submit" name="submit">
    </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {

    $foods = $_POST["foods"];
    echo $foods[0] . "<br>";
    foreach ($foods as $food => $value) {
        echo $food . "=" . $value . "<br>";
    }

    // if (isset($_POST["pizza"])) {
    //     echo "You like pizza <br/>";
    // }
    // if (isset($_POST["burger"])) {
    //     echo "You like Burger <br/>";
    // }
    // if (isset($_POST["hotDog"])) {
    //     echo "You like Hot Dog <br/>";
    // }

    // if (empty($_POST["pizza"])) {
    //     echo "You Dont't like pizza <br/>";
    // }
    // if (empty($_POST["burger"])) {
    //     echo "You Dont't like Burger <br/>";
    // }
    // if (empty($_POST["hotDog"])) {
    //     echo "You Dont't like Hot Dog <br/>";
    // }
}


// if (isset($_POST["confirm"])) {
//     $credit_card = null;
//     if (isset($_POST["credit_card"])) {
//         $credit_card = $_POST["credit_card"];

//         switch ($credit_card) {
//             case 'visa':
//                 echo "You selected visa";
//                 break;
//             case 'masterCard':
//                 echo "You selected Master Card";
//                 break;
//             case 'express':
//                 echo "You selected Express";
//                 break;
//             default:
//                 echo "Please make a selection";
//                 break;
//         }
//     } else {
//         echo "Please make a selection...!!!";
//     }
// }
?>