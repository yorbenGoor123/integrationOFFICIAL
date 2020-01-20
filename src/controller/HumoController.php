<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/HumoDAO.php';

class HumoController extends Controller {


  function __construct() {
    $this->humoDAO = new humoDAO();
  }

  public function index() {

    }

  public function longread() {

    }

  public function product() {
    $products = $this->humoDAO->selectAllProducts();

    $this->set('products', $products);
    }

  public function basket() {

    }

  public function detail() {
    if(!empty($_GET['id'])){
      $product = $this->humoDAO->selectById($_GET['id']);
    }

    if(empty($product)){
      $_SESSION['error'] = 'The product does not exist';
      header('Location:index.php?page=product');
      exit();
    }

    $this->set('product',$product);
    }

  public function checkout() {

    }

}
