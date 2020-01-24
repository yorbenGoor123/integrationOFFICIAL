<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/HumoDAO.php';

class HumoController extends Controller {


  function __construct() {
    $this->humoDAO = new humoDAO();
  }

  public function index() {

    $books = $this->humoDAO->selectAllBooks();

    $this->set('books', $books);
  }

  public function abonnement() {

  }

  public function longread() {

  }

  public function product() {
    if (isset($_SESSION['personal_data'])){
      unset($_SESSION['personal_data']);
      }

      if (isset($_SESSION['personalisatie'])){
        unset($_SESSION['personalisatie']);
        }


    if (isset($_SESSION['abonnement'])){
      unset($_SESSION['abonnement']);
      }


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
    if (!empty($_POST['insertOrder'])) {
      $_SESSION['delivery'] = $_POST;
      }

    if (!empty($_POST['delivery'])) {
    $_SESSION['personal_data'] = $_POST;
    }

    if (!empty($_POST['personalisatie'])) {
      $_SESSION['personalisatie'] = $_POST;
      }

    if(!empty($_POST['abonnement'])){
      $_SESSION['abonnement'] = $_POST;
    }

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertOrder'){
        $data = array(
          'name' => $_SESSION['personal_data']['name'],
          'email' => $_SESSION['personal_data']['email'],
          'adress' => $_SESSION['personal_data']['street'],
          'city' => $_SESSION['personal_data']['gemeente'],
          'postal_code' => $_SESSION['personal_data']['postcode'],
          'telephone_number' => $_SESSION['personal_data']['number'],
          'delivery_option' => $_POST['leveroptie'],
          'total_price' => $_SESSION['totalprice']
        );

        $insertedOrder = $this->humoDAO->insertOrder($data);
        if(!$insertedOrder){
          $errors = $this->humoDAO->validate($data);
          $this->set('errors',$errors);
        }else{
          $_SESSION['info'] = 'Bedankt voor je aankoop';
          header('Location:index.php?page=product');
          if (isset($_SESSION['cart'])){
            unset($_SESSION['cart']);
            }
          exit();
        }
      }
    }

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertOrderCustom'){
        $data = array(
          'product_name' => $_SESSION['personalisatie']['product'],
          'product_color' => $_SESSION['personalisatie']['color'],
          'product_patern' => $_SESSION['personalisatie']['patern'],
          'product_text' => $_SESSION['personalisatie']['custom_text'],
          'name' => $_SESSION['personal_data']['name'],
          'email' => $_SESSION['personal_data']['email'],
          'adress' => $_SESSION['personal_data']['street'],
          'city' => $_SESSION['personal_data']['gemeente'],
          'postal_code' => $_SESSION['personal_data']['postcode'],
          'telephone_number' => $_SESSION['personal_data']['number'],
          'delivery_option' => $_POST['leveroptie']
        );

        $insertedOrderCustom = $this->humoDAO->insertOrderCustom($data);
        if(!$insertedOrderCustom){
          $errors = $this->humoDAO->validate($data);
          $this->set('errors',$errors);
        }else{
          $_SESSION['info'] = 'Bedankt voor je aankoop';
          header('Location:index.php?page=product');
          exit();
        }
      }
    }

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertAbo'){
        $data = array(
          'formula' => $_SESSION['abonnement']['choice'],
          'name' => $_SESSION['personal_data']['name'],
          'email' => $_SESSION['personal_data']['email'],
          'adress' => $_SESSION['personal_data']['street'],
          'city' => $_SESSION['personal_data']['gemeente'],
          'postal_code' => $_SESSION['personal_data']['postcode'],
          'telephone_number' => $_SESSION['personal_data']['number'],
          'delivery_option' => $_POST['leveroptie'],
          'total_price' => 10
        );

        $insertedAbo = $this->humoDAO->insertAbo($data);
        if(!$insertedAbo){
          $errors = $this->humoDAO->validate($data);
          $this->set('errors',$errors);
        }else{
          $_SESSION['info'] = 'Bedankt voor je aankoop';
          header('Location:index.php?page=product');
          exit();
        }
      }
    }

}

  public function personalisatie() {
    if (isset($_SESSION['personalisatie'])){
      unset($_SESSION['personalisatie']);
      }
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
