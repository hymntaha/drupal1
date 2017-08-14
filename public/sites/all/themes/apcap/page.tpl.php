<div id="wrapper">

  <div id="header-wrapper">
    <div id="header-container" class="clearfix">        
      <?php print render($page['header']); ?>       
    </div>
  </div>

  <div id="gradient-region">
  </div>

  <div id="tabs-outer-wrapper">
    <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
  </div>

  <div id="container" class="clearfix">

    <div id="center"><div id="squeeze">        
        <a id="main-content"></a>
        <?php print render($tabs2); ?>
        <?php print $messages; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <div class="clearfix">
          <?php print render($page['content']); ?>
        </div>
        <?php print $feed_icons ?>      
    </div></div>

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="sidebar">
        <?php print render($page['sidebar_second']); ?>
      </div>
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
