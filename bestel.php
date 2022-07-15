<?php

    require_once('functions.php');

    template_header('Catalogus');
?>

<section class="bestel">
    <h4>CATALOGUS</h4>
</section>
<section class="text">
  <div class="container">
    <div class="row">  

      <div class="col">
        <a href="voorgerechten.php">
          <img src="imgs/voorgerechten.jpg" alt="Voorgerechten">
          <div class="centered">Voorgerechten</div>
        </a>
      </div>

        <div class="col">
          <a href="vlees.php">
            <img src="imgs/vlees.jpg" alt="Vleesgerechten">
            <div class="centered">Vleesgerechten</div>
          </a>
        </div>
        

        <div class="col">
          <a href="vis.php">
            <img src="imgs/vis.jpg" alt="Visgerechten">
            <div class="centered">Visgerechten</div>
          </a>
        </div>

        <div class="col">
        <a href="vegan.php">
          <img src="imgs/vegan.jpg" alt="Veganistische gerechten">
          <div class="centered">Veganistische gerechten</div>
        </a>
      </div>

        <div class="col">
        <a href="salades.php">
          <img src="imgs/salades.jpg" alt="Salades">
          <div class="centered">Salades</div>
        </a>
        </div>

        <div class="col">
        <a href="desserts.php">
          <img src="imgs/desserts.jpg" alt="Desserts">
          <div class="centered">Desserts</div>
        </a>
      </div>
    </div>

</div>
</section> 

<?=template_footer()?>