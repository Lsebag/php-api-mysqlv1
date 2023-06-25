<?php

class Category extends Conectar
{
    public function get_category()
    {
    $conectar = parent::conexion();

    parent::set_name();

    $sql = "SELECT * FROM tm_categoria WHERE status = 1";
    $sql = $conectar->prepare($sql);
    $sql->execute();

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
    }

    public function get_category_x_id($cat_id)
    {
    $conectar = parent::conexion();

    parent::set_name();

    $sql = "SELECT * FROM tm_categoria WHERE status = 1 AND cat_id = ?";
    $sql = $conectar->prepare($sql);
    $sql->bindValue(1, $cat_id);
    $sql->execute();

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
    }

    public function insert_category($cat_name, $cat_obs)
    {
    $conectar = parent::conexion();

    parent::set_name();

    $sql = "INSERT INTO tm_categoria (cat_id, cat_name, cat_observation, status)
    VALUES (NULL, ?, ?, 1)";
    $sql = $conectar->prepare($sql);
    $sql->bindValue(1, $cat_name);
    $sql->bindValue(2, $cat_obs);
    $sql->execute();

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
    }

    public function update_category($cat_id, $cat_name, $cat_obs)
    {
    $conectar = parent::conexion();
    parent::set_name();

    $sql = "UPDATE tm_categoria SET cat_name = ?, cat_observation = ? WHERE cat_id = ?";
    $sql = $conectar->prepare($sql);
    $sql->bindValue(1, $cat_name);
    $sql->bindValue(2, $cat_obs);
    $sql->bindValue(3, $cat_id);
    $sql->execute();

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
    }

    public function delete_category($cat_id)
    {
    $conectar = parent::conexion();
    parent::set_name();

    // $sql = "DELETE FROM tm_categoria WHERE cat_id = ?";
    $sql = "UPDATE tm_categoria SET status = 0 WHERE cat_id = ?";
    $sql = $conectar->prepare($sql);
    $sql->bindValue(1, $cat_id);
    $sql->execute();

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
    }

}




?>