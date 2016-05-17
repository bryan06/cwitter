<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=cwitter', 'root', '');
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
session_start();
if (isset ($_COOKIE['id']))
{
    setcookie('id', '', -1);
}
session_unset ();
session_destroy ();
header ('location: index.php');
?>