<?php
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <div class="map-container">
      <div class="left-inner">
        <div id="map-holder">
          <a id="new-york" href="/who-we-are/offices" >New York</a>
          <a id="greenwich" href="/greenwich" >Greenwich</a>
          <a id="chicago" href="/chicago" >Chicago</a>
          <a id="san-fran" href="/san-francisco" >San Francisco</a>
          <a id="london" href="/london" >London</a>
          <a id="hong-kong" href="/hong-kong" >Hong Kong</a>
          <a id="san-clemente" href="/san-clemente">San Clemente</a>
          <a id="atlanta" href="/atlanta">Atlanta</a>
        </div>
      </div>
      <div class="right-inner">
        <div id="office-detail">
          <span class="name"><?php print $title; ?></span>
          <?php print render($content['field_image']); ?>
          <div class="office-info">
            <?php print render($content['body']); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $block = block_load('views', 'office_location_grid-block');      
  $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));        
  print $output;
  ?>
  <div class="career-area">
    <a href="/contact/career-opportunities">View Our Career Opportunities</a>
  </div>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>
</div>
