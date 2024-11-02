<?php
session_start();
include('../config/config.php');

$title = 'Redovisning';

include('../view/header.php');
?>

<!-- <h1>Redovisning</h1> -->
<div class="container">

    <aside>
        <p><strong>Innehållsförteckning:</strong></p>
        <ul>
            <li><a href="#kmom01">kmom01</a></li>
            <li><a href="#kmom02">kmom02</a></li>
            <li><a href="#kmom03">kmom03</a></li>
            <li><a href="#kmom04">kmom04</a></li>
            <li><a href="#kmom05">kmom05</a></li>
            <li><a href="#kmom06">kmom06</a></li>
            <!-- <li><a href="#kmom07">kmom07</a></li> -->
            <li><a href="#kmom10">kmom10</a></li>
        </ul>
    </aside>
    <main>

        <article>
            <h2 id="kmom01">kmom01</h2>

            <p>
                I den första veckan av webbteknologikursen började jag med att uppdatera min Windows 11. Jag satte igång kursen genom att ladda ner Ubuntu och använde detta operativsystem tillsammans med Bash för att klona mitt kursrepo. Jag valde Visual Studio Code som min textredigerare eftersom det ger en tydlig översikt över hela katalogstrukturen och gör det enkelt att organisera filer. Jag anser att VS Code är den bästa textredigeraren på marknaden på grund av dess omfattande funktioner och användarvänlighet.
                <br><br>
                Installationen av labbmiljön gick smidigt. Jag följde de tydliga instruktionerna för att installera verktyget dbwebb i terminalen. Att använda terminalen kändes bekant, vilket underlättade processen. Efter installationen klonade jag kursrepot och navigerade till den nya katalogen, vilket bekräftade att jag hade tillgång till kursmaterialet. En viktig del var att konfigurera dbwebb, inklusive att generera SSH-nycklar för säker inloggning på studentservern. Även om det kändes utmanande, var det lärorikt och gav mig en bättre förståelse för hanteringen av kurskatalogen. Tack vare de instruktioner och videoguider som fanns tillgängliga på dbwebb-portalen underlättades hela processen, och det gick utmärkt att installera labbmiljön.
                <br><br>
                Jag har tidigare erfarenhet av terminalen, inklusive Python-terminalen och Bash, samt verktyg som IBM CLI och kubectl. Denna bakgrund gjorde att jag enkelt kunde navigera genom kurskatalogen på studentservern. En utmaning var dock att ladda ner och konfigurera XAMPP, eftersom det var lite svårt att förstå hur jag skulle hosta en lokal server på min dator. Det var samtidigt intressant att utforska min dators kapabiliteter med XAMPP-programvaran, vilket gav mig värdefulla insikter i serverhantering.
                <br><br>
                Jag var bekant med HTML och CSS, men det är min första gång jag använder PHP som skriptspråk. Jag tror att det kommer att gå bra eftersom jag har tidigare erfarenhet av JavaScript och TypeScript. Under detta kursmoment har jag fått en grundlig introduktion till XAMPP-programvaran, vilket har gett mig värdefulla insikter i serverhantering. Denna erfarenhet var en viktig del av kursens första steg och bidrog till min förståelse för webbutveckling. Jag fick lära mig hur man bäddar PHP-kod i HTML och hur man använder det för enkla uppgifter, såsom att skapa dynamiska webbsidor. Dessutom har jag lärt mig att inkludera gemensamma sidokomponenter, såsom headers och footers, på flera webbsidor. Detta har hjälpt mig att hålla koden DRY, vilket är avgörande för att göra koden mer hanterbar och effektiv. Jag ser fram emot att utforska mer avancerade aspekter av PHP och fördjupa mig lite mer om databashantering, vilket jag tror kommer att ytterligare stärka mina kunskaper.
            </p>
        </article>
        <hr>
        <article>
            <h2 id="kmom02">kmom02</h2>
            <p>
                Under den andra veckan av webbteknologikursen började jag arbeta med styling och CSS-filerna för att styla mina webbsidor och göra dem lite mer personliga. Det var en blandad upplevelse, både givande och utmanande.
                <br>
                I början tyckte jag att det var svårt att arbeta med CSS. Jag kände mig förvirrad över hur olika konstruktioner fungerade tillsammans, men när jag började förstå Flexbox blev det enklare. Jag valde olika nyanser av blått, som är en av mina favoritfärger, vilket gav mig chansen att visa upp min lugnare sida genom dessa färger, att se hur mina ändringar direkt påverkade designen var mycket tillfredsställande. Jag lärde mig att anpassa layouten och designen samtidigt som jag höll koll på alla taggar och klassnamn, vilket gjorde mig mer engagerad. Jag insåg också att det är viktigt att ha en bra förståelse för CSS-syntax, då man inte kan blanda ihop det med andra och nyare CSS-syntaxer, såsom Sass/LESS-stil.
                <br><br>
                Det kan vara svårt för nybörjare, framförallt att bekanta sig med CSS-syntaxen och att förstå skillnaden mellan vanlig CSS och CSS som är beroende av preprocessors. Det kan också kännas svårt och stressande att hålla koll på alla delar av koden och komma ihåg vilka element som har olika klassnamn, samt vilken klass-styling som hör till vad.
                <br>
                En bra idé är att dela upp CSS-filerna så snart de börjar bli för långa. Om filen blir för stor kan det vara jobbigt att leta efter en viss konstruktion som man skrev för 10-30 minuter sedan. Att dela upp en stor CSS-fil i mindre, hanterbara delar som är särskilda för olika delar av webbsidan kan underlätta arbetet.
                <br>
                Ju mer man läser om CSS-regler från dokumentationer som MDN, desto lättare blir det att förstå och tillämpa olika CSS-konstruktioner till deras fulla potential.
                <br><br>

                Jag är mycket nöjd med min webbplats. Jag gillar hur headern kan placeras både högst upp på sidan eller ovanpå navbaren, och att det fungerar bra på båda ställena tack vare min styling. Jag gillar också utseendet på min footer, men det finns alltid utrymme för förbättringar.
                <br>
                Jag är särskilt nöjd med den responsiva designen, men jag har noterat vissa områden som kan förbättras, såsom textjusteringar, användarvänlighet på mobila enheter, och att effektivt minimera och återanvända klasser i mina CSS-regler. Jag anser att man ständigt behöver förbättra och optimera sin webbplats för att den ska vara både visuellt tilltalande och funktionell.
                <br><br>
                Jag anser att jag har lärt mig mycket genom denna uppgift. Det är viktigt att förstå hur CSS fungerar, och jag har lärt mig skillnaderna mellan Sass och LESS. Jag insåg att jag inte kunde använda nestade regler i vanlig CSS, något jag sett online och försökte prova. Men denna genväg ledde till problem med CSS-validering, där jag fick många parserfel och var tvungen att bryta ner mina nestade CSS-regler.
                <br>
                Denna erfarenhet har stärkt min förståelse för CSS och vikten av att läsa och tolka felmeddelanden. Det har också visat mig att det finns många olika sätt att styla en webbplats, och att en djup förståelse av dessa verktyg är avgörande för att skapa välfungerande och estetiskt tilltalande webbsidor.
            </p>
        </article>
        <hr>
        <article>
            <h2 id="kmom03">kmom03</h2>

            <p>
                Under den tredje veckan av webbteknologikursen började jag arbeta mer på skriptsidan i PHP. Skriptspråket känns ganska enkelt att komma igång med. Jag har börjat förstå varför PHP har sina rötter i webbprogrammering och hur det är designat för att skapa dynamiska webbplatser. Under arbetsgången har jag förstått de grundläggande delarna av språket såsom hur man skriver variabler, använder echo, hur den underlättar att sätta värden till variabler och kalla fram data samt hur man använder kontrollstruktur (if-satser, loopar) för att styra flödet av programmet. Jag kan nu kombinera flera element i PHP, som att använda GET- formulär, och nu förstår jag hur HTML, CSS och PHP i bakgrunden binds ihop för att skapa en dynamisk webbsida.
                <br><br>
                Att dela upp koden i olika sidokontroller och vyer känns lite skrämmande i början, då man kan ha många filer, mappar och undermappar, men det är värt att dela upp koden på så sätt. När man väl börjar dela upp webbsidans funktionalitet i sidokontroller börjar koden att bli mer organiserad. Uppdelade sidokontroller och vyer resulterar i en renare struktur och gör det lättare för andra att förstå applikationens funktionalitet. Det underlättar för framtida uppskalning och underhåll av applikationen.
                <br><br>
                Jag känner mig bekväm med PHP:s grundläggande konstruktioner som variabler, if-satser och loopar, men det är ibland svårt att hålla reda på syntaxen. Det var relativt lätt att lösa uppgiften då det finns mycket hjälp i övningsdelen, men det som kändes svårare var formulärshanteringen. Det var utmanande med serverdatahanteringen där jag inser att jag behöver satsa mer för att kunna förstå på djuphet. Jag tycker att jag har god logik i koden och använt loopar effektivt, men jag inser att nästa steg är att fördjupa mig i mer avancerad funktionalitet, särskilt när det gäller formulärhantering och serverdata.
                <br><br>
                För att lösa uppgifter började jag med att gå igenom övningsuppgifterna noggrant och försökt förstå grunderna. Sedan vände jag mig till själva uppgiften och började med att dela upp uppgifterna i mindre steg för att slutföra den. Jag löste uppgiften genom att steg för steg skapa olika sidokontrollerna och använde mig av PHP:s inbyggda funktioner för att hantera datum och querysträng. Jag testade med olika datum för att se om fredagsberäkningslogiken fungerade korrekt och om kalendern uppdaterades korrekt. Till slut testade jag filstrukturen och validerade HTML- och CSS-koden. Jag är nöjd med resultatet, och sidorna fungerar som förväntat och jag lyckades implementera alla grundläggande krav. Det känns bra att ha kommit så här långt, och jag planerar att fortsätta utforska mer avancerade funktioner i PHP.

                <br><br>
                Det viktigaste jag har lärt mig är datumfunktioner och hur sidorna kan bli uppdelade för att hantera kod organiserad i PHP-syntax. Jag har nu mer förståelse för hur GET-querysträngar och datumhantering fungerar och vilken roll de spelar i en dynamisk webbsida, och hur sidan ändras beroende på input från användaren. Jag har blivit snabbare på att validera HTML koden och felsöka samt problemlösa genom att arbeta med denna kursmoment. Jag förstår nu hur man kan lösa mer komplexa problem med en strukturerad metod.
                I processen har jag blivit bekväm med PHP grundkonstruktioner och kan använda dem effektivt. Jag har fått bättre förståelse för hur PHP kan användas i storskaliga applikationer. Jag inser att nästa steg är att fördjupa mig i mer avancerad funktionalitet, särskilt när det gäller säkerhet, formulärvalidering och interaktion med externa system som databaser.

            </p>
        </article>
        <hr>
        <article>
            <h2 id="kmom04">kmom04</h2>
            <p>
                Under den fjärde veckan av webbteknologikursen började jag arbeta med arrayer, loopar, GET- och POST-metoder samt sessioner. Jag lärde mig hur man lagrar och hämtar data från en array med hjälp av variabler och for-loopar. Det var spännande att använda array_rand i gissningsspelet för att slumpmässigt välja ett namn från en CSV-fil och skapa ett spel där användaren får gissa rätt namn baserat på datum och namnens betydelse. Genom att förstå arrayeer grundläggande koncept kunde jag kombinera fler funktioner för att skapa mer komplexa operationer och kunde optimera prestanda på min fotokalendar, vilket hjälpte mig att optimera prestandan i min fotokalender. Detta ökade min förståelse för arrayers potential.
                <br><br>
                Jag hittade flera kodsnuttar som jag kunde bryta ut till funktioner för att hålla koden mer organiserad och återanvändbar till exempel kalender delen men istället för det så började jag med lagom hastighet och bryte ner koden i min fotokalender till flera funktioner och har använt det i just denna sidokontroll för att förstå grunden bättre. Jag kommer framöver använda funktioner mer för att separera logik från presentationen, vilket kommer underlätta i felsökning och att förstå koden i efterhand.
                <br><br>
                Jag ser skillnaden mellan GET och POST nu. GET används när man vill skicka mindre känsliga data, som skickas direkt via URL, Vilket är synligt för användaren. Det lämpar sig bäst för enkla förfrågningar som GET-querysträngar.<br>POST däremot används när man vill skicka större mängder data eller mer känslig information, som svar på ett quiz/gissningsspel eller lösenord, eftersom data skickas i HTTP-Body och inte syns i URL:et. Jag har börjat reflektera över hur man kan kombinera dessa metoder i större applikationer för att hantera olika typer av interaktioner med servern.
                <br><br>
                Det gick bra med session hanteringen. Jag använde sessioner för att lagra användarspecifik information, som rätt svar och fel alternativ under gissningsspelen, vilket gjorde att det enkelt att under processen arbeta på data från post formuläret till att visa svar på frågan i resultatsidan alltså under flera sidladdningar. Jag stötte på utmaningar med att korrekt stänga och starta sessioner, men genom att följa exempel från övningar och Google-sökning hittade jag rätt väg att lösa problemen och lyckades få det att fungera som förväntat.
                <br><br>
                Jag började med att strukturera min kod med fokus på att bryta ut olika delar i separata filer och hantera formulärdata via GET och POST. Jag startade sessioner och skrev kod till sessions förstörning. Jag använde sessioner för att spara svar och felaktiga alternativ från gissningsspeet, som sedan kontrollerades på process sidan och skickades som ett flashmessage till resultatsidan. Jag testade på en del av extra uppgifterna och det underlättade för användaren att gissa på namnet i spelet genom att ha tillgång till två olika ledtrådar, betydelse samt datum kopplat till det rätta namnet.
                <br><br>

                Min största TIL (Today I Learned) för detta kursmoment var att jag fick en bättre förståelse för både GET- och POST-formulär, som saknades i förra momentet.Jag har nu blivit mer bekväm med GET- och POST-formulär eftera tt ha stött på och löst flera problem. Detta ledde till ett tillfredsställande resultat i gissningsspelet. Jag fick också en djupare förståelse för hur man hanterar och manipulerar arrayer samt hur man strukturerar kod i funktioner för att skapa en mer läsbar och effektiv lösning. Det gav mig en djupare förståelse för hur webbapplikationer hantera användarstatus på serversidan.
            </p>

        </article>
        <hr>
        <article>
            <h2 id="kmom05">kmom05</h2>

            <p>
                Under den femte veckan av webbteknologikursen började jag fördjupa mig i hur arrayer kan användas, hur man kan nytta sessioners lagrade data och hur man matar in data i en HTML-tabell från inhämtade data från en lokal SQL databas. Tack vare min erfarenhet med MongoDB och Mongoose, där jag har arbetat med att skapa och hantera scheman för dokumentbaserade databaser, hade jag redan en grundläggande förståelse för hur databaser fungerar. Detta hjälpte mig att snabbt anpassa mig till SQL relationella struktur och de skillnader som finns mellan dokument- och relationsdatabaser. Även om jag hade erfarenhet av MongoDB och dess struktur var SQL och databaser som SQLite en lite annorlunda upplevelse. Det krävde att jag förstod hur man arbetar med tabeller och relationer mellan olika entiteter. Att använda PDO tillsammans med SQLite var en ny erfarenhet, men jag insåg snabbt vikten av förberedda uttalanden för att skydda mot SQL-injektioner och göra databasanrop säkra och effektiva.
                <br>
                <br><br>
                Jag har använt lite SQL förut men att använda SQL i detta kursmoment har lärt mig mycket mer och gett mig en djupare förståelse. Det var spännande att skapa en egen databas i övningsuppgiften och arbeta med PDO och SQLite. Jag inser att jag har fått mer förståelse för skillnaden mellan dokumentbaserade databaser och SQL-relationsdatabaser under kursen, men mina tidigare erfarenheter hjälpte mig att snabbt förstå grundprinciperna i SQL och det känns tillfredsställande att kombinera tidigare erfarenhet i annan teknologi med en ny teknologi och i processen få en djupare förståelse för båda teknologier. Att integrera SQLite via PDO var nytt, men jag kunde relatera till hur data hanteras i liknande system.
                <br><br>
                Det gick bra att utföra övningen med SQLite och SQL. Där jag fastnade i början var när jag skulle installera SQLite3 på Ubuntu via WSl och insåg att jag glömt mitt lösenord, vilket krävde en reboot och lösenordsåterställnings som var en lång process, detta gav mig ökad erfarenhet av att felsöka problem i WSL-miljön som ett komplement till det jag skulle lära mig under kursmomentets gång. Efter detta blev det enklare att följa instruktionerna och jag kunde ansluta till SQLite på Windows utan större problem, med stöd från tips från övningsuppgifterna. Jag är nöjd med att jag lärde mig att skapa enkla databaser och integrera den givna databasen i kursmomentet. Jag känner mig nu mer bekväm med sessioner, GET- & POST-formulär och kan använda dessa i större projekt med PHP och SQLite.
                <br><br>
                Det var en utmaning att korrekt implementera PDO och förstå förberedda uttalanden för att skydda mot SQL-injektioner. Att göra två SQL-frågor mot två olika tabeller och kombinera resultaten var också utmanande. Med hjälp med kunskaper i sessioner och datalagring i sessioner gick det bra att söka data i olika tabeller och spara resultatet i session och sedan överföra till en annan session och presentera data i tabeller. Felhantering vid tomma sökresultat var lärorik, och jag skapade användarvänliga meddelande, som instruerades i kraven, i stället för tekniska fel.
                <br><br>
                Jag löste uppgiften med att jag skapade två PHP sidor search.php, name.php, samt presentname.php och connect.php. Jag delade sidokontrollers logik mellan dessa filer och använde dsn namn och funktionen för att ansluta sig mot databasen i connect.php. För att hantera sökningar i search,php tog jag emot en sökfråga via GET-formulär och letar efter matchande namn och namndelar i både namnlista och namnbetydelselista. Resultaten och sökformuläret visades med en Google-inspirerad design där varje namn är klickbart och leder till name.php för mer detaljerad information.
                <br>
                I name.php hanterade jag ett namn från query-strängen för att hämta detaljer från de två tabellerna. Om inget namn hittades visas ett meddelande om sökresultatet. Jag fokuserade på huvuduppgifterna och valde inte genomföra extrauppgifterna. Även om jag inte har arbetat med en riktigt extra uppgiften i sig, använde jag sökresultatets datumdel från det sökta namnet för att jämföra med andra namn i databasen. Jag presenterade resultaten av alla andra namn i databasen som har samma födelsedatum, och dessa presenterades som klickbara länkar som leder tillbaka till sökformuläret och sökresultaten för det namnet.
                <br><br>
                Min största TIL (Today I Learned) för detta kurs moment är att lära mig vikten av PDO och förberedda uttalanden för att hantera SQL-frågor på ett säkert sätt. Jag känner mig ännu mer bekväm med GET- och POST-formulär och känner mig redo att använda dessa tekniker i större projekt. Jag har också lärt mig hur man effektivt hanterar databasfrågor i mer i en tabell och presenterar resultaten på ett användarvänligt sätt.

            </p>

        </article>
        <hr>
        <article>

            <h2 id="kmom06">kmom06</h2>

            <p>
                Under den sjätte veckan av webbteknologikursen började jag fördjupa mig i koncept kring CRUD (Create, Read, Update, Delete) och det har varit den viktigaste delen av kursen enligt mig, eftersom jag har fått möjlighet att använda det jag har lärt mig tidigare i kursen och applicera dessa kunskaper samt det jag har lärt mig i kursmoment06. Jag har fått möjlighet att designa och implementera funktioner samt sido- och processkontroller som gör det möjligt att hantera använderdata på ett strukturerat sätt. Steg för steg har jag lärt mig hur man skapar och skriver in data, hur man kommunicerar med databaser. Jag har även lärt mig hur säkerhet ska appliceras när man jobbar med databaser och hantering av data under överföring. Jag har dessutom insett vikten av att validera användarinmatningar för att förhindra fel.
                <br> <br>
                Det var en intressant utmaning att implementera inloggning på min hemsida. Jag har lärt mig hur man autentiserar användare med hjälp av data från databaser. I början var det svårt, särskilt när jag fastnade med att koppla upp databasen, då jag arbetar i en Windows-miljö. Det blev krångligt när jag fastnade och började om flera gånger tills jag insåg att min kod pekade på en liknande fil med samma namn i en annan katalog. Jag behövde flytta min faktiska databasfil till rätt katalog för att kunna ansluta till databasen korrekt. Efter att ha löst det flöt arbetet på bättre, och jag kunde fokusera på att skydda användardata i databasen med hjälp av SQL-kommandon. Jag känner att jag nu kan skapa fler webbplatser utan större problem efter att ha slutfört detta kursmoment. Jag är nöjd med hur inloggningssystemet fungerar, men ser alltid utrymme för förbättringar.
                <br> <br>
                Jag är överlag nöjd med den kod jag har skapat i min me/report eftersom jag i stor utsträckning har använt principer för ren kodning och brutit ner koden i flera moduler. Men jag tror att det fortfarande finns möjligheter att bryta ner koden ytterligare och strukturera den mer effektivt, då det började bli för många filer i /public-katalogen. Jag insåg detta när jag jämförde med exempel på git-repo som användes för att ge stöd under övningarna. Jag fick inspiration av dessa exempel, där varje fil innehöll endast ett fåtal kodrader, vilket gjorde koden hanterbar och lätt att förstå. Min kod är strukturerad och lätt att följa, men det finns fortfarande förbättringspotential.
                <br>
                En förbättring som jag vill genomföra handlar om felmeddelanden och implementering av flashmeddelanden via funktioner, vilket skulle ge en bättre designad användarfeedback och förbättra användarupplevelsen. Dessutom skulle jag vilja inkludera fler sidokontroller bakom inloggningssidan, där specifika användare får tillgång till specifika kontroller efter inloggning. Det är något jag inte hann implementera denna gång.
                <br> <br>
                Min största TIL (Today I Learned) för detta kursmoment är vikten av att använda PDO och förbereda SQL-uttryck för att hantera SQL-frågor på ett säkert sätt. Jag har blivit mer bekväm med att kommunicera med databaser och känner mig redo att tillämpa dessa tekniker i större projekt. Jag har också förbättrat mina kunskaper i att hantera databasfrågor och inloggningslogik. Särskilt har jag lärt mig hur man sparar data på serversidan för att återanvända den under samma session, samt hur man implementerar säkerhet vid inloggning. Dessutom har jag förstått betydelsen av att använda flashmeddelanden för att ge användaren feedback på ett användarvänligt sätt, till exempel för att meddela om en process har lyckats eller inte.
            </p>
        </article>
        <hr>
        <article>
            <h2 id="kmom10">kmom10</h2>

            <p>
                Under de sista veckorna av webbteknologikursen tilldelades vi två projekt att välja mellan, BMO och NVM. Jag valde BMO (Begravningsmuseet Online) eftersom det verkade mer spännande, och det är en absolut sanning att vi alla kommer att möta döden. Att det finns ett museum om begravningar var det mest fascinerande jag hört på länge. I detta projekt skulle jag genomföra krav 1–3, men jag valde att göra två ytterligare krav, krav 4 och 5, för att säkerställa att jag hade tillräckligt med tid att slutföra projektet, göra koden mer läsbar och återanvändbar samt kunna fokusera på att göra webbplatsen responsiv.
                <br> <br>
                Projektet utvecklades med fokus på att erbjuda en strukturerad och användarvänlig upplevelse med en välorganiserad layout och datahämtning från en SQLite-databas. Jag började med att skapa ett flödesschema för webbplatsen och gjorde skisser på sidorna, samt satte upp projektets deadline. Jag delade upp arbetet genom att använda Trello för att organisera mitt projekt , arbeta agilt och säkerställa att allt blev klart i tid.
                <br>
                I början av projektet skapade jag header- och footer-vyer, och sparade dem i katalogen /views. Jag delade även upp min header genom att flytta navbaren till en separat fil som jag inkluderar i headern med include(). Jag har valt färger med hänsyn till WCAG-riktlinjer och använt textstilen Lato, som är en av de mest rekommenderade. Jag valde att skapa en enkel men modern webbplats som speglar hur en BMO-webbsida bör vara enligt min smak, då vi hade friheten att designa som vi ville. Dessutom har jag testat webbplatsen för att säkerställa tillgänglighet för synskadade, genom att lägga till alt-texter på alla bilder för att göra sidan mer tillgänglig för alla. Jag har laddat upp objektbilder och artiklar på ett dynamiskt sätt från databasen.
                <br>
                <br>

                Databas: Jag har placerat databasanslutningsfunktionen i katalogen src/ och databasen i katalogen db/ för att göra kodstrukturen mer hanterbar. Inga tredjeparts-CSS-ramverk användes under projektets gång, och ingen CSS i galleriet heller. I galleriet använde jag endast HTML, CSS och PHP-skript för att visa bilder från databasen genom att hämta data från objekttabellen och koppla katalogen img/. Jag delade upp sökvägen i två delar: en del för varje bild från databasen och en del baserad på var min img-katalog ligger i projektstrukturen.
                <br>
                <br>

                Hem: Jag har valt att designa hemsidan enkelt och stilrent med en modern design i åtanke. Jag välkomnar användaren med en stor rubrik och en kort undertext. En bakgrundsbild som visar ett begravningsmonument används som bakgrund för både hem- och hela webbplatsen. Denna sida, samt alla sidokontroller och processkontroller, finns i mappen public/.
                <br>
                <br>

                Innehåll: Jag har använt PDO/SQL för datahantering i detta projekt och skapat filer som articles.php, objects.php, och maggy.php med sidokontroller för att dela upp skript- och HTML-kod i stor utsträckning. Jag har gjort dynamisk datavisualisering på webbplatsen. Jag valde att skapa en sida för artiklar med alla artiklar samt en innehållsförteckning som hjälper användaren att navigera. En liknande struktur finns på objektsidan. Användaren kan läsa mer om en artikel genom att klicka sig vidare till en annan sida med mer innehåll, eller från objektsidan till objects_detail.php, som visar en större bild med rubrik och text. Alla objekt är indelade i kategorier som kan navigeras via en innehållsförteckning.
                <br>
                <br>

                Den mest utmanande delen var att infoga bilder i Maggy-artiklarnas innehåll. Jag valde att söka efter
                "h2"-taggar i artikelns innehåll och skapade en associativ array med rubriker som nycklar och img-taggar som värden. Dessa bilder mappades sedan till respektive h2-rubriker i artiklarna via maggyHeading.php.
                <br>
                <br>

                När jag designade sidan använde jag data lagrad i sessioner för att presentera en "Om oss"-text från databasen. Dessutom skapade jag en informationssida om webbplatsen för att informera användaren, där jag inkluderade en byline som introducerar mig som utvecklare. Jag lade också till en länk till doc.php för mer information om sidan.

                <br><br>
                Webbplatsen testades för HTML, CSS och PHP och Responsivitet på tre olika webbläsaren (Microsoft Edge, Google Chrome och AVG) för alla skärmstorlekar.

                <br>

                <br>
                <strong>
                    Krav 4:
                </strong>
                <br>
                Jag implementerade en sökfunktion som gör det möjligt för användare att söka bland objekt och artiklar. Jag skapade en separat sida, search.php, och en processfil, processSearch.php, och placerade en länk till söksidan i navbaren för enkel åtkomst. Användaren skriver in ett sökord i ett formulär och får en lista med resultat, där varje träff visar kort information om objektet eller artikeln. Genom att klicka på en träff navigerar användaren till den fullständiga sidan för det objektet eller artikeln.
                <br>
                Jag lade också till en "Tillbaka till söksidan"-knapp på objekts- eller artikelsidorna, om användaren kom från söksidan. Detta löstes med en query-sträng som skickas med från sökresultaten. Genom att återanvända mina sidokontroller kunde jag smidigt integrera funktionen, och är nöjd med hur det förbättrade både kodens struktur och användarupplevelsen.
                <br>
                <br>

                <strong>
                    Krav 5:

                </strong>
                <br>
                Jag skapadeen separat galleri-sida som visar bilder kopplade till objekten i webbsidan. En länk till galleriet, med namnet "Galleri", placerades i navbaren för enkel åtkomst. I galleriet visas bilder som miniatyrer (thumbnails), och jag implementerade en paginering där fyra bilder visas per sida. Användaren kan navigera mellan sidorna med hjälp av länkarna “ &lt; ” och “ &gt; ” under bilderna, vilket gör det enkelt att bläddra genom galleriet utan att ladda om hela sidan eller använda JavaScript.
                    <br>

                    Dessutom, genom att klicka på en bild i galleriet, tas användaren till en större visning av det tillhörande objektet på sidan object_detail.php, vilket ger en sömlös användarupplevelse.


                    <br><br>
                    <strong>
                        Utmanningar:
                    </strong>
                    <br>
                    Under projektets gång stötte jag på flera utmaningar, men jag lärde mig mycket av dem. Det största problemet var att designa korten, särskilt när jag skulle inkludera processfilen i "Om"-sidan, eftersom den var beroende av sessionens lagrade data. Dessa data lagrades först när artikelsidan öppnades, vilket skapade en komplikation om användaren öppnade "Om"-sidan först. För att lösa detta problem lade jag till include process_article.php. Jag stötte på samma problem när jag testade i Chrome, där jag var tvungen att radera den cachade data för att kunna testa mina lösningar. Dessutom fick jag ett fatalt fel på söksidan eftersom jag inkluderade två processfiler för att hämta den lagrade sessionens data, och båda hade funktioner som kopplade till databasen. För att åtgärda detta implementerade jag funktionen include_once på de nödvändiga processfilerna i sökprocessfilen. På så sätt skulle användaren inte få något fatalt fel om de gick direkt till söksidan utan att datan hade hämtats från databasen.
                    <br> <br>

                    Trots dessa utmaningar var det väldigt kul och tillfredsställande att lösa problemen som dök upp under arbetets gång. Jag känner nu att jag är redo att bygga och experimentera med webbplatser med självförtroende, och att jag kan genomföra hela projekt på egen hand. Jag anser att projektet var både bra och rimligt för kursens syfte, då det gav mig möjlighet att applicera mina kunskaper i en praktisk miljö.
                    <br> <br>
                    <strong>
                        Tankar om kursen:
                    </strong>
                    <br>
                    Jag är verkligen nöjd med kursen och dess innehåll. Materialet var välstrukturerat och lätt att följa, vilket gjorde inlärningen både effektiv och rolig. Den mest uppskattade delen var instruktionerna för varje kursmoment och de guider som finns tillgängliga på dbwebb; de gjorde det enkelt att navigera genom kursens olika delar. Tillgången till hjälp via Discord-chatten var också en av de mest intressanta aspekterna av kursen, då det möjliggjorde att få svar på frågor och stöd i realtid, vilket var mycket hjälpsamt. Jag kommer definitivt att rekommendera denna kurs till mina vänner och kollegor. En sak jag skulle föreslå för framtida kurstillfällen är att kanske ha fler mindre övningar för att förstärka lärandet ytterligare. På en skala från 1 till 10 ger jag kursen en stark 10 av 10.
            </p>

        </article>
        <?php include('../view/byline.php'); ?>
    </main>
</div>


<?php include('../view/footer.php'); ?>