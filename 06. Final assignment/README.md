# 06. Final assignment
<img src="https://media.giphy.com/media/ubQOPZPbPPJ7y/giphy.gif" alt="Beautiful." width="600">

Som slutuppgift i kursen skall du bygga din alldeles egna hemsida i Wordpress med ditt egna tema. Innehållet och designen är inte jätte viktiga, men väldigt uppskattat om det är någorlunda lätt på ögonen. Uppgiften är uppdelad i 3 nivåer, där varje del representerar ett betyg (E, C och A). Du kommer betygsättas på hurvida du har uppfyllt kraven för varje nivå, samt hur mycket handledning du behövt i projektet. Ju mer självständig du är, desto bättre chans för högre betyg har du.

## Krav
Varje nivå innefattar även de krav från tidigare nivå, om en tidigare nivå finns. Vill säga, om du vill uppnå betyg C, måste du ha uppfyllt alla krav för betyg C. Och för betyg A måste du då ha uppfyllt alla krav för både betyg E som betyg C.

### Grundläggande krav (Betyg E)

- Din hemsida skall ha minst 4 olika sidor, där en sida ska vara din `static home page` och en ska vara din `posts page`. Du skall även ha en egen template fil som ansvarar för en blog-posts egna sida.
    - Din home page skall bara visa sitt eget innehåll, inget annat. Men du måste använda rätt typ av template fil för din static home page (front-page).
    - Din posts page borde lista alla dina posts med möjlighet att klicka på en post för att komma till dess egna sida.
- Du har en sidebar (med rätt template fil) som ligger i din posts page. Denna kan innehålla text eller annat, inte viktigt, men den skall synas och ligga till höger, eller vänster, om listan med blogg-poster.
- Du ska ha med `header` och `footer` med Wordpress admin bar och din egen style inkluderad.
- Du ska ha sidans titel och tagline i både din `<title>` och i din header med valfri heading och paragraf taggar (h1, h2, etc.).
- Du ska ha minst en egen `menu location` som ligger i din `header` med länkar till dina olika sidor.
- Du ska ha installerat ett plugin för kontaktformulär. Du skall även ha skapat ett kontaktformulär och lagt in det med en shortcode på någon av dina sidor.

### Avancerade krav (Betyg C)
> Kräver krav från Betyg E

- Du har skapat minst 15 olika blogg-poster och 5 olika kategorier som du också fördelat mellan dina blogg-poster. Varje post skall alltså ha minst 1 egen kategori (Ej inkluderande "Uncategorized").
- Du har minst en egen page template.
- Du har en dedikerad page template för din blogg sida (som inte längre är satt som `posts page`) som gör att du kan visa både sidans innehåll och blogg-poster. Du måste alltså nu hämta blogg-poster för hand, istället för att använda `the loop`.
- Du har en pagination på blogg-sidan som gör att du kan visa ex. 5 poster åt gången, och hoppa mellan 3 olika sidor (om du har 15 blogg-poster).
- I din sidebar har du en lista av dina kategorier, där varje kategori länkar till samma sida men med ett "filter" som gör att du bara visare poster i listan med just den kategorin. Alltså, om du klickar på en kategori, så laddar sidan om och listan med poster visare endast poster med den kategorin.
- Du har även ett sökfält längst upp i din sidebar som gör att du kan söka efter en viss text som i sin tur laddar om sidan när du genomför sökningen och då endast visar de poster vars titel och innehåll matchar din sök-term.

> Notera att de 3 sista inte måste funka tillsammans för att uppnå betyg C.

### Extra avancerade krav (Betyg A)
> Kräver krav från Betyg E och C

- Du har ett nätverk med siter med minst 2 siter (multisites) där den ena sidan är på svenska och den andra är på engelska. Sidorna skall alltså se i stort sätt likadana ut, ända skillnaden är språket på innehållet.
- Du löser så att din pagination, ditt kategori-filter och ditt sök-filter alla funkar tillsammans så att du kan använda alla tillsammans utan att de tar bort varandras effekt(er).
- Du har skapat minst 1 custom post type, exempelvis kallade "project".
- Du har en egen page template för en sida som listar dina custom post types (alltså har du nu en blogg-poster, och en för din egen post type).
- Du har en dedikerad template fil (följ Wordpress standard) för att visa en enskild post av den custom post type du precis skapade. Alltså, om din post type heter "project" så skall det finnas en template fil som ansvarar för att visa varje individuellt "project".
- Du har minst ett custom fält på din custom post type, exempelvis kallad "service", som du kan filtrera efter på den sida som listar posterna av din custom post type. Alltså som exempel, om ditt custom fält är en lista av olika tjänster (design, utveckling etc.) så skall den listan finnas på den sida som listar dina custom post types. När du sedan väljer en ur den listan, skall sidan laddas om och då skall endast de poster som har det värdet på det fältet (ex. design) visas i listan. (Samma som kategorier för blogg-poster i tidigare krav, men för ditt custom fält)

## Inlämning
Inlämning av projektet sker genom delning av en `.zip` fil som laddas upp på valfri tjänst (rekommenderar [WeTransfer](https://wetransfer.com/)). Denna skall sedan skickas till min mail ([max@maxsandelin.com](mailto:max@maxsandelin.com)) med ämnesraden "Slutuppgift Teknik Specialisering - [Ditt namn]".

Din `.zip` fil skall innehålla en databasdump (`.sql`) från din site du byggde, samt hela din `wordpress` folder från projektet. Alltså inte bara tema foldern, utan hela `wordpress` foldern, med `wp-content`, `wp-config` m.m. inkluderat.