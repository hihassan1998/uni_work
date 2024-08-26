# Top frågor om react
1. Vad är react och hur används det?
- React är en Javascript bibliotek utvecklad av Facebook för att bygga UX säkskilt SPA där snabb och interactivet UX efterfrågas.
- Komponent baserad som btyder att man bygger åter-användbara -inkpaslad komponenter 
- kan hantera eget state/tillstånd
- komponerar state till att bygga komplexa användergraänsitt
- React används för dess effektivetit
- använder en vituell DOM för att minimera direkt minipulation av DOM, förbätrrar presstanda

2. Huvud features av React?
(1) JSX (js och XML): 
- syntax tilllägg/ skriva html i Js /Koden lätt att förså o skriva
(2) Komponenter:
- åter-användbara delar av användergränsnitt UI
- Funktionella e/l klassbaserade
(3) Vituell DOM:
- optimerad renderingen i.e endast ändrat delar av DOM uppdateras , snarare än hela DOM
(4) State Management/ Tillstånds hantering:
- Kan hantera sitt eget tillstånd
- Möjligthgör dynamiska, interaktiva applikationer
(5) Livcyklemetoder:
- Klasskomponenter i React har livcycklemeoder
- Utveklare kan koppla in i olika stadier av komponents livcykle, i.e; nör den monters/uppdateras

3. Hur funkar Vituell DOM i React?
- Lättviktigt kopia av aktuell DOM
- Ändring av tillstånd/props uppdaterar Vituell DOM först
- Jämför den nya virtuell DOM med den gamla i.e; reconsiliation
- Kalkulerar och utför minsta möjliga ändringar till att uppdatera aktuella DOM 
- Bara nödvöndiga delar av Aktulla DOM ändras inte hela DOM Effektivt process

