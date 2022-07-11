<?php

    require_once('functions.php');

    template_header('Salades');
?>

<section class="bestel">
    <h4>SALADES</h4>

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
            <img src="">
            <div class="centered">Salade</div>
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
          <a href="!#"><img src="">
            <div class="centered">Salade</div>
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
            <div class="centered">Salade</div>
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
            <div class="centered">Salade</div>
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
            <div class="centered">Salade</div>
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