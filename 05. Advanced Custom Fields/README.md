# 05. Advanced Custom Fields
<img src="https://media.giphy.com/media/3og0IH0HMb7Itm7uiA/giphy.gif" alt="Do you see the light?" width="600">

Nu närmar vi oss slutat på denna fantastiska kurs med vår sista "riktiga" lektion. För att knyta ihop säcken i vårt arbete med att skapa ett eget Wordpress tema skall vi kolla på hur vi kan göra våra egna post-typer ännu bättre med egna fält.

## Förberedelser
Sätt upp en enkel Wordpress-sida. Ladda sedan ner foldern `theme` som ligger i samma folder som denna fil du läser just nu (`README.md`). Detta är ett **super** enkelt Wordpress tema vi skall utgå ifrån, så släng in den i `wp-content/themes` i din Wordpress folder.

## Uppgifter

1.
    Skapa en ny post-typ som heter `projects`. Detta skall vara dina egna projekt du gjort för dina kunder som frilansare, så ju mer du kan berätta om vad du lyckades göra för kunden, desto bättre ser det ut. Dina projekt borde ha stöd för det vanliga (title, editor) samt custom fields.

    Skapa sedan en egen template-fil för dina projekt med ett passande namn (`/* Template Name: [name] */`). Skapa också en ny sida som du sedan väljer ska använda sig av din template-fil du skapade för projekten.

    Sidan skall som vanligt putta ut din header och footer, du kan även putta ut sidans innehåll om så önskas, men framförallt skall den ladda in dina 10 senaste projekt och visa dessa på sidan. Det räcker att du puttar ut titel samt innehåll för varje projekt med en permalänk på titeln i sig som du kan klicka på för att komma in på projektets egna sida.

2.
    Ladda ner och installera pluginet [Advanced Custom Fields](https://www.advancedcustomfields.com/) på din Wordpress sida. Skapa sedan din första egna fält-grupp som bara appliceras på poster med post-typen `project` (måste vara samma som den du skapade i uppgift 1).

    Skapa sedan ett nytt fält som skall vara vilken "typ av tjänst" du förmedlat i ditt projekt. Det skall vara ett `select` fält där du kan välja flera val, och valen skall alltså vara olika typer av tjänster du förmedlar i din roll som frilansare. (ex. Design, Utveckling, Copywriting, Marketing osv.)



## Resurser

- [ACF Documentation](https://www.advancedcustomfields.com/resources/) - ACF
- [get_field](https://www.advancedcustomfields.com/resources/get_field/) - ACF
- [get_fields](https://www.advancedcustomfields.com/resources/get_fields/) - ACF
- [register_post_type](https://codex.wordpress.org/Function_Reference/register_post_type) - Wordpress Codex
