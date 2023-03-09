<?php
    require_once "vendor/autoload.php";
    $loader =  new \Twig\Loader\FilesystemLoader(__DIR__);
    $twig = new \Twig\Environment($loader);
    echo $twig->render('emplate_name.twig', array('variable_name'=>'variable_value'));
?>