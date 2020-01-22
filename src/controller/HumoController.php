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

  public function detail() {
    if(!empty($_GET['id'])){
      $product = $this->humoDAO->selectById($_GET['id']);
    }

    if(empty($product)){
      $_SESSION['error'] = 'The product does not exist';
      header('Location:index.php?page=product');
      exit();
    }

    if (!empty($_POST['action'])) {
      // kijk of er op een add button geklikt werd
      if ($_POST['action'] == 'add') {
          // logica staat in aparte functie om deze compact te houden
          $this->_handleAdd();
          header('Location: index.php?page=basket');
          exit();
      }
  }

    $this->set('product',$product);
    }

    public function basket() {
      if (isset($_SESSION['personal_data'])){
      unset($_SESSION['personal_data']);
      }
      if (!empty($_POST['remove'])) {
        // 1 specifiek item verwijderen uit de cart - zie aparte functie
        $this->_handleRemove();
        // redirect naar dezelfde pagina om geen melding te krijgen bij refresh
        header('Location: index.php?page=basket');
        exit();
    }
    if (!empty($_POST['action'])) {
    if ($_POST['action'] == 'update') {
      // een beetje meer werk - zie aparte functie
      $this->_handleUpdate();
  }
}
      }

  public function checkout() {
    if (!empty($_POST['Payment'])) {
      $_SESSION['delivery'] = $_POST;
      }

    if (!empty($_POST['delivery'])) {
    $_SESSION['personal_data'] = $_POST;
    }

}

  public function personalisatie() {
    
  }

    private function _handleAdd() {
      if (empty($_SESSION['cart'][$_POST['id']])) {
        $product = $this->humoDAO->selectById($_POST['id']);
        if (empty($product)) {
          return;
        }
        $_SESSION['cart'][$_POST['id']] = array(
          'product' => $product,
          'quantity' => $_POST['quantity']
        );
      }
  }

  private function _handleRemove() {
    // de waarde van $_POST['remove'] is een movie id
    // verwijder deze uit de sessie variabele indien deze bestaat
    if (isset($_SESSION['cart'][$_POST['remove']])) {
        unset($_SESSION['cart'][$_POST['remove']]);
    }
}

private function _handleUpdate() {
  // de hoeveelheden per movie komen binnen als een associatieve array
  // bekijk de html code via view source om de names van de input velden te bekijken
  // overloop alle quantities die binnenkomen via post
  foreach ($_POST['quantity'] as $productId => $quantity) {
      if (!empty($_SESSION['cart'][$productId])) {
          // stel de nieuwe quantity in
          $_SESSION['cart'][$productId]['quantity'] = $quantity;
      }
  }

}

}
