<?php

    require_once('functions.php');

    template_header('Contact');
?>

<section class="contact">
    <h4>CONTACT</h4>
    <div class="contact__list">
            <div class="contact__email">
                <i class="fas fa-envelope"></i> Email
                <div class="text-secondary">luna.dl@hotmail.com</div>
            </div>
            <div class="contact__phone">
                <i class="fas fa-mobile-alt"></i> Tel.
                <div class="text-secondary">+324 67 03 97 74</div>                 
            </div>
            <div class="contact__address">
                <i class="fas fa-marker-alt"></i> Adres
                <div class="text-secondary">Straat 123, 2570 Duffel, Belgium</div>
                
        </div>
</section>

<?=template_footer()?>