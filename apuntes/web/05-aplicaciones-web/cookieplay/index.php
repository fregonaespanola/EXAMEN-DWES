<?php

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if(!isset($_COOKIE['num'])){
    setcookie('num', 1);
}else{
    setcookie('num', $_COOKIE['num']+1);
}

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

?>