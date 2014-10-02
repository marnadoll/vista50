
<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>



<div id="zone-menu-wrapper" class="zone-wrapper zone-menu-wrapper clearfix">  
  <div id="zone-menu" class="zone zone-menu clearfix container-12">
    <div class="grid-9 region region-menu" id="region-menu">
  <div class="region-inner region-menu-inner">
        <nav class="navigation">
      <h2 class="element-invisible">Main menu</h2><ul id="main-menu" class="links inline clearfix main-menu"><li class="menu-788 first"><a href="/node/2">Home</a></li><li class="menu-728"><a href="http://v50/summits" title="Link to the solutions summit section">Solutions Summits</a></li><li class="menu-779"><a href="http://home/join" title="">Join the Conversation</a></li><li class="menu-729"><a href="http://v50/incubator" title="Link to solutions incubator section">Solutions Incubator</a></li><li class="menu-778"><a href="http://home/organize" title="">Organize your Community</a></li><li class="menu-780 last"><a href="http://home/future" title="">$50 for the Future</a></li></ul>          </nav>
        <div class="alpha-debug-block"><h2>Menu</h2><p>This is a debugging block</p></div>  </div>
</div>
  </div>
</div>



<?php if ($title): ?>
	<div class="zone-wrapper zone-title-wrapper clearfix" id="zone-title-wrapper">  
	<div class="zone zone-title clearfix container-12" id="zone-title">   
     
		
<?php print render($title_prefix); ?> 	




   
  <?php if (isset($page['content'])) : ?>
    <?php print render($page['content']); ?>
  <?php endif; ?>  
  
  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>

 <?php if ($title_hidden): ?><div class="element-invisible"><?php endif; ?>
		<h1 class="title" id="page-title">
    <?php if ($title_hidden): ?></div><?php endif; ?>
    
    <?php print render($title_suffix); ?>
	</div>
	</div>
<?php endif; ?>




 <?php if ($secondary_menu): ?>
      <div id="secondary-menu" class="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#secondary-menu -->
    <?php endif; ?>


