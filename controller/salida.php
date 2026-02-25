<?php
class Salida extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function guardar()
  {
    $codpersonal = $_POST['codpersonal'];
  }

  public function render()
  {
    $this->view->Render('salida/index');
  }
 
}