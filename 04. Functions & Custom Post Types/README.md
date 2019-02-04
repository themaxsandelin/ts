# 04. Functions & Custom Post Types

<img src="https://user-images.githubusercontent.com/7646347/52047217-d3a21a80-2548-11e9-9cd5-f587e74aeaec.gif" alt="I've got the power!" width="600">

I dagens lektion skall vi gå igenom [functions.php](https://codex.wordpress.org/Functions_File_Explained) filen i vårt egna tema, som är till för att anpassa Wordpress "beteende" och utöka dess funktionalitet. Vi skall även kolla på hur ni kan skapa egna post-typer ([Custom Post Types](https://codex.wordpress.org/Post_Types)).

## Förberedelser

- En enkel Wordpress site uppsatt på en lokal utvecklingsmiljö.
- Ett påbörjat eget tema som är aktiverat på din Wordpress site.

## Uppgifter

1.
    Skapa en `functions.php` fil till ditt tema och aktivera stöd för thumbnails på poster. ([Featured Images & Post Thumbnails](https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/))

2.
    Lägg till en egen menyposition på din Wordpress-sida genom din `functions.php` fil ([Wordpress Navigation Menus](https://codex.wordpress.org/Navigation_Menus)). Positionen kan vara var som helst, ex. i header, footer eller sidebar. Men namnet på din menyposition borde vara beskrivande till vart menyn ligger på sidan.

    Bygg sedan in menyn i hemsidan så att du får ut alla menylänkar på sidan där du vill att de skall visas (ex. i header).

3.
    Skapa en egen post-typ för dina webbprojekt, som om du byggde din egna portfoliosida. Post-typen borde rimligtvis heta något i stil med "project". Se till att alla olika typer av `labels` är satta korrekt (engelska och tänk på singular och plural). Post-typen borde vara publik (`public => true`), ligga direkt under vanliga `Posts` i admin menyn, vara hierarkisk (`hierarchical => true`) samt ha stöd för `title`, `editor`, `thumbnail` och `page-attributes`.

4.
    Bygg nu ut ditt tema med en `page template` som funkar som en blogg-sida men som istället listar ut din egna post-typ projekt. Du borde då rimligtvis ha ett gäng projekt att lista på sidan, med en thumbnail, titel och kanske lite text innehåll.

    Temat skall även ha stöd för att visa varje individuellt projekt på en egen sida, vill säga att en "default page template" finns (se [Theme Development](https://codex.wordpress.org/Theme_Development) för tips om vad filen skall heta). Alltså skall det gå att klicka på ett projekt för att komma in på dess sida och läsa mer om projektet.

5.
    Skapa en ny post-typ som heter "People" och se till att du definierar alla olika typer av labels för din post typ. Alltså skall det vara ett custom meddelande för varje label i `labels` listan. Post-typen skall innehålla en lista på 5 poster, och de skall endast ha support för `title`. Varje person skall ha ett namn. Två av personerna skall vara "föräldrar" för de andra 3 personerna, alltså skall post-typen vara `hierarchical` för att stödja parent posts.

## Resurser

- [Theme Development](https://codex.wordpress.org/Theme_Development) - Wordpress Codex
- [Functions File Explained](https://codex.wordpress.org/Functions_File_Explained) - Wordpress Codex
- [Theme Functions](https://developer.wordpress.org/themes/basics/theme-functions/) - Wordpress Theme Handbook
- [Featured Images & Post Thumbnails](https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/) - Wordpress Theme Handbook
- [Navigation Menus](https://codex.wordpress.org/Navigation_Menus) - Wordpress Codex
- [register_nav_menus](https://codex.wordpress.org/Function_Reference/register_nav_menus) - Wordpress Codex
- [Post Types](https://codex.wordpress.org/Post_Types) - Wordpress Codex
- [register_post_type](https://codex.wordpress.org/Function_Reference/register_post_type) - Wordpress Codex
