<?php

    require_once('functions.php');

    template_header('Vleesgerechten');
?>

<section class="bestel">
    <h4>VLEESGERECHTEN</h4>

    <p class="text"></p>
</section>

<section class="terug">
  <a href="bestel.php">Ga terug</a>
</section>


<section class="text vlees">
  <div class="container-fluid">
    <div class="row">  

        <div class="col">
          <a href="!#">
            <img src="https://static.ah.nl/static/recepten/img_RAM_PRD126673_612x450_JPG.jpg">
            <div class="centered">Boeuf bourguignon</div>
          </a>
          <div>
          <div class="toevoegen">
            <label for="aantal">Aantal personen: </label>
            <input type="number" id="aantal" name="aantal" min="1" max="200">
            <br>
            <button>Toevoegen aan winkelwagen</button>
          </div>
          </div>
        </div>

        <div class="col">
          <a href="!#"><img src="https://static.ah.nl/static/recepten/img_RAM_PRD126701_612x450_JPG.jpg">
            <div class="centered">Gevulde varkenshaas</div>
          </a>
          <div class="toevoegen">
            <label for="aantal">Aantal personen: </label>
            <input type="number" id="aantal" name="aantal" min="1" max="200">
            <br>
            <button>Toevoegen aan winkelwagen</button>
          </div>
        </div>

        <div class="col">
          <a href="!#"><img src="">
            <div class="centered">Vlees</div>
          </a>
          <div class="toevoegen">
            <label for="aantal">Aantal personen: </label>
            <input type="number" id="aantal" name="aantal" min="1" max="200">
            <br>
            <button>Toevoegen aan winkelwagen</button>
          </div>
        </div>

        <div class="col">
          <a href="!#"><img src="">
            <div class="centered">Vlees</div>
          </a>
          <div class="toevoegen">
            <label for="aantal">Aantal personen: </label>
            <input type="number" id="aantal" name="aantal" min="1" max="200">
            <br>
            <button>Toevoegen aan winkelwagen</button>
          </div>
        </div>

        <div class="col">
          <a href="!#"><img src="">
            <div class="centered">Vlees</div>
          </a>
          <div class="toevoegen">
            <label for="aantal">Aantal personen: </label>
            <input type="number" id="aantal" name="aantal" min="1" max="200">
            <br>
            <button>Toevoegen aan winkelwagen</button>
          </div>
        </div>


    </div>
  </div>


</section>

<?=template_footer()?>