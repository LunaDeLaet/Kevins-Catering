<?php
require_once('functions.php');
template_header('Bestelling geplaatst!');
?>




<section class="placed">
            <h1>Uw bestelling is geplaatst!</h1>
            <p>Hartelijk bedankt om bij Kevins catering te bestellen!
                <br><br>
                Het enige dat u nog moet doen, is &euro;<?=$subtotal?> overschrijven op volgende IBAN: 
                <br><br>  BE13 0018 1504 8539.
                <br><br><br>
                
                Indien u vragen heeft over uw bestelling, kan u altijd contact opnemen met ons via volgende contactgegevens:
                <br>
                luna.dl@hotmail.com <br>
                +324 67 03 97 74
            </p>
</section>

<?=template_footer()?>