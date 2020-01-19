<?php

require_once( __DIR__ . '/DAO.php');

class HumoDAO extends DAO {
  public function selectAllProducts(){
    $sql = "SELECT * FROM `tblproducts`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `tblproducts` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

}
