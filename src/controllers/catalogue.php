<?php
function index()
{
    require MODEL_PATH . "/catalog-model.php";
    $connexion = getPDO();
    $resultSet = $connexion->query("SELECT * FROM vuecatalogue");

    echo getRenderedView("catalogue/list", [
        "resultSet" => $resultSet,
        "catalogue" => getAll()

    ]);

    $resultSet = null;

}