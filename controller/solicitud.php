<?php
class Solicitud extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function guardar()
  {
    $codpersonal = $_POST['codpersonal'];
    $nomproducto = $_POST['nomproducto'];
    $cantidad    = $_POST['cantidad'];
    $unimedida   = $_POST['unimedida'];
    $usoproducto = $_POST['usoproducto'];
    $obs         = $_POST['obs'];
  }

  public function render()
  {
    $this->view->Render('solicitud/index');
  }
 
}