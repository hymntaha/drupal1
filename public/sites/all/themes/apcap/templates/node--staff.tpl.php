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
    <div class="staff-content-container">
      
        <div class="left">
          <div id="name-position">
            <span class="name">
              <?php print $title; ?>
            </span>
            <span class="position">
              <?php print render($content['field_position']); ?>
            </span>
          </div>
          <div id="description">
            <?php print render($content['body']); ?>
          </div>
          <a href="/who-we-are/team">Back to Our Team</a>
        </div>
        <div class="right">
          <?php print render($content['field_image']); ?>
          <span id="email">
            <?php print render($content['field_email']); ?>
          </span>
        </div>
      
    </div>
  </div>

  <?php
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>

</div>
