<?php

//To Enable custom routes please rename routes.example.php to routes.php
//edit your routes bellow

//you can route by creating anonymous functions of the controller;
$controller->hello_world = function () {
    echo "Hello world!";
};


$controller->functions['test/route/*'] = function () {
    echo "You can use wildcards!";
};
$controller->functions['test/api/user_login*'] = function () {
    echo "My user_login";
};





?>