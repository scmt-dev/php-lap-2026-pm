<?php

$db = new mysqli("localhost", "root", "root", "account");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>