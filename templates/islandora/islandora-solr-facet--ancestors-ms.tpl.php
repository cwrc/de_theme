<?php

/**
 * @file
 * Template file for default facets
 *
 * @TODO document available variables
 */
?>

<?php if ($hidden) { ?>
  <h4><?php print t('Research spaces'); ?></h4>
<?php } else { ?>
  <h4><?php print t('Projects'); ?></h4>
<?php } ?>
<ul class="<?php print $classes; ?>">
  <?php foreach($buckets as $key => $bucket): ?>
    <li>
      <?php print $bucket['link']; ?>
      <span class="count">(<?php print $bucket['count']; ?>)</span>
      <span class="plusminus">
        <?php print $bucket['link_plus']; ?>
        <?php print $bucket['link_minus']; ?>
      </span>
    </li>
  <?php endforeach; ?>
</ul>
