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
          <img src="https://previews.123rf.com/images/grafvision/grafvision1607/grafvision160700109/59974467-viele-platten-von-vorspeisen-in-der-gewerblichen-k%C3%BCche-zubereitet.jpg" alt="Voorgerechten">
          <div class="centered">Voorgerechten</div>
        </a>
      </div>

        <div class="col">
          <a href="vlees.php">
            <img src="https://chickslovefood.com/wp-content/uploads/2019/11/IMG_0021-3-1000x640.jpg" alt="Vleesgerechten">
            <div class="centered">Vleesgerechten</div>
          </a>
        </div>
        

        <div class="col">
          <a href="vis.php">
            <img src="https://img.static-rmg.be/a/view/q75/w960/h520/2169452/visgerechten-collect-go-9-960x520.jpg" alt="Visgerechten">
            <div class="centered">Visgerechten</div>
          </a>
        </div>

        <div class="col">
        <a href="vegan.php">
          <img src="https://www.lekkerensimpel.com/wp-content/uploads/2020/09/IMG_4455-1-720x400.jpg" alt="Veganistische gerechten">
          <div class="centered">Veganistische gerechten</div>
        </a>
      </div>

        <div class="col">
        <a href="salades.php">
          <img src="https://www.galbani.fr/wp-content/uploads/2020/05/AdobeStock_220126244-800x600.jpeg" alt="Salades">
          <div class="centered">Salades</div>
        </a>
        </div>

        <div class="col">
        <a href="desserts.php">
          <img src="https://images.immediate.co.uk/production/volatile/sites/30/2020/08/dessert-main-image-molten-cake-0fbd4f2.jpg" alt="Desserts">
          <div class="centered">Desserts</div>
        </a>
      </div>
    </div>

</div>
</section> 

<?=template_footer()?>