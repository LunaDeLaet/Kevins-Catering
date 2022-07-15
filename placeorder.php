<?=template_header('Bestelling plaatsen')?>


<div class="placeorder">
    <div class="overschrijvingsinfo">
        <h1>Bestelling bijna voltooid!</h1>
        <p>De betaling van bestellingen bij Kevins catering gebeurt momenteel nog via bankoverschrijving. 
            <br><br>
            Gelieve het onderstaande formulier in te vullen met uw persoonlijke gegevens en een overschrijving te verrichten naar het volgende IBAN-nummer: 
            <br><br><strong>BE13 0018 1504 8539</strong>
            <br><br>
            U ontvangt na het bestellen nog een e-mail met deze gegevens en de overschrijvingsdetails.
            <br><br>
            Uw bestelling wordt pas geregistreerd nadat u het bedrag heeft overgeschreven!
        </p>
    </div>

    <div class="bestelling-form">
        <form action="/placed.php" method="POST">
            <label for="name">Voornaam + naam: </label><br>
            <input type="text" id="naam" name="naam" required><br><br>
            <label for="adres">Adres: </label><br>
            <input type="text" id="adres" name="adres" required><br><br>
            <label for="adres">e-mailadres: </label><br>
            <input type="text" id="mail" name="mail" required><br><br>
            <label for="IBAN">Uw IBAN: </label><br>
            <input type="text" id="IBAN" name="IBAN" required><br><br>
            <button type="submit" formaction="/placed.php" class="bevestig">Bevestig bestelling</button>
        </form>
    </div>
</div>

<?=template_footer()?>