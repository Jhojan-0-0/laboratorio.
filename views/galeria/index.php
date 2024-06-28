<?php require ('views/header.php');?>
<link rel="stylesheet" href="./public/css/galeria.css">


  <div class="grid-container">
    <div class="section-title">TIPOS</div>
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <div class="card">
          <div class="card-title">NORMALIZADOS</div>
          <div class="card-number"><?php echo $this->data['normalizados'];?></div>
          <button class="button button-custom">VER</button>
        </div>
      </div>
      <div class="medium-6 cell">
        <div class="card">
          <div class="card-title">FISCALIZADOS</div>
          <div class="card-number"><?php echo $this->data['fiscalizados'];?></div>
          <button class="button button-custom">VER</button>
        </div>
      </div>
    </div>
    <div class="section-title">CLASIFICADOS</div>
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <div class="card">
          <div class="card-title">ACIDOS</div>
          <div class="card-number"><?php echo $this->data['acidos'];?></div>
          <button class="button button-custom">VER</button>
        </div>
      </div>
      <div class="medium-6 cell">
        <div class="card">
          <div class="card-title">BASICOS</div>
          <div class="card-number"><?php echo $this->data['basicos'];?></div>
          <button class="button button-custom">VER</button>
        </div>
      </div>
    </div>
  </div>


<?php require ('views/footer.php');?>