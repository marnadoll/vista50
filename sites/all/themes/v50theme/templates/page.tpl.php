<div id="vgrid">
  <div class="vheader">vheader
<div style="clear:both;"></div>

  <div class="logo">
	<img src="/sites/default/files/Main_Logo_6.png" alt id=logo></div>
  <div style="float:left;"></div>
  
<div class="menu">
<?php print render($block['main-menu']); ?>menu
  <div style="clear:both;"></div>
</div>
   
<div class="social_top"><p>
<img alt="facebook" class="Image attr__field_file_image_alt_text[und][0][value]__facebook attr__field_file_image_title_text[und][0][value]__ attr__format__default img__fid__969 img__view_mode__default" src="sites/default/files/facebook_footer.png" /><img alt="twitter" class="Image attr__field_file_image_alt_text[und][0][value]__twitter attr__field_file_image_title_text[und][0][value]__ attr__format__default img__fid__970 img__view_mode__default" src="sites/default/files/twitter_footer.png" /><img alt="youtube" class="Image attr__field_file_image_alt_text[und][0][value]__youtube attr__field_file_image_title_text[und][0][value]__ attr__format__default img__fid__971 img__view_mode__default" src="sites/default/files/youtube_footer.png" /><img alt="flickr" class="Image attr__field_file_image_alt_text[und][0][value]__flickr attr__field_file_image_title_text[und][0][value]__ attr__format__default img__fid__972 img__view_mode__default" src="sites/default/files/flickr_footer.png" /><img alt="linkedin" class="Image attr__field_file_image_alt_text[und][0][value]__linkedin attr__field_file_image_title_text[und][0][value]__ attr__format__default img__fid__969 img__view_mode__default" src="sites/default/files/linkedin_footer.png" /></p></div>
	<div style="clear:both;"></div>
</div>
</div>

  <div class="menu"><?php print $block_main_menu; ?>
  <?php if (isset($page['main-menu'])) : ?>
    <?php print render($page['main-menu']); ?>
  <?php endif; ?>
</div>


<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>



<?php if ($title): ?>
		
<?php print render($title_prefix); ?> 	

<div>


<?php if (isset($page['sticky_menu'])) : ?>
    <?php print render($page['sticky_menu']); ?>
  <?php endif; ?>  

<?php if (isset($page['social_share'])) : ?>
    <?php print render($page['social_share']); ?>
  <?php endif; ?>  

  <?php if (isset($page['v50_video'])) : ?>
    <?php print render($page['v50_video']); ?>
  <?php endif; ?>  
  

<?php if (isset($page['soical_top'])) : ?>
    <?php print render($page['soical_top']); ?>
  <?php endif; ?>  

<?php if (isset($page['soical_bottom'])) : ?>
    <?php print render($page['soical_bottom']); ?>
  <?php endif; ?>  

<?php if (isset($page['summits_link'])) : ?>
    <?php print render($page['summits_link']); ?>
  <?php endif; ?>  

  
  <?php if (isset($page['solutions_summit'])) : ?>
    <?php print render($page['solutions_summit']); ?>
  <?php endif; ?>  

 <?php if (isset($page['incubator_link'])) : ?>
    <?php print render($page['incubator_link']); ?>
  <?php endif; ?>  

  <?php if (isset($page['incubator'])) : ?>
    <?php print render($page['incubator']); ?>
  <?php endif; ?>  
  


<?php if (isset($page['showcase_link'])) : ?>
    <?php print render($page['showcase_link']); ?>
  <?php endif; ?>  

<?php if (isset($page['showcase'])) : ?>
    <?php print render($page['showcase']); ?>
  <?php endif; ?>  

  <?php if (isset($page['showcase_photos'])) : ?>
    <?php print render($page['showcase_photos']); ?>
  <?php endif; ?>  
  

 <?php if (isset($page['showcase_video'])) : ?>
    <?php print render($page['showcase_video']); ?>
  <?php endif; ?>  
  
  <?php if (isset($page['showcase_audio'])) : ?>
    <?php print render($page['showcase_audio']); ?>
  <?php endif; ?>  
  
<?php if (isset($page['showcase_posters'])) : ?>
    <?php print render($page['showcase_posters']); ?>
  <?php endif; ?>  
  
  
 <?php if (isset($page['future'])) : ?>
    <?php print render($page['future']); ?>
  <?php endif; ?>  
   
  <?php if (isset($page['content'])) : ?>
    <?php print render($page['content']); ?>
  <?php endif; ?>  
  
<?php if (isset($page['community'])) : ?>
    <?php print render($page['community']); ?>
  <?php endif; ?>  

 <?php if (isset($page['conversation'])) : ?>
    <?php print render($page['conversation']); ?>
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




 


