<?php
ob_start();
session_start();
try {
$conn = new PDO("mysql:host=localhost;dbname=project",'root','12345');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
echo $e->getMessage();
}
$conn = null;
include 'func/user.func.php';
include 'func/image.func.php';
include 'func/album.func.php';
?>
