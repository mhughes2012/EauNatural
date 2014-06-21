<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>


<div id="testimonials" class="flex-carousel testimonials">
                <div class="carousel-wrapper">
<ul> 
<?php foreach ($rows as $id => $row): ?>
  
    <?php print $row; ?>

<?php endforeach; ?>
</ul> 
</div>
</div>