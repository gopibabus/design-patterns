<?php

$isAdmin = false;

if ($isAdmin === true) {
    echo "Hey ".htmlspecialchars($_GET['name'])."; here, have some secret information!";
}