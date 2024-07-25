<?php require ('views/header.php');?>
<link rel="stylesheet" href="./public/css/galeria.css">


  <div class="grid-container  ">
    <div class="section-title">TIPOS</div>
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <div class="card">
          <div class="card-title">COMUNES</div>
          <div class="card-number"><?php echo $this->data['normalizados'];?></div>
          <a class="button button-custom" href="<?php constant('URL');?>galeria/listcomunes">ver</a>
        </div>
      </div>
      <div class="medium-6 cell">
        <div class="card">
          <div class="card-title">FISCALIZADOS</div>
          <div class="card-number"><?php echo $this->data['fiscalizados'];?></div>
          <a class="button button-custom" href="<?php constant('URL');?>galeria/listfiscalizados">ver</a>
        </div>
      </div>
    </div>
    <div class="section-title">CLASIFICADOS</div>
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <div class="card">
          <div class="card-title">ACIDOS</div>
          <div class="card-number"><?php echo $this->data['acidos'];?></div>
          <a class="button button-custom" href="<?php constant('URL');?>galeria/listacidos">ver</a>
        </div>
      </div>
      <div class="medium-6 cell">
        <div class="card">
          <div class="card-title">BASICOS</div>
          <div class="card-number"><?php echo $this->data['basicos'];?></div>
          <a class="button button-custom" href="<?php constant('URL');?>galeria/listbasicos">ver</a>
        </div>
      </div>
    </div>
  </div>


<?php require ('views/footer.php');?>