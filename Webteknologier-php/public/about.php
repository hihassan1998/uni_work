<?php include('../config/config.php');

session_start();

$title = 'Om kurs och webbplatsen';


include('../view/header.php');
?>



<div class="container">
    <main>
        <!-- <h1>Om kursen och webbplatsen</h1> -->
        <article>

            <h2>Webbteknologier</h2>
            <img src="img/webbtec.jpg" width="500" class="centered_img" alt="Bild på kursen">
            <p>
                Kursen "Webbteknologier" är en grundkurs som introducerar HTML,CSS och PHP-programmering.Kursen täcker områden som är viktiga för att bygga en webbplats med hjälp av HTML, stylesheets och ett skriptspråk. Kursen lär oss använding av CSS för laylout och design, samt grundläggande PHP för att hantera formulär, skapa dynamiska webbplatser och lagra data i en filbaserad databas(SQlite). Denna kurs är för nybörjare utan krav på några förkunskaper och syftar till att ge en solid grund i webbutveckling.
            </p>

            <h2>Denna webbplatsen</h2>
            <p>Jag bygger denna webbplats för att visa det jag kan och allt som jag kommer att lära mig under kursens gång för min lärare.</p>
            <ul>
                <li>Denna webbplats innehåller en Me-sida som innehåller en kort beskriving av mig som person.</li>
                <li>
                    About-Sidan innehåller information om denna webbpalts som du ser just nu och den kurs som gav mig de kunskaper du kan behova för att göra en sån hhär snygg webbsida med hjälp av HTML,CSS och PHP med mera.
                </li>
                <li>Datum websidda som innehåller dagens datum tillsammas med sama format på webbsida med en header och en footer. </li>
                <li>
                    En report-sida som innehåller information svar på redovisngs frågor till kursens varje del moment.
                </li>
            </ul>

            <h2>Lite info om resurser i footern av websidan</h2>
            <p>Det finns flera olika typer av stödverktyg som kan vara användbara vid webbutveckling, och dessa kan enkelt hittas i footern på min webbplats. Du kan få tillgång till HTML- och CSS-validerare via länkarna nedan för att säkerställa att webbplatsen följer de standarder som bör beaktas.</p>
        </article>
    </main>
    <aside>
        <h3>Kort om webbtec</h3>
        <p>Denna kurs är en del av års kurs ett inom Webbprogrammering på Blekinge Tekniska Högskolan.</p>
        <h3>Kursrepo</h3>
        <p>
            För mer information krig kursen och kursmaterialet, besöka gärna kursens <a href="https://github.com/dbwebb-se/webtec.git">GitHub-Repo</a>
        </p>
    </aside>
</div>

<?php include('../view/footer.php') ?>