<?php
session_start();
include('../config/config.php');

$title = 'Om Mig';
include('../view/header.php');
?>

<main class="container">
    <article>
        <h2>Kort introduktion om mig</h2>
        <p>Jag heter Hassan Hussain, har en stark passion för att lära mig att programmera så bra som möjligt. Jag har nyligen börjat studera PA1439-Webbteknologier på Blekinge Tekniska Högskola</p>
        <img src="img/hassan.png" width="100" class="centered_img" alt="Bild på mig">
        <p>Jag är en självlärd programmerare med några certiferingar i fickan och utvecklat ett stort intresse för webbutveckling och molnlösningar. Under resa har jag lärt mig både JavaScript och Python, och önskar fördjuppa mina kunskaper ytterligare genom attt studera Webbprogrammering på BTH. Dedikerad problemlösare med ett samarbetstänkande som alltid håller mig uppdaterad med de senaste branschtrenderna. </p>
        <p> På min fritid fördjupar jag mig i programmeringsappar och hänger med teknikens ständigt föränderliga landskapet. Denna passion för kodning kompletteras av en mängd olika intressen som skapar balans i mitt liv. Jag tycker om att utforska olika perspektiv inom religioner, spendera kvalitetstid med min familj och umgås med vänner på avslappnade grillkvällar där jag kan varva ner och knyta kontakter.</p>
    </article>
</main>

<?php include('../view/footer.php'); ?>