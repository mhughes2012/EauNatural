<?php

/**
 * @file
 * Displays the search form block.
 *
 * Available variables:
 * - $search_form: The complete search form ready for print.
 * - $search: Associative array of search elements. Can be used to print each
 *   form element separately.
 *
 * Default elements within $search:
 * - $search['search_block_form']: Text input area wrapped in a div.
 * - $search['actions']: Rendered form buttons.
 * - $search['hidden']: Hidden form elements. Used to validate forms when
 *   submitted.
 *
 * Modules can add to the search form, so it is recommended to check for their
 * existence before printing. The default keys will always exist. To check for
 * a module-provided field, use code like this:
 * @code
 *   <?php if (isset($search['extra_field'])): ?>
 *     <div class="extra-field">
 *       <?php print $search['extra_field']; ?>
 *     </div>
 *   <?php endif; ?>
 * @endcode
 *
 * @see template_preprocess_search_block_form()
 */
?>

<a class="btn searchbutton" data-toggle="modal" role="button" href="#myModal"> <?php print '<img src="'.base_path() . path_to_theme() .'/img/searchbutton.png"/></a>'  ?>
<div id="myModal" class="modal hide fade" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" style="display: none;">
<div class="modal-header">
<button class="close" aria-hidden="true" data-dismiss="modal" type="button">x</button>
<h3 id="myModalLabel"><?php print t('Search Form'); ?></h3>
</div>
<div class="modal-body">
<div class="container-inline">
  <?php if (empty($variables['form']['#block']->subject)): ?>
    <h2 class="element-invisible"><?php print t('Search form'); ?></h2>
  <?php endif; ?>
  <?php print $search_form; ?>
  
 

</div>
</div>
<div class="modal-footer">
<button class="btn" aria-hidden="true" data-dismiss="modal">Close</button>
</div>
</div>


