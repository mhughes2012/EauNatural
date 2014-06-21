<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>



<?php if (!empty($title)) : ?>

    <h3><?php print $title; ?></h3>

  <?php endif; ?>

  <section class="portfolio da-thumbs clearfix">

    <?php foreach ($rows as $id => $row): ?>

<?php print $classes_array[$id]; ?>

                <?php print $row; ?>


    <?php endforeach; ?>


 </section>