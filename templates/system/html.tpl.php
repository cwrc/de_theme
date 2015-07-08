<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->langcode contains its textual representation.
 *   $language->dir contains the language direction.
 *   It will either be 'ltr' or 'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?><!DOCTYPE html>
<!--[if lt IE <?php print $minie; ?> ]>    <html class="lt-ie<?php print $minie; ?> no-js" <?php print $html_attributes; ?>> <![endif]-->
<!--[if gte IE <?php print $minie; ?>]><!--> <html class="no-js" <?php print $html_attributes; ?> <?php print $rdf_attributes; ?>> <!--<![endif]-->
  <head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <meta name="theme-color" content="#78001E">
    <meta http-equiv="X-UA-Compatible" content="IE=8">

    <?php print $styles; ?>

    <!--[if LT IE 10]>
    <script src="/sites/all/themes/de_theme/bower_components/respond/dest/respond.min.js"></script>
    <script src="/sites/all/themes/de_theme/bower_components/respond/dest/respond.matchmedia.addListener.min.js"></script>
    <![endif]-->

    <?php print $scripts; ?>

   <!--[if IE 7]>
    <script src="/sites/all/themes/de_theme/dist/ie.min.js"></script>
   <![endif]-->

    <link rel="apple-touch-icon" sizes="57x57" href="/sites/all/themes/de_theme/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/sites/all/themes/de_theme/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/sites/all/themes/de_theme/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/sites/all/themes/de_theme/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/sites/all/themes/de_theme/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/sites/all/themes/de_theme/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/sites/all/themes/de_theme/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/sites/all/themes/de_theme/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/sites/all/themes/de_theme/img/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/sites/all/themes/de_theme/img/favicons/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/sites/all/themes/de_theme/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/sites/all/themes/de_theme/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/sites/all/themes/de_theme/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/sites/all/themes/de_theme/img/favicons/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/sites/all/themes/de_theme/img/favicons/mstile-144x144.png">

  </head>
  <body class="<?php print $classes; ?>" <?php print $body_attributes;?>>

    <div id="skip-link">
      <a href="#main" class="element-invisible element-focusable" role="link"><?php print t('Skip to main content'); ?></a>
      <a href="/sitemap.xml" class="element-invisible element-focusable" role ="link">View sitemap</a>
    </div>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  </body>
</html>
