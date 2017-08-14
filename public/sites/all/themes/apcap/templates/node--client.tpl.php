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
    <div class="single-client-wrapper">
      <div id="single-client-container">
        <div class="left-wrapper">
          <?php print render($content['field_logo']); ?>
          <span class="name"><?php print render($content['field_fund_name']) ?></span>
          <span class="amount"><?php print render($content['field_amount']); ?></span>
        </div>
        <div class="right-wrapper">
          <span class="title"><?php print $title; ?></span>
          <span class="description"><?php print render($content['body']); ?></span>
          <span class="back-link"><a href="/clients">Back to Clients</a></span>
        </div>
      </div>
    </div>
  </div>

  <?php
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>

</div>