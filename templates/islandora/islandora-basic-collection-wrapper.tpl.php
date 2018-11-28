<?php

/**
 * @file
 * islandora-basic-collection-wrapper.tpl.php
 *
 * @TODO: needs documentation about file and variables
 */
?>

<div class="islandora-basic-collection-wrapper">
  <?php if (!empty($dc_array['dc:description']['value'])): ?>
    <p><?php print $dc_array['dc:description']['value']; ?></p>
    <hr />
  <?php endif; ?>
  <div class="islandora-basic-collection clearfix">
    <?php if (!empty($k_labels_mods)) : ?>
      <div class="mods-k-labels">
        <?php foreach ($k_labels_mods as $label_url) : ?>
          <a href="<?php print $label_url; ?>">
            <?php print $label_url; ?>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <span class="islandora-basic-collection-display-switch">
      <ul class="links inline">
        <?php foreach ($view_links as $link): ?>
          <li>
            <a <?php print drupal_attributes($link['attributes']) ?>><?php print filter_xss($link['title']) ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    </span>
    <?php print $collection_content; ?>
    <?php print $collection_pager; ?>
  </div>
</div>
