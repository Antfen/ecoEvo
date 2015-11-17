<article<?php print $attributes; ?>>
   <?php print $user_picture; ?>
   <?php print render($title_prefix); ?>
   <?php if (!$page && $title): ?>
   <header>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
   </header>
   <?php endif; ?>
   <?php print render($title_suffix); ?>
   <?php if ($display_submitted): ?>
   <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?>the footer</footer>
   <?php endif; ?>  
   <div<?php print $content_attributes; ?>>
      <?php
         // We hide the comments and links now so that we can render them later.
         hide($content['comments']);
         hide($content['links']);
         hide($content['field_image_pod']);
         hide($content['field_text_pod']);
         print render($content);
         ?>
      <div id="pod">
         <div class="grid-6 margin_right">
            <?php print render($content['field_text_pod']); ?>
         </div>
         <div class="grid-6">
            <?php print render($content['field_image_pod']); ?>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
</article>