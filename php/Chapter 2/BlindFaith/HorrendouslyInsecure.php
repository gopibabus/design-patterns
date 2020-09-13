<?php
$isAdmin = false;
extract($_GET);

if ($isAdmin === true) {
    echo "Hey ".$name."; here, have some secret information!";
}