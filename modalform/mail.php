<?php
include_once 'mailer.class.php';
$location = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST)) {
    (new Mailer($_POST));
} else {
    header("Location: $location");
}
