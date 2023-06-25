<?php

header('Content-Type: application/json');

require_once("../config/conexion.php");
require_once("../models/Category.php");

$category = new Category();

$body = json_decode(file_get_contents("php://input"), true);

switch($_GET['op']){
    case "GetAll":
        $data = $category->get_category();
        echo json_encode($data);
    break;

    case "GetId":
        $data = $category->get_category_x_id($body["cat_id"]);
        echo json_encode($data);
    break;

    case "insert":
        $data = $category->insert_category($body["cat_name"], $body["cat_observation"]);
        echo json_encode("Insertado correctamente");
    break;

    case "update":
        $data = $category->update_category($body["cat_id"], $body["cat_name"], $body["cat_observation"]);
        echo json_encode("Categoría actualizada correctamente");
    break;

    case "delete":
        $data = $category->delete_category($body["cat_id"]);
        echo json_encode("Categoría eliminada correctamente");
    break;

}


?>