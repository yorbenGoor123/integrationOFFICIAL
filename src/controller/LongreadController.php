<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/LongreadDAO.php';

class LongreadController extends Controller {


  function __construct() {
    $this->playerDAO = new PlayerDAO();
  }

  public function index() {

    }

}
