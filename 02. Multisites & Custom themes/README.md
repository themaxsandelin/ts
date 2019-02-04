# 02. Multisites & Custom themes
<img src="https://media.giphy.com/media/l0O2R0sDjnC8GBTfa/giphy.gif" alt="Progress." width="600">

In today's lesson we're taking a look at how to set up and manage multisites in Wordpress. After that we're going to start our journey on creating our very own theme for Wordpress.

Instructional video (in Swedish) based on our live lesson: [YouTube video](https://www.youtube.com/watch?v=4QQ_JmdccQ0)

## Assignments

1.
    Set up a brand new Wordpress site, and "upgrade" it to a network of sites with the multisites feature. Then make sure you have atleast one extra user apart from your own, and assign it as *admin* for the "main" site and as *editor* for the other site.

    > I know this one's easy, it's just to make sure you are comfortable with setting up a multisite network.

2.
    Time to create your own theme! Create a new folder in the `themes` folder (can be found in the `wp-content` folder) and make sure it has the necessary files and file contents in order to be recognised as a theme. Then activate it on all your sites on the multisite network.

3.
    Add in a simple header and footer element to the site and make sure to include the core Wordpress head and footer elements so that you as an admin can get the admin bar. Both the header and the footer should be visible on the site as well, with no particular contents.

4.
    Create a dedicated page to be your landing page and configure your site to use that page as a static front page. Add the necessary theme file for the landing page and non-landing pages *(hint: `front-page`, `page`)* and make sure there is a header and a footer.

5.
    Add a headline element with your site title and a paragraph with your site description to your header element.

## Extra

6.
    Use [the loop](https://codex.wordpress.org/The_Loop) to output the content for your pages in both the landing page and any other page you might have. Make sure that links, images and formatting works as expected.

    > The loop is not required for "regular" pages, that have content in them. It is however required for the posts page to output each posts.

7.
    Add a dedicated theme file for the posts page, create a dedicated page in the Wordpress admin for your blog (posts page) and update your site to use that page as the posts page. Make sure it outputs the posts using [the loop](https://codex.wordpress.org/The_Loop) and that each post gets it's own link to it's own page. Finally, add the theme file for the single posts page and make sure it outputs the content with [the loop](https://codex.wordpress.org/The_Loop) as expected.

## Resources

- [Create A Network](https://codex.wordpress.org/Create_A_Network) - Wordpress
- [Theme Development](https://codex.wordpress.org/Theme_Development) - Wordpress
- [The Loop](https://codex.wordpress.org/The_Loop) - Wordpress
