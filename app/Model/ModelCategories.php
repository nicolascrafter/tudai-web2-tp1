<?php
class ModelCategories {
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=tudai-web2-tp1;charset=utf8','root','');
    }
    
    public function GetCategories()
    {
        $sentence = $this->db->prepare("SELECT * FROM categories;");
        $sentence->execute();
        $data = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function PostCategory($tipo, $marca)
    {
        $sentence = $this->db->prepare("INSERT INTO `categories`(`type`, `brand`) VALUES (?,?)");
        $sentence->execute(array($tipo, $marca));
    }

    public function DeleteCategory($id)
    {
        $sentence = $this->db->prepare("DELETE FROM `categories` WHERE id=?");
        $sentence->execute(array($id));
    }

    public function ModifyCategory($id, $tipo, $marca)
    {
        $sentence = $this->db->prepare("UPDATE `categories` SET `type`='?',`brand`='?' WHERE id=?");
        $sentence->execute(array($tipo, $marca, $id));
    }
}