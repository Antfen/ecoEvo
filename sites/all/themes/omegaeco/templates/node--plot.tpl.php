<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
   <?php print $user_picture; ?>
   <?php print render($title_prefix); ?>
   <?php if (!$page): ?>
   <h1 style="color:red;"<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
   <?php endif; ?>
   <?php print render($title_suffix); ?>
   <?php if ($display_submitted): ?>
   <span class="submitted"><?php print $submitted ?></span>
   <?php endif; ?>
   <div class="content clearfix"<?php print $content_attributes; ?>>
      <?php
         hide($content['comments']);
         hide($content['links']);
         print render($content);
         
         ?>
      <?php 
         $lat = $location ['latitude'];
         $long = $location ['longitude'];
         
         print gmap_simple_map($lat, $long, $markername = 'drupal', '', $zoom = 'auto', $width = 'auto', $height = 'auto', $autoshow = FALSE,$map = array());
          ?>
   </div>
   <div class="clearfix">
      <?php if (!empty($content['links'])): ?>
      <div class="links"><?php print render($content['links']); ?></div>
      <?php endif; ?>
      <?php print render($content['comments']); ?>
   </div>
</div>