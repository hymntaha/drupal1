<div id="wrapper">

  <div id="header-wrapper">
    <div id="header-container" class="clearfix">       
        <?php print render($page['header']); ?>        
    </div>
  </div>

  <div id="gradient-region">
  </div>
  
  <div id="home-container">   
    <?php
      $block = block_load('views', 'recent_closes-block');      
      $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));        
      print $output;
    ?>

    <?php $node = node_load(31); ?>

    <?php $items = array('set1', 'set2', 'set3'); ?>
    <?php $random_set = array_rand($items); ?>

    <div id="home-text">     
      <?php print $node->body['und'][0]['value']; ?>
    </div>    
  </div>
  
  <div id="slideshow">   
    
    <?php if($random_set == 0):?>

      <?php $set_1 = field_get_items('node', $node, 'field_set_1'); ?>
      <?php foreach ($set_1 as $key => $value): ?>
        <?php $image_renderable = field_view_value('node', $node, 'field_set_1', $value); ?>
        <?php echo render($image_renderable); ?>
      <?php endforeach; ?>

    <?php elseif($random_set == 1):?>

      <?php $set_2 = field_get_items('node', $node, 'field_set_2'); ?>
      <?php foreach ($set_2 as $key => $value): ?>
        <?php $image_renderable = field_view_value('node', $node, 'field_set_2', $value); ?>
        <?php echo render($image_renderable); ?>
      <?php endforeach; ?>

    <?php else: ?>

      <?php $set_3 = field_get_items('node', $node, 'field_set_3'); ?>
      <?php foreach ($set_3 as $key => $value): ?>
        <?php $image_renderable = field_view_value('node', $node, 'field_set_3', $value); ?>
        <?php echo render($image_renderable); ?>
      <?php endforeach; ?>

    <?php endif; ?>
  </div>

  <div id="footer-nav-wrapper">
    <div id="footer-nav-container" class="clearfix">
      <div id="footer-nav">
        <?php print render($page['footer_nav']); ?>
      </div>
    </div>
  </div>

  <div id="footer-wrapper">
    <div id="footer-container" class="clearfix">
      <?php print render($page['footer']); ?>
    </div>
  </div>

</div> 