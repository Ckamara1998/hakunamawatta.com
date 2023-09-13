<?php
try{
        $db = new PDO('mysql:host=localhost;dbname=box;charset=utf-8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e){
        die('Erreur : Unknown data base' .$e->getMessage());
    }

    $conect=mysql_connect('localhost','root','');
    mysql_select_db('box');
?>