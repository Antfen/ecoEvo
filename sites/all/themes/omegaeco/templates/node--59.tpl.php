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
    <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
    <?php endif; ?>  
    <!-- This is the tpl for the Video node on the home page panel -->
    <!-- This is for the localhost site nid-59 -->
    <!-- This tpl provides a hyperlink to the Video landing page -->
    <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        hide($content['body']);
        hide($content['field_image_pod_panel']);
        hide($content['field_description_pod_panel']);
        print render($content);
        ?>
    <div class="pod_panel">
        <div class="grid_12">
            <a href="video"><?php print render($content['field_image_pod_panel']); ?></a>
            <div><?php print render($content['body']); ?></div>
            <div class="title_holder"><?php print render($content['field_description_pod_panel']); ?></div>
        </div>
    </div>
</article>