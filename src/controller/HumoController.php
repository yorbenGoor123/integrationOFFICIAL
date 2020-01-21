<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/HumoDAO.php';

class HumoController extends Controller {


  function __construct() {
    $this->humoDAO = new humoDAO();
  }

  public function index() {

    if(!empty($_GET['idhome'])){
      $producthome = $this->humoDAO->selectBookById($_GET['idhome']);
    }

    if(empty($producthome) && $_GET['idhome'] = "0"){
      header('index.php?&idhome=1');
      exit();
    }

  $this->set('producthome',$producthome);
    }

  public function longread() {

    }

  public function product() {


    if(empty($_GET['type']) || $_GET['type'] === 'all'){
      $products = $this->humoDAO->selectAllProducts();


    }else{
      $products = $this->humoDAO->selectByType($_GET['type']);


    }
    if(empty($products)){
      $products = $this->humoDAO->selectAllProducts();

    }

    if ($_SERVER['HTTP_ACCEPT'] == 'application/json') {
      echo json_encode($products);
      exit();
    }

    $this->set('products', $products);
    $this->set('types',$this->humoDAO->selectTypes());
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
