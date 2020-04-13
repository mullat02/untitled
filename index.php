<?php


if(!isset($_SESSION))
{
    session_start();
}

$page_title = 'Home - Online Booking System';
$page_content = 'Home.php';

include ('structure/Main.php');
