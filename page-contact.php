<?php
/*
 * Template Name: Contact
 */

get_header(); 

$themestyle = get_option('mytheme_themestyle');
$pagesidebar = get_post_meta($post->ID, 'pagesidebar', true);
$pagesidebarright = get_post_meta($post->ID, 'pagesidebarright', true);
$pagesidebarleft = get_post_meta($post->ID, 'pagesidebarleft', true);
$pagetitleonoff = get_post_meta($post->ID, 'pagetitleonoff', true);
$pagecontentonoff = get_post_meta($post->ID, 'pagecontentonoff', true);
$pagesbonoff = get_post_meta($post->ID, 'pagesbonoff', true);
$contactemail = get_post_meta($post->ID, 'contactemail', true);
$recaptchaonoff = get_post_meta($post->ID, 'recaptchaonoff', true);
$recaptchapublickey = get_post_meta($post->ID, 'recaptchapublickey', true);
$recaptchaprivatekey = get_post_meta($post->ID, 'recaptchaprivatekey', true);
$recaptchatheme = get_post_meta($post->ID, 'recaptchatheme', true);
$recaptchalang = get_post_meta($post->ID, 'recaptchalang', true);
$contactmap = get_post_meta($post->ID, 'contactmap', true);
$contactmapheight = get_post_meta($post->ID, 'contactmapheight', true);
$contactmapontop = get_post_meta($post->ID, 'contactmapontoponoff', true);

if (!$contactmapheight) { if ($contactmapontop) $contactmapheight='350'; else $contactmapheight='250'; }

?>

<?php if ($contactmap && $contactmapontop=='true') { ?>

<div class="google-map top <?php if (!$themestyle || $themestyle=='boxed') echo 'map940'; ?>">
	<iframe height="<?php echo $contactmapheight ?>" title="" src="<?php echo $contactmap ?>"><?php _e('google map', 'my_framework'); ?></iframe>
</div>
<?php } ?>
<div id="main" class="<?php if ($themestyle == 'block') echo 'container_12'; ?>">
<div id="sub-main" class="<?php if ($themestyle != 'block') echo 'container_12'; ?>">
		
	<?php if ($pagetitleonoff=='true') { ?>
	<div class="h-wrapper h1 grid_12"><h1><?php the_title(); ?><span class="line"></span></h1></div>
	<?php } ?>
	
	<div id="content" <?php if ($pagesidebar == 'right') { echo 'class="grid_8"'; } elseif ($pagesidebar == 'left') { echo 'class="grid_8 fright"'; } elseif ($pagesidebar == 'both') { echo 'class="grid_6 bothmiddle"';} elseif ($pagesidebar == 'no') { echo 'class="grid_12"';} ?>>
		<?php if (have_posts()) while (have_posts()) : the_post(); ?>
		
		<?php if ($pagecontentonoff=='true') { ?>
		<?php the_content(); ?>
		<?php if ($contactmap && $contactmapontop!='true') { ?>
		<div class="google-map">
			<iframe height="<?php echo $contactmapheight ?>" title="" src="<?php echo $contactmap ?>"><?php _e('google map', 'my_framework'); ?></iframe>
		</div>
		<?php } ?>
		<div id="contact-form">
		<?php if ($recaptchaonoff=='true') { ?>
		<script type="text/javascript">
			var RecaptchaOptions = {
				theme : '<?php echo $recaptchatheme; ?>',
				lang : '<?php echo $recaptchalang; ?>'
			};
		</script>
		<?php } ?>
			
			<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
						
<?php 
// set recaptcha on or off
if ($recaptchaonoff=='true') {
	
	require_once('includes/plugins/recaptcha/recaptchalib.php');
	// the response from reCAPTCHA
	$resp = null;
	// the error code from reCAPTCHA, if any
	$recaptcha_message = null;

	# was there a reCAPTCHA response?
	if (isset($_POST['recaptcha_response_field'])) {
	
		$resp = recaptcha_check_answer ($recaptchaprivatekey,
									 $_SERVER['REMOTE_ADDR'],
									 $_POST['recaptcha_challenge_field'],
									 $_POST['recaptcha_response_field']);
		if (!$resp->is_valid) {
		// What happens when the CAPTCHA was entered incorrectly
		$recaptcha_message = __('<P class="recaptcha-error">The reCAPTCHA wasn`t entered correctly. Please try it again.</p>', 'my_framework');
		} else {
		// Your code here to handle a successful verification
			//Check to see if the honeypot captcha field was filled in
			if(trim($_POST['checking']) !== '') {
				$captchaError = true;
			} else {
			
				//Check to make sure that the name field is not empty
				if(trim($_POST['contactName']) === '' || trim($_POST['contactName']) === 'Name') {
					$nameError = __('You forgot to enter your name.', 'my_framework');
					$nameclass = 'error';
					$phpclass = 'php-message';
					$hasError = true;
				} else {
					$name = trim($_POST['contactName']);
				}
				
				//Check to make sure sure that a valid email address is submitted
				if(trim($_POST['email']) === '' || trim($_POST['email']) === 'Email')  {
					$emailError = __('You forgot to enter your email address.', 'my_framework');
					$emailclass = 'error';
					$phpclass = 'php-message';
					$hasError = true;
				} else if (!eregi('^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$', trim($_POST['email']))) {
					$emailError = __('You entered an invalid email address.', 'my_framework');
					$emailclass = 'error';
					$phpclass = 'php-message';
					$hasError = true;
				} else {
					$email = trim($_POST['email']);
				}
					
				//Check to make sure comments were entered	
				if(trim($_POST['comments']) === '' || trim($_POST['comments']) === 'Message') {
					$commentError = __('You forgot to enter your comments.', 'my_framework');
					$commentclass = 'error';
					$phpclass = 'php-message';
					$hasError = true;
				} else {
					if(function_exists('stripslashes')) {
						$comments = stripslashes(trim($_POST['comments']));
					} else {
						$comments = trim($_POST['comments']);
					}
				}
					
				//If there is no error, send the email
				if(!isset($hasError)) {
					
				$success_message = '<p class="message-box no-icon green">'.__('<strong>Thanks!</strong> Your email was successfully sent. I check my email all the time, so I should be in touch soon.', 'my_framework').'</p>';
		
					$emailTo = $contactemail;
						if (!isset($emailTo) || ($emailTo == '') ){
							$emailTo = get_option('admin_email');
						}
					$subject = __('Contact Form Submission from ', 'my_framework').$name;
					$body = __("Name: ", 'my_framework').$name.__("\n\nEmail: ", 'my_framework').$email.__("\n\nComments: ", 'my_framework').$comments;
					$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
					
					mail($emailTo, $subject, $body, $headers);
		
					$emailSent = true;
		
				}
			}
		}
	}
	
} else { // end of recaptcha on
	
	// If the form is submitted
	if(isset($_POST['submitted'])) {
	
		// Check to see if the honeypot captcha field was filled in
		if(trim($_POST['checking']) !== '') {
			$captchaError = true;
		} else {
		
			// Check to make sure that the name field is not empty
			if(trim($_POST['contactName']) === '' || trim($_POST['contactName']) === 'Name') {
				$nameError = __('You forgot to enter your name.', 'my_framework');
				$nameclass = 'error';
				$phpclass = 'php-message';
				$hasError = true;
			} else {
				$name = trim($_POST['contactName']);
			}
			
			// Check to make sure sure that a valid email address is submitted
			if(trim($_POST['email']) === '' || trim($_POST['email']) === 'Email')  {
				$emailError = __('You forgot to enter your email address.', 'my_framework');
				$emailclass = 'error';
				$phpclass = 'php-message';
				$hasError = true;
			} else if (!eregi('^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$', trim($_POST['email']))) {
				$emailError = __('You entered an invalid email address.', 'my_framework');
				$emailclass = 'error';
				$phpclass = 'php-message';
				$hasError = true;
			} else {
				$email = trim($_POST['email']);
			}
				
			// Check to make sure comments were entered	
			if(trim($_POST['comments']) === '' || trim($_POST['comments']) === 'Message') {
				$commentError = __('You forgot to enter your comments.', 'my_framework');
				$commentclass = 'error';
				$phpclass = 'php-message';
				$hasError = true;
			} else {
				if(function_exists('stripslashes')) {
					$comments = stripslashes(trim($_POST['comments']));
				} else {
					$comments = trim($_POST['comments']);
				}
			}
				
			// If there is no error, send the email
			if(!isset($hasError)) {
				
			$success_message = '<p class="message-box no-icon green">'.__('<strong>Thanks!</strong> Your email was successfully sent. I check my email all the time, so I should be in touch soon.', 'my_framework').'</p>';
	
				$emailTo = $contactemail;
					/*if (!isset($emailTo) || ($emailTo == '') ){
						$emailTo = get_option('admin_email');
					}*/
				$subject = __('Contact Form Submission from ', 'my_framework').$name;
				$body = __('Name: ', 'my_framework').$name.__("\n\nEmail: ", 'my_framework').$email.__("\n\nComments: ", 'my_framework').$comments;
				$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
				
				mail($emailTo, $subject, $body, $headers);
	
				$emailSent = true;
	
			}
		}
	}
} // end of recaptcha off
?>

<?php if (isset($success_message)) echo $success_message; else { ?>
				
					<label for="contactName" data-rel="Name"><?php _e('Name', 'my_framework'); ?></label>
				<div>
					<input type="text" name="contactName" id="contactName" value="<?php if (isset($_POST['contactName'])) echo $_POST['contactName']; else echo 'Name'; ?>" class="requiredField <?php if (isset($nameclass)) echo $nameclass; ?>" onFocus="if(this.value=='Name') this.value='';" onBlur="if(this.value=='') this.value='Name';" />
				</div>
					<?php if (isset($nameError) && $nameError != '') { ?>
					<div class="error-message <?php echo $phpclass; ?>"><?php echo $nameError; ?></div>
					<?php } ?>
					<label for="email" data-rel="Email"><?php _e('Email', 'my_framework'); ?></label>
				<div>
					<input type="text" name="email" id="email" value="<?php if (isset($_POST['email']))  echo $_POST['email']; else echo 'Email'; ?>" class="requiredField email <?php if (isset($emailclass)) echo $emailclass; ?>" onFocus="if(this.value=='Email') this.value='';" onBlur="if(this.value=='') this.value='Email';" />
				</div>
					<?php if (isset($emailError) && $emailError != '') { ?>
					<div class="error-message <?php echo $phpclass; ?>"><?php echo $emailError; ?></div>
					<?php } ?>
					<label for="commentsText" data-rel="Message"><?php _e('Message', 'my_framework'); ?></label>
				<div class="textarea">
					<textarea name="comments" id="commentsText" rows="20" cols="30" class="requiredField <?php  if (isset($commentclass)) echo $commentclass; ?>" onFocus="if(this.value=='Message') this.value='';" onBlur="if(this.value=='') this.value='Message';"><?php if (isset($_POST['comments'])) { if (function_exists('stripslashes')) echo stripslashes($_POST['comments']); else echo $_POST['comments']; } else echo 'Message'; ?>
</textarea>
				</div>
					<?php if (isset($commentError) && $commentError != '') { ?>
					<div class="error-message <?php echo $phpclass; ?>"><?php echo $commentError; ?></div>
					<?php } ?>
				<div id="contact-recaptcha" class="recaptcha <?php if ($recaptchaonoff=='true') echo 'true'; ?>">
					<?php if (isset($recaptcha_message)) echo $recaptcha_message; ?>
					<?php if ($recaptchaonoff=='true') echo recaptcha_get_html($recaptchapublickey); ?>
				</div>
				<div class="screenReader display-none">
					<label for="checking" class="screenReader"><?php _e('If you want to submit this form, do not enter anything in this field', 'my_framework'); ?></label>
					<input type="text" name="checking" id="checking" class="screenReader" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" />
				</div>
				<div class="buttons">
					<input type="hidden" name="submitted" id="submitted" value="true" />
					<input type="submit" id="contact-submit" value="<?php _e('SUBMIT', 'my_framework'); ?>">
				</div>
				
<?php } ?>
				
			</form>
			
		</div>
		<?php } ?>
		<?php endwhile; ?>
	</div>
	<!-- end of #content -->
	<?php get_sidebar('left'); ?>
	<?php get_sidebar('right'); ?>
</div>
</div>
<!-- end of #main -->
<?php get_footer(); ?>