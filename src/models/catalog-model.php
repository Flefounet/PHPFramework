<?php
/**
 * Created by PhpStorm.
 * User: formation
 * Date: 31/07/2017
 * Time: 12:33
 */

function getAll()
{

    $connexion = getPDO();
    $resultSet = $connexion->query("SELECT * FROM vuecatalogue");
    return $resultSet->fetchAll(PDO::FETCH_ASSOC);

}

function getBooksByAuthor($name):array
{
    $connexion = getPDO();
    $sql = "SELECT * FROM vuecatalogue WHERE nom_auteur=?";
    $statement = $connexion->prepare($sql);
    $statement -> execute([$name]);
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);


    return $data;
}

