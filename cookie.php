<?php
setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
setcookie("fav_drink", "coffee", time() + (86400 * 2), "/");
setcookie("fav_desert", "icecream", time() + (86400 * 2), "/");
// setcookie("fav_desert", "icecream", time() - 0, "/");//clear cookie

foreach ($_COOKIE as $key => $value) {
    echo $key, " = ", $value, "<br>";
}

if (isset($_COOKIE["fav_food"])) {
    echo "Buy Some {$_COOKIE["fav_food"]} !!!";
} else {
    echo "I don't know your favorite food";
}
