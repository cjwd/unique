<?php
		
$currenturl = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
if (!empty($_SERVER['HTTPS'])){
	$currenturl = "https://" . $currenturl;
}else{
	$currenturl = "http://" . $currenturl;
}

echo '<ul>';
?>
<?php if (get_option('mytheme_facebookshare')!='false'){ ?>
	<li>
		<a href="http://www.facebook.com/share.php?u=<?php echo $currenturl; ?>" target="_blank" title="facebook" data-rel="tipsy">
			<img class="no-preload" src="<?php echo get_template_directory_uri(); ?>/images/icons/sharing/facebook-share.png" alt="">
		</a>
	</li>
<?php } ?>
<?php if (get_option('mytheme_twittershare')!='false'){ ?>
	<li>
		<a href="http://twitter.com/home?status=<?php echo str_replace(' ','%20',get_the_title()); ?>%20-%20<?php echo $currenturl; ?>" target="_blank" title="twitter" data-rel="tipsy">
			<img class="no-preload" src="<?php echo get_template_directory_uri(); ?>/images/icons/sharing/twitter-share.png" alt="">
		</a>
	</li>
<?php } ?>
<?php if (get_option('mytheme_googleshare')!='false'){ ?>
	<li>
		<a href="http://www.google.com/bookmarks/mark?op=edit&amp;bkmk=<?php echo $currenturl; ?>&amp;title=<?php echo str_replace(' ','%20',get_the_title()); ?>" target="_blank" title="google" data-rel="tipsy">
			<img class="no-preload" src="<?php echo get_template_directory_uri(); ?>/images/icons/sharing/google-share.png" alt="">
		</a>
	</li>
<?php } ?>
<?php if (get_option('mytheme_stumbleuponshare')!='false'){ ?>
	<li>
		<a href="http://www.stumbleupon.com/submit?url=<?php echo $currenturl; ?>&amp;title=<?php echo str_replace(' ','%20',get_the_title()); ?>" target="_blank" title="stumble" data-rel="tipsy">
			<img class="no-preload" src="<?php echo get_template_directory_uri(); ?>/images/icons/sharing/stumble-upon-share.png" alt="">
		</a>
	</li>
<?php } ?>
<?php if (get_option('mytheme_myspaceshare')!='false'){ ?>
	<li>
		<a href="http://www.myspace.com/Modules/PostTo/Pages/?u=<?php echo $currenturl; ?>" target="_blank" title="my space" data-rel="tipsy">
			<img class="no-preload" src="<?php echo get_template_directory_uri(); ?>/images/icons/sharing/my-space-share.png" alt="">
		</a>
	</li>
<?php } ?>
<?php if (get_option('mytheme_deliciousshare')!='false'){ ?>
	<li>
		<a href="http://delicious.com/post?url=<?php echo $currenturl; ?>&amp;title=<?php echo str_replace(' ','%20',get_the_title()); ?>" target="_blank" title="delicious" data-rel="tipsy">
			<img class="no-preload" src="<?php echo get_template_directory_uri(); ?>/images/icons/sharing/delicious-share.png" alt="">
		</a>
	</li>
<?php } ?>
<?php if (get_option('mytheme_diggshare')!='false'){ ?>
	<li>
		<a href="http://digg.com/submit?url=<?php echo $currenturl; ?>&amp;title=<?php echo str_replace(' ','%20',get_the_title()); ?>" target="_blank" title="digg" data-rel="tipsy">
			<img class="no-preload" src="<?php echo get_template_directory_uri(); ?>/images/icons/sharing/digg-share.png" alt="">
		</a>
	</li>
<?php } ?>
<?php if (get_option('mytheme_redditshare')!='false'){ ?>
	<li>
		<a href="http://reddit.com/submit?url=<?php echo $currenturl; ?>&amp;title=<?php echo str_replace(' ','%20',get_the_title()); ?>" target="_blank" title="reddit" data-rel="tipsy">
			<img class="no-preload" src="<?php echo get_template_directory_uri(); ?>/images/icons/sharing/reddit-share.png" alt="">
		</a>
	</li>
<?php } ?>
<?php if (get_option('mytheme_linkedinshare')!='false'){ ?>
	<li>
		<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $currenturl; ?>&amp;title=<?php echo str_replace(' ','%20',get_the_title()); ?>" target="_blank" title="linkedin" data-rel="tipsy">
			<img class="no-preload" src="<?php echo get_template_directory_uri(); ?>/images/icons/sharing/linkedin-share.png" alt="">
		</a>
	</li>
<?php } ?>
<?php

echo '</ul>';
	
?>