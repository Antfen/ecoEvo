<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php //print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h1 style=""<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
 
     <?php
      hide($content['comments']);
      hide($content['links']);
      //print render($content);

      //($content['field_creatures_species']);
      
       
      
    ?>

    <div class="grid-7">
      <div class="wiki_col_left">
      <style type="text/css">
        .grid-7 .wiki_col_left, .grid-4 .wiki_col_right {
          padding:3.5999%;
          border: 1px solid #444;
          -moz-border-radius:7px;
          border-radius: 7px; 
          -moz-border-radius: 7px; 
          -webkit-border-radius: 7px;
          overflow: hidden;
          margin-bottom: 10px;
          
        }
        .grid-7 .wiki_col_left img, .grid-4 .wiki_col_right img {
          width: 100%;
          height:auto;
          border: 1px solid #666;
          -moz-border-radius:7px;
          border-radius: 7px; 
          -moz-border-radius: 7px; 
          -webkit-border-radius: 7px;
          overflow: hidden;
          margin: 0.5999% 0;
        }

        .grid-7 .wiki_col_left .field-name-field-creatures-species a, .grid-7 .wiki_col_left .field-name-field-creatures-species a:hover { 
         color:#FFF;
         text-decoration: none;
         font-size: 14px;
       }

        .grid-7 .wiki_col_left .field-label {
          font-size: 14px;
          color: #FF9900;
        }
      </style>

 <?php //print render($content['field_creatures_species']); ?>

 
 <?php
  
  hide($content['field_species_img_spec']);
  hide($content['field_key_fact_length']);
  hide($content['field_key_fact_range']);
  hide($content['field_key_fact_threats']);
  hide($content['field_key_fact_diet']);
  print render($content); 



 ?>
</div><!-- closes wiki_col_left -->
</div><!-- closes grid-7 -->


    <div class="grid-4">
      <div class="wiki_col_right">
      <style type="text/css">
      .grid-4 .wiki_col_right img {
        width: 100%;
        height:auto;
      }
      .grid-4 .wiki_col_right .field-label {
        font-size; 12px;
        color: #FF4400;
      }
      .grid-4 .wiki_col_right img {
          padding: 1.5999% 0;
          background-color: #297ACC;
          width: 100%;
          height:auto;
        }
      </style>

<?php print render($content['field_species_img_spec']); ?>
<?php print render($content['field_key_fact_length']); ?>
<?php print render($content['field_key_fact_range']); ?>
<?php print render($content['field_key_fact_threats']); ?>
<?php print render($content['field_key_fact_diet']); ?>




</div><!-- closes wiki_col_right -->


 <div class="home_page_block_btn"><a href="../wiki">Return to wiki</a></div>

</div><!-- closes grid-4 -->


<div class="content clearfix"></div>

	 
   <?php //print '<h2>hello world</h2>' ; ?>

  </div>


  <div class="clearfix">
    <?php //if (!empty($content['links'])): ?>
      <div class="links"><?php //print render($content['links']); ?></div>
    <?php //endif; ?>

    <?php //print render($content['comments']); ?>
   
  </div>

</div>