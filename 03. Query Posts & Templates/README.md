# 03. Query Posts & Templates
<img src="https://media.giphy.com/media/WS4iVW47O6jql0IAQZ/giphy.gif" width="600">

In today's lesson we're learning how to query our blog posts in different ways through filtering and pagination, as well as how to create custom page templates for your theme.

Instructional video (in Swedish) based on our live lesson: [YouTube video](https://www.youtube.com/watch?v=jsKGenI6fEM)

## Preperations

- A basic Wordpress site set up locally
- A custom theme folder installed and activated on the site
- 15 random blog posts with a unique title and some simple Lorem Lipsum text
- 5 different categories for your blog posts, with each blog post having at least one category (excluding "Uncategorized").


## Assignments

1.
    Make your first page template files for your own theme, one for a "Full-width layout", one for a "Right Sidebar layout" and one for a "Left Sidebar layout". The difference very simply put is that one of them has no sidebar and the content stretching to the edge of the window. The other two have the sidebar element placed on the left side and the right side respectively.

2.
    Use [get_posts](https://codex.wordpress.org/Template_Tags/get_posts) to load the latest 5 blog posts for your site and output them in a nice list in the main content area in each of your template files. You can either add the code manually to each template file, or create a separate file that you include in each template. Each blog posts hould have a link to it's unique page. That unique page should simply output the blog post's title, date published, author's name and content.

3.
    Build in support for pagination (paging) on all three template pages, so that you can jump forwards and backwards in the posts you list. You should still list 5 blog posts on the page, no matter which page you've selected. You should also see all the pages that you can jump between, for example if you have 15 posts and each page shows 5 posts, there should be 3 pages [1 2 3] that you can jump between. Each page link should link back to this very page but with a GET variable set to the page number you selected. (Ex: http://localhost:3000/blog?pageNumber=2) Use the `pageNumber` value when using the `get_posts()` function by for example setting the `offset` parameter.

4.
    Add a list of the categories to the pages. The template file that doesn't have the sidebar should have the category list above the main content, and the templates that have the sidebar should have the categories in the sidebar. Each category should be a link to the same page, as before, but setting a `GET` variable to the selected category, and that should be used when running the `get_posts()` function to just load the posts that have that category.

5.
    Add the ability to change the order of posts based on a selection from a `<select>` list. The list should contain at least `title` and `date` (Default should be date), and when you select a different value, it should reload the page with the order set according to the user selection. Use a `GET` variable here as well to keep track of the order selected by the visitor.

## Extra

6.
    Add in another `<select>` field, this time for defining the number of posts you should list on the page. As an example you could have the values `5`, `10` and `15` to select from. When changing the value, the page should reload with the correct number of posts based on the visitor's selection, and the pagination function should adapt to the new no. of posts per page. Once again, use a `GET` variable to keep track of this as well.

7.
    Add a search field, in the sidebar if there is one or above the main content if not. That search bar should be connected to a simple `GET` form that uses the same page that you are on as the `target`. Once you have written a search term, there should be a submit button that will execute your search request. The search should use [the `s` property](https://wordpress.stackexchange.com/a/85378) in the `get_posts()` method to search for a post with a title that matches your search term. Once you've made your search, it should obviously only show the posts that have a title that matches the search term.

## Resources

- [get_posts](https://codex.wordpress.org/Template_Tags/get_posts) - Wordpress Codex
- [Page Template Files](https://developer.wordpress.org/themes/template-files-section/page-template-files/) - Wordpress Theme Handbook