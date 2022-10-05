<?php
class ModelProducts
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=tudai-web2-tp1;charset=utf8','root','');
    }

    function GetProducts()
    {
        $sentence = $this->db -> prepare("SELECT products.*, categories.id AS category_id, categories.type, categories.brand FROM products JOIN categories ON products.fk_category = categories.id;");
        $sentence->execute();
        $data = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    function PostProduct($nombre, $descripcion, $precio, $stock, $categoria) {
        $sentence = $this->db->prepare("INSERT INTO `products`(`name`, `description`, `price`, `stock`, `fk_category`) VALUES ('?','?',?,?,?)");
        $sentence->execute(array($nombre, $descripcion, $precio, $stock, $categoria));
    }

    function DeleteProduct($id) {
        $sentence = $this->db->prepare("DELETE FROM `products` WHERE id=?");
        $sentence->execute(array($id));
    }
}
