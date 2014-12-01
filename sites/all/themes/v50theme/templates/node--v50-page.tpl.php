<div class="menu" id="menu">
	<div class="stickyNavInterior">
<a id="stickyLogo" href="#top"></a>
<a href="#" id="toggle">Menu</a>
<ul>
  <li><a href="#summits">Solutions Summits</a></li>
  <li><a href="#join">Join The Conversation</a></li>
  <li><a href="#organize">Organize Your Community</a></li>
  <li><a href="#incubator">Incubator</a></li>
  <li><a href="#showcase">Showcase</a></li>
  <li><a href="#past">VISTA in Images</a></li>
  <li><a href="#future">$50 For The Future</a></li>
</ul>
</div>
</div>

<div class="vheader" id="top">
<div class="vheaderInterior">
	
<div class="logo">
	<a href="#top"></a>
</div>
  
<div class="topNav">
<div class="ribbonEnd">
<div class="persistentMenu" id="persistentMenu">
<ul>
  <li><a href="#summits">Solutions Summits</a></li>
  <li><a href="#join">Join The Conversation</a></li>
  <li><a href="#organize">Organize Your Community</a></li>
  <li><a href="#incubator">Incubator</a></li>
  <li><a href="#showcase">Showcase</a></li>
  <li><a href="#past">VISTA in Images</a></li>
  <li><a href="#future">$50 For The Future</a></li>
</ul>
</div>
<div style="clear:both;"></div>
</div>
<div style="clear:both;"></div>
<div class="social_top_wrap">
<div class="social_top social clearfix">
	<ul>
		<li><a  class="facebook" href="https://www.facebook.com/AmeriCorpsVISTA"></a></li>
		<li><a  class="twitter" href="https://twitter.com/VISTAbuzz"></a></li>
		<li><a  class="youtube" href="https://www.youtube.com/user/VISTAOutreach"></a></li>
		<li><a class="linkedin" href="https://www.linkedin.com/company/americorps-vista"></a></li>
	</ul>
</div>
<div style="clear:both;"></div>
</div>
</div>
</div>
</div>


<div id="vgrid" class="middle">
<div class="page clearfix">
 
<!-- V50 video -->
<div id="v50vid_wrap"> 
<div class="arch"> 
<div class="v50interior v50interiorFirst"> 
<div class="flagBckrd">
<div class="v50video">
	<div class="vidInterior past_videos">
	<?php print render($content['field_v50_video']); ?>
	<div style="clear:both;"></div>
	<?php $url = file_create_url($node->field_video_508_pdf['und'][0]['uri']); ?>
	<a class="transcript" href="<?php print $url;?>">Video Transcript</a>
	<div style="clear:both;"></div>
	</div>
	<div style="clear:both;"></div>
</div>
<div class="v50link">
	<a class="actionButton" href="https://public.govdelivery.com/accounts/USCNCS/subscriber/new?origin=http%3A%2F%2Fservice.govdelivery.com%2Fdemos%2Fcncs%2F&email=Sign+up+for+email+updates&commit.x=25&commit.y=13">Get Updates</a>
</div>

<div style="clear:both;"></div>
</div>
</div>
</div>
</div>

<!-- V50 links -->
<div id="links">
<div class="v50interior">
<div class="bannerEndsLeft"><div class="bannerEndsRight">
<div class="link_wrap">
  <div style="clear:both;"></div>
	<a class="summits_link" href="#summits">
		<div class="textInterior">
		<h4>Solutions Summits & Events</h4>
		<?php print render($content['field_summit_link']); ?>
		<?php print render($content['field_summit_link_img']); ?>
		</div>
    </a>
	<a class="incu_link" href="#incubator">
	 <div class="textInterior">
	 <h4>Solutions Incubator</h4>
	 <?php print render($content['field_incu_link']); ?>
	 <?php print render($content['field_incu_link_img']); ?>
	 </div>
	</a>
  	<a class="show_link" href="#showcase">
	  	<div class="textInterior">	
	  	<h4>Solutions Showcase</h4>
	  	<?php print render($content['field_show_link']); ?>
	  	<?php print render($content['field_show_link_img']); ?>
	  	</div>
  		</a>
  		<div style="clear:both;"></div>
	</div>
<div style="clear:both;"></div>
</div>
</div></div>
</div>

<!-- V50 summits -->
<div id="summits">
<div class="v50interior">
<div style="clear:both;"></div>
<h2>Solutions Summits & Events</h2>
<div style="clear:both;"></div>
	 <div class="national">
	 <h3>National</h3>
	 <div class="centerImage">
	 <?php print render($content['field_national_image']); ?>
	 </div>
		 <div class="textInterior">
		 <?php print render($content['field_national']); ?>
		 </div>
	 </div>
	 <div style="clear:both;"></div>
     	<div class="community_s">
     	<h3>Community</h3>
     	<div class="centerImage">
     	<?php print render($content['field_community_summit_img']); ?>
     	</div>
	     	<div class="textInterior">
	     	<?php print render($content['field_community_summit']); ?>
	     	</div>
     	</div>
     	<div style="clear:both;"></div>
     	<div class="community_s">
     	<h3>Spotlight</h3>
     	<div class="centerImage">
     	<?php print render($content['field_spotlight_image']); ?>
     	</div>
	     	<div class="textInterior">
	     	<?php print render($content['field_spotlight_text']); ?>
	     	</div>
     	</div>
     	<div style="clear:both;"></div>
  </div>
</div>
  
<!-- V50 join -->
<div id="join">
<div class="v50interior">
  <div style="clear:both;"></div>
<h2>Join the Conversation</h2>
<div style="clear:both;"></div>

 	<div class="story">
	 	<div class="joinFlagTop">
		 	<div class="v50texture">
		 	<div class="joinIcon"></div>
		 <div class="flagInterior">
	 	<h4>Share Your Story</h4>
 	<?php print render($content['field_story_text']); ?>
 	<div style="clear:both;"></div>
		 </div>
		 <div style="clear:both;"></div>
	 	</div>
	 	</div>
	 	<div class="joinFlagBtm"></div>
 	</div>

     	<div class="reconnect">
	     	<div class="joinFlagTop">
		     	<div class="v50texture">
		     	<div class="joinIcon"></div>
		 <div class="flagInterior">
		<h4>Reconnect With VISTA Friends</h4>
     	<?php print render($content['field_reconnect_text']); ?>
	     	</div>
		 <div style="clear:both;"></div>
	 	</div>
	    </div>
	 	<div class="joinFlagBtm"></div>
     	</div>
     	<div style="clear:both;"></div>

  
 <!-- V50 social share --> 
<div id="social_share">
<h3>Social Share</h3>
<div style="clear:both;"></div>

	<div class="share1">
	<div class="textInterior">
	<?php 
	$shareVar = $node->field_social_1['und'][0]['safe_value']; 
	print '<p>' . $shareVar . '</p>';
	$shareVarTwitter = htmlentities($shareVar);
	$shareVarTwitter = urlencode($shareVar);
	?>
	<div class="twitterWrap">
		<a class="twitter" href="https://twitter.com/intent/tweet?text=<?php print $shareVarTwitter; ?>+@vistabuzz&original_referer=http://www.vistacampus.gov/&hashtags=vista50"><span>Share</span></a>
	</div>
		<div class="facebookWrap">
		<a class="facebook" href="https://www.facebook.com/sharer/sharer.php"><span>Share</span></a>
	</div>
	<div style="clear:both;"></div>
	</div>
	</div>
	
     	<div class="share2">
	     	<div class="textInterior">
	<?php 
	$shareVar = $node->field_social_2['und'][0]['safe_value']; 
	print '<p>' . $shareVar . '</p>';
	$shareVarTwitter = htmlentities($shareVar);
	$shareVarTwitter = urlencode($shareVar);
	?>
	<div class="twitterWrap">
		<a class="twitter" href="https://twitter.com/intent/tweet?text=<?php print $shareVarTwitter; ?>+@vistabuzz&original_referer=http://www.vistacampus.gov/"><span>Share</span></a>
	</div>
		<div class="facebookWrap">
		<a class="facebook" href="https://www.facebook.com/sharer/sharer.php"><span>Share</span></a>
	</div>
	<div style="clear:both;"></div>
	</div>
     	</div>
     	

		<div class="share3">
			<div class="textInterior">
	<?php 
	$shareVar = $node->field_social_3['und'][0]['safe_value']; 
	print '<p>' . $shareVar . '</p>';
	$shareVarTwitter = htmlentities($shareVar);
	$shareVarTwitter = urlencode($shareVar);
	?>
	<div class="twitterWrap">
		<a class="twitter" href="https://twitter.com/intent/tweet?text=<?php print $shareVarTwitter; ?>+@vistabuzz&original_referer=http://www.vistacampus.gov/"><span>Share</span></a>
	</div>
		<div class="facebookWrap">
		<a class="facebook" href="https://www.facebook.com/sharer/sharer.php"><span>Share</span></a>
	</div>
	<div style="clear:both;"></div>
	</div>
		</div>
	
  <div style="clear:both;"></div>
     	
 <!-- Hide Bottom 3 for now -------------------------------------    	
     		<div class="share4">
	     		<div class="textInterior">
	<?php 
	$shareVar = $node->field_social_4['und'][0]['safe_value']; 
	print '<p>' . $shareVar . '</p>';
	$shareVarTwitter = htmlentities($shareVar);
	$shareVarTwitter = urlencode($shareVar);
	?>
	<div class="twitterWrap">
		<a class="twitter" href="https://twitter.com/intent/tweet?text=<?php print $shareVarTwitter; ?>+@vistabuzz&original_referer=http://www.vistacampus.gov/"><span>Share</span></a>
	</div>
		<div class="facebookWrap">
		<a class="facebook" href="https://www.facebook.com/sharer/sharer.php"><span>Share</span></a>
	</div>
	<div style="clear:both;"></div>
	</div>
     		</div>
	
	
		<div class="share5">
			<div class="textInterior">
	<?php 
	$shareVar = $node->field_social_5['und'][0]['safe_value']; 
	print '<p>' . $shareVar . '</p>';
	$shareVarTwitter = htmlentities($shareVar);
	$shareVarTwitter = urlencode($shareVar);
	?>
	<div class="twitterWrap">
		<a class="twitter" href="https://twitter.com/intent/tweet?text=<?php print $shareVarTwitter; ?>+@vistabuzz&original_referer=http://www.vistacampus.gov/"><span>Share</span></a>
	</div>
		<div class="facebookWrap">
		<a class="facebook" href="https://www.facebook.com/sharer/sharer.php"><span>Share</span></a>
	</div>
	<div style="clear:both;"></div>
	</div>
		</div>
	
	
     		<div class="share6">
	     		<div class="textInterior">
	<?php 
	$shareVar = $node->field_social_6['und'][0]['safe_value']; 
	print '<p>' . $shareVar . '</p>';
	$shareVarTwitter = htmlentities($shareVar);
	$shareVarTwitter = urlencode($shareVar);
	?>
	<div class="twitterWrap">
		<a class="twitter" href="https://twitter.com/intent/tweet?text=<?php print $shareVarTwitter; ?>+@vistabuzz&original_referer=http://www.vistacampus.gov/"><span>Share</span></a>
	</div>
		<div class="facebookWrap">
		<a class="facebook" href="https://www.facebook.com/sharer/sharer.php"><span>Share</span></a>
	</div>
	<div style="clear:both;"></div>
	</div>
     		</div>
     		
------------------------------------- End hide bottom 3 -->
	
<div style="clear:both;"></div>
  </div>
  <div style="clear:both;"></div>
</div>
</div>

 <!-- V50 organize --> 
<div id="organize">
<div class="v50interior">
<h2>Organize Your Community</h2>
<div style="clear:both;"></div>
 <!-- V50 organize tools--> 
 	<div class="tools">
 	 <h3>Tools</h3>
 	 <div class="organize_lt"><?php print render($content['field_tools_img']); ?></div>
 	 <div class="organize_rt">
	 	 <div class="textInterior">
	 	 <h4>Tools For Organizing A <br />Community Solutions Summit</h4>
	 	 <?php print render($content['field_organize_tools']); ?>
		 	 <div class="btn">
		 	 <?php print render($content['field_download_kit']); ?>
		 	 </div>
 	 	 </div>
 	 </div>
 	</div>
  <!-- V50 organize desk--> 
<div class="help_desk">
<h3>Help Desk</h3>
<div class="organize_lt"><?php print render($content['field_help_img']); ?></div>
<div class="organize_rt">
	<div class="textInterior">
	<h4>VISTA 50th Help Desk</h4>
	<?php print render($content['field_organize_help']); ?>
		<div class="btn">
		<?php print render($content['field_learn_more']); ?>
		</div>
	</div>
</div>
</div>
<div style="clear:both;"></div>
</div>
</div>

 <!-- V50 incubator --> 
<div id="incubator">
 <div class="v50interior">
<h2>Solutions Incubator</h2>
<div style="clear:both;"></div>
<div class="incu_works_img"><?php print render($content['field_incu_work_image']); ?></div>
 	<div class="incu_works">
 	<h3>How It Works</h3>
 	<div class="textInterior">
 	<?php print render($content['field_incu_works']); ?>
 	</div>
 	</div>
 	<div style="clear:both;"></div>
  </div>
</div>

 <!-- V50 showcase --> 
<div id="showcase">
<div class="arrow">
<div class="v50interior">
<h2>Solutions Showcase</h2>
<div style="clear:both;"></div>
	<div class="case_img">
	<?php print render($content['field_showcase_works_image']); ?></div>
 	<div class="case_works">
 	<h3>How It Works</h3>
 	<div class="textInterior">
 	<?php print render($content['field_showcase_works']); ?>
 	</div>
 	</div>
 	<div style="clear:both;"></div>
  </div>
</div>
</div>

 <!-- V50 past --> 
<div id="past">
<div class="v50interior">
<h2>VISTA in Images</h2>
<div style="clear:both;"></div>

<h3>Photos</h3>
<h4 class="photoHeader">Follow <a href="http://instagram.com/nationalservice">nationalservice</a> on instagram. #VISTA50</h4>
<div class="pastWrap">
<div style="clear:both;"></div>
<div class="pastInner">
	<div class="v50texture">
<div id="v50insta2" class="insta"></div>
<div style="clear:both;"></div>
</div>
</div>
</div>

<div style="clear:both;"></div>
<h3>Videos</h3>
<div class="pastWrap">
<div class="pastInner past_videos">
	<div class="v50texture">
<div class="past_video1"><?php print render($content['field_past_video1']); ?></div>
 <div style="clear:both;"></div>
		<div class="past_video2"><?php print render($content['field_past_video2']); ?></div>
		<div class="past_video3"><?php print render($content['field_past_video3']); ?></div>
 <div style="clear:both;"></div>
</div>
 </div>
</div>


<div style="clear:both;"></div>

<h3>Audio</h3>
<div class="pastWrap">
<div class="pastInner">
	<div class="v50texture">
<div class="audio1">
<h5><?php print $node->field_v50_audio1['und'][0]['description']; ?></h5>
<?php print render($content['field_v50_audio1']); ?></div>
<div class="audio2">
<h5><?php print $node->field_v50_audio2['und'][0]['description']; ?></h5>
<?php print render($content['field_v50_audio2']); ?></div>
  <div style="clear:both;"></div>
<div class="audio3">
<h5><?php print $node->field_v50_audio3['und'][0]['description']; ?></h5>
<?php print render($content['field_v50_audio3']); ?></div>
<div class="audio4">
<h5><?php print $node->field_v50_audio4['und'][0]['description']; ?></h5>
<?php print render($content['field_v50_audio4']); ?></div>
  <div style="clear:both;"></div>
<div class="audio5">
<h5><?php print $node->field_v50_audio5['und'][0]['description']; ?></h5>
<?php print render($content['field_v50_audio5']); ?></div>
<div class="audio6">
<h5><?php print $node->field_v50_audio6['und'][0]['description']; ?></h5>
<?php print render($content['field_v50_audio6']); ?></div>
  <div style="clear:both;"></div>
</div>
</div>
</div>

<div style="clear:both;"></div>

<h3>Vintage Posters</h3>
<div class="pastWrap">
<div class="pastInner">
<div class="v50texture">
<div class="posters">
<?php $v50poster = views_embed_view('v50_poster');
print $v50poster; ?>
</div>
<div style="clear:both;"></div>
</div>
</div>
</div>
  <div style="clear:both;"></div>
</div>
</div>

 <!-- V50 50 for the future --> 
<div id="future">
	<div class="v50interior">
	<h2>$50 For the Future</h2>
	
		<div style="clear:both;"></div>
	<div class="donate_info">
		<div class="textInterior">
		<?php print render($content['field_future50_text']); ?>
		<div class="btn">
		<?php print render($content['field_future50_link']); ?>
	</div>
	</div>
	
	<div style="clear:both;"></div>
	</div>
	
  <div class="pay">
    <?php print render($content['field_future50_secure']); ?>
    <div class="payInterior">
    <?php print render($content['field_future50_image']); ?>
    </div>
  </div>
  <div style="clear:both;"></div>
  </div>
</div>
<div style="clear:both;"></div>

 <!-- V50 footer --> 
<div class="footer_area">
<div class="v50footerInterior">
<a  href="http://www.nationalservice.gov/programs/americorps/americorps-vista" class="footer_logo1">
<?php print render($content['field_footer_logo1']); ?>
</a>
<a href="http://www.nationalservice.gov/" class="footer_logo2">
<?php print render($content['field_footer_logo2']); ?>
</a>
<div class="footer_menu">
<div class="footer_menu_rt">
<ul>
   <li><a href="mailto:VISTA50@cns.gov">Contact Us</a></li>
   <li><a href="http://www.vistacampus.gov/">VISTA Campus</a></li>
  <li><a href="http://www.nationalservice.gov/about-cncs/disability-and-accessibility">Accessibility</a></li>
</ul>
</div>
<div class="footer_menu_lt">

</div>
</div>

<div class="social_bottom social clearfix">
	<ul>
		<li><a  class="facebook" href="https://www.facebook.com/AmeriCorpsVISTA"></a></li>
		<li><a  class="twitter" href="https://twitter.com/VISTAbuzz"></a></li>
		<li><a  class="youtube" href="https://www.youtube.com/user/VISTAOutreach"></a></li>
		<li><a class="linkedin" href="https://www.linkedin.com/company/americorps-vista"></a></li>
	</ul>
</div>
<div style="clear:both;"></div>
</div>
</div>

</div>
</div>
<script src="/sites/all/themes/v50theme/js/fitvids.js"></script>
<script src="/sites/all/themes/v50theme/js/instagram.js"></script>
<script src="/sites/all/themes/v50theme/js/waypoint.js"></script>
<script src="/sites/all/themes/v50theme/js/mediaelement.js"></script>
<script src="/sites/all/themes/v50theme/js/scripts.js"></script>