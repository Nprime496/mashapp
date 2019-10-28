<?php
    $path="mashapp_bd";
    
    try{
        $bdd=new PDO("sqlite:".$path);
        $result=$bdd->query("SELECT * FROM tabletest");
        $dbdata=array();
        while($row=$result->fetchAll())
        {
            $dbdata=$row;
        }
    }
    catch(Exception $e)
    {
        die("ERREUR !".$e->getMessage());

    }

    echo json_encode($dbdata);
?>