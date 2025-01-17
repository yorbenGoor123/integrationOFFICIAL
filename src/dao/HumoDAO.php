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

  public function selectAllBooks(){
    $sql = "SELECT * FROM `tblproducts` WHERE `product_type` = 'book'";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectBookById($idBook){
    $sql = "SELECT * FROM `tblproducts` WHERE `product_type` = 'book' AND `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id',$idBook);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insertOrder($data) {
    $errors = $this->validate( $data );
    if (empty($errors)) {
      $sql = "INSERT INTO `orders` (`order_id`, `name`, `email`, `adress`, `city`, `postal_code`, `telephone_number`, `delivery_option`, `total_price`) VALUES (:order_id, :name, :email, :adress, :city, :postal_code, :telephone_number, :delivery_option, :total_price)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':order_id', $data['order_id']);
      $stmt->bindValue(':name', $data['name']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':adress', $data['adress']);
      $stmt->bindValue(':city', $data['city']);
      $stmt->bindValue(':postal_code', $data['postal_code']);
      $stmt->bindValue(':telephone_number', $data['telephone_number']);
      $stmt->bindValue(':delivery_option', $data['delivery_option']);
      $stmt->bindValue(':total_price', $data['total_price']);

      if ($stmt->execute()) {
        return $this->selectById($this->pdo->lastInsertId());
      }
    }
    return false;
  }

  public function insertAbo($data) {
    $errors = $this->validate( $data );
    if (empty($errors)) {
      $sql = "INSERT INTO `tblabonnementen` (`abonnementOrder_id`, `formula`, `name`, `email`, `adress`, `city`, `postal_code`, `telephone_number`, `delivery_option`) VALUES (:abonnementOrder_id, :formula, :name, :email, :adress, :city, :postal_code, :telephone_number, :delivery_option)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':abonnementOrder_id', $data['abonnementOrder_id']);
      $stmt->bindValue(':formula', $data['formula']);
      $stmt->bindValue(':name', $data['name']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':adress', $data['adress']);
      $stmt->bindValue(':city', $data['city']);
      $stmt->bindValue(':postal_code', $data['postal_code']);
      $stmt->bindValue(':telephone_number', $data['telephone_number']);
      $stmt->bindValue(':delivery_option', $data['delivery_option']);

      if ($stmt->execute()) {
        return $this->selectById($this->pdo->lastInsertId());
      }
    }
    return false;
  }

  public function insertOrderCustom($data) {
    $errors = $this->validate( $data );
    if (empty($errors)) {
      $sql = "INSERT INTO `tblordersCustom` (`orderCustom_id`, `product_name`, `product_color`, `product_patern`, `product_text`, `name`, `email`, `adress`, `city`, `postal_code`, `telephone_number`, `delivery_option`) VALUES (:orderCustom_id, :product_name, :product_color, :product_patern, :product_text, :name, :email, :adress, :city, :postal_code, :telephone_number, :delivery_option)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':orderCustom_id', $data['orderCustom_id']);
      $stmt->bindValue(':product_name', $data['product_name']);
      $stmt->bindValue(':product_color', $data['product_color']);
      $stmt->bindValue(':product_patern', $data['product_patern']);
      $stmt->bindValue(':product_text', $data['product_text']);
      $stmt->bindValue(':name', $data['name']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':adress', $data['adress']);
      $stmt->bindValue(':city', $data['city']);
      $stmt->bindValue(':postal_code', $data['postal_code']);
      $stmt->bindValue(':telephone_number', $data['telephone_number']);
      $stmt->bindValue(':delivery_option', $data['delivery_option']);

      if ($stmt->execute()) {
        return $this->selectById($this->pdo->lastInsertId());
      }
    }
    return false;
  }

  public function validate( $data ){
    $errors = [];

    if (empty($data['name']) ){
      $errors['name'] = 'Gelieve een naam in te vullen';
    }
    if (!isset($data['email'])) {
      $errors['email'] = 'Gelieve email in te vullen';
    }
    if (!isset($data['adress'])) {
      $errors['adress'] = 'Gelieve adress in te vullen';
    }
    if (!isset($data['city'])) {
      $errors['city'] = 'Gelieve city in te vullen';
    }
    if (!isset($data['postal_code'])) {
      $errors['postal_code'] = 'Gelieve postcode in te vullen';
    }
    if (!isset($data['telephone_number'])) {
      $errors['telephone_number'] = 'Gelieve telefoon nummer in te vullen';
    }
    if (!isset($data['delivery_option'])) {
      $errors['delivery_option'] = 'Gelieve levering in te vullen';
    }
    return $errors;
  }

}
