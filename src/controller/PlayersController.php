<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PlayerDAO.php';

class PlayersController extends Controller {

  private $todoDAO;

  function __construct() {
    $this->playerDAO = new PlayerDAO();
  }

  public function index() {
    if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
      $players = $this->playerDAO->search($_GET['term']);
      $this->set('title', "Players for ". $_GET['term']);
      $this->set('term',$_GET['term']);
    }else{
      $players = $this->playerDAO->selectTopPlayers();
      $this->set('title', "Top 10");
      $this->set('term','');
    }

    $this->set('players', $players);
    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      echo json_encode($players);
      exit();
    }
  }
/*
  private function handleSearchPlayer() {

    if (!$searchPlayersResult) {
      $errors = "No players found";
      $this->set('errors', $errors);
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'error',
          'errors' => $errors
        ));
        exit();
      }else{
        return $errors;
      }
      $_SESSION['error'] = $errors;
    } else {
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'ok',
          'todo' => $searchPlayersResult
        ));
        exit();
      }else{
        return searchPlayersResult;
      }
      $_SESSION['info'] = count($searchPlayersResult). " players found";
      header('Location: index.php');
      exit();
    }
  }*/

}
