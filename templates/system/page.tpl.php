<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>


<?php if ($page['masthead'] || $page['navigation']): ?>
  <header id="de-header" role="banner">
    <div class="section-header">
      <?php print render($page['masthead']); ?>
      <?php print render($page['masthead_secondary']); ?>
      <?php print render($page['navigation']); ?>
    </div>
  </header>
<?php endif; ?>

<?php if ($page['breadcrumb']): ?>
  <?php print render($page['breadcrumb']); ?>
<?php endif; ?>

<div class="main-prefix-section-wrapper">
  <div class="container">
    <?php if ($page['main_prefix']): ?>
      <?php print render($page['main_prefix']); ?>
    <?php endif; ?>

    <?php if ($page['main_prefix_right']): ?>
      <?php print render($page['main_prefix_right']); ?>
    <?php endif; ?>
  </div>
</div>

<?php if ($page['toolbar']): ?>
  <?php print render($page['toolbar']); ?>
<?php endif; ?>

<?php if ($page['project_banner']): ?>
  <?php print render($page['project_banner']); ?>
<?php endif; ?>

<?php if ($page['slider_region']): ?>
  <?php print render($page['slider_region']); ?>
<?php endif; ?>

<?php if ($page['user_menu']): ?>
  <?php print render($page['user_menu']); ?>
<?php endif; ?>

<div class="section-content">

    <div class="container clearfix">

      <?php print $messages; ?>

      <?php if ($page['sidebar_second']): ?>
        <div class="collapse-handle-wrapper">
          <a href="#" class="collapse-handle" data-collapse-target="sidebar-second">
            <i class="fa fa-arrow-right"></i> <span class="sr-only"><?php print t('Collapse sidebar'); ?></span>
          </a>
        </div>
      <?php endif; ?>

<?php if ($page['content']): ?>
  <main id="main" role="main" class="column">
    <?php print render($page['content']); ?>
  </main>
<?php endif; ?>

<?php if ($page['sidebar_first']): ?>
  <aside id="sidebar-first" role="complementary" class="sidebar column">
    <?php print render($page['sidebar_first']); ?>
  </aside>
<?php endif; ?>


<?php if ($page['sidebar_second']): ?>
  <aside id="sidebar-second" role="complementary" class="sidebar column">
    <?php print render($page['sidebar_second']); ?>
  </aside>
<?php endif; ?>
</div>
</div>

<?php if ($page['main_suffix']): ?>
  <?php print render($page['main_suffix']); ?>
<?php endif; ?>

<?php if ($page['sponsor_region']): ?>
  <footer id="sponsors" role="contentinfo">
    <?php print render($page['sponsor_region']); ?>
  </footer>
<?php endif; ?>

<?php if ($page['footer']): ?>
  <footer id="footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>
