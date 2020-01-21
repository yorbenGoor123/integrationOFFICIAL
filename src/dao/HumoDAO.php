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

  public function selectTypes(){
    $sql = "SELECT DISTINCT `product_type` FROM `tblproducts` ORDER BY `product_type`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectByType($type){
    $sql = "SELECT * FROM `tblproducts` WHERE `product_type` LIKE :type";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':type',$type);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectBookById($idhome){
    $sql = "SELECT * FROM `tblproducts` WHERE `product_type` = 'book' AND `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id',$idhome);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }



}
