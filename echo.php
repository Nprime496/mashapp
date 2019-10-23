<?php
    $path="mashapp_bd";
    $bdd=new PDO("sqlite:".$path);
    $result=$bdd->query("SELECT * FROM parrains");
    $dbdata=array();
    while($row=$result->fetchAll())
    {
        $dbdata=$row;
    }
    echo json_encode($dbdata);
?>
