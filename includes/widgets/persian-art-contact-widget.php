<?php
/* ----------------------------------------

	Plugin Name: PersianArt Contact Widget
	Description: Contact From Widget
	Version: 1.0
	Author: PersianArt 
	Author URL: http://www.PersiTheme.com/

---------------------------------------- */

// register widget and add it
add_action( 'widgets_init', 'PersianArt_Contact_widget' );
function PersianArt_Contact_widget() {
	register_widget( 'PersianArt_Contact' );
}

class PersianArt_Contact extends WP_Widget {
	// constructor
    function PersianArt_Contact() {
        parent::WP_Widget(false, 'PersianArt - Contact', array('description' => __('Contact from widget', 'my_framework')));
    }

	// widget
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', empty($instance['title']) ? __('Contact Me','my_framework') : $instance['title']);
        $email = apply_filters('widget_email', empty($instance['email']) ? '' : $instance['email']);
?>
<?php echo $before_widget; ?>
<?php if ( $title ) echo $before_title . $title . $after_title; ?>

<?php 
// If the form is submitted
if(isset($_POST['widget-submitted'])) {

	// Check to see if the honeypot captcha field was filled in
	if(trim($_POST['widget-checking']) !== '') {
		$captchaError = true;
	} else {
	
		// Check to make sure that the name field is not empty
		if(trim($_POST['widget-contactName']) === '' || trim($_POST['widget-contactName']) === 'Name') {
			$nameError = __('You forgot to enter your name.', 'my_framework');
			$nameclass = 'error';
			$phpclass = 'php-message';
			$hasError = true;
		} else {
			$name = trim($_POST['widget-contactName']);
		}
		
		// Check to make sure sure that a valid email address is submitted
		if(trim($_POST['widget-email']) === '' || trim($_POST['widget-email']) === 'Email')  {
			$emailError = __('You forgot to enter your email address.', 'my_framework');
			$emailclass = 'error';
			$phpclass = 'php-message';
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['widget-email']))) {
			$emailError = __('You entered an invalid email address.', 'my_framework');
			$emailclass = 'error';
			$phpclass = 'php-message';
			$hasError = true;
		} else {
			$email = trim($_POST['widget-email']);
		}
			
		// Check to make sure comments were entered	
		if(trim($_POST['widget-comments']) === '' || trim($_POST['widget-comments']) === 'Message') {
			$commentError = __('You forgot to enter your comments.', 'my_framework');
			$commentclass = 'error';
			$phpclass = 'php-message';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['widget-comments']));
			} else {
				$comments = trim($_POST['widget-comments']);
			}
		}
			
		// If there is no error, send the email
		if(!isset($hasError)) {
				
			$success_message = '<p class="message-box no-icon green">'.__('<strong>Thanks!</strong> Your email was successfully sent. I check my email all the time, so I should be in touch soon.', 'my_framework').'</p>';

			$emailTo = $instance['email'];
			$subject = __('Contact Form Submission from ', 'my_framework').$name;
			$body = __("Name: ", 'my_framework').$name.__("\n\nEmail: ", 'my_framework').$email.__("\n\nComments: ", 'my_framework').$comments;
			$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
			
			mail($emailTo, $subject, $body, $headers);

			$emailSent = true;

		}
	}
}
?>

<?php
if(isset($emailSent) && $emailSent == true) {
	echo $success_message;
} else {
?>
<form action="<?php the_permalink(); ?>" id="widget-contactForm" method="post">
	<ol class="forms">
		<li>
			<label for="widget-contactName" data-rel="Name" class="display-none"><?php _e('Name
			', 'my_framework'); ?></label>
			<input type="text" name="widget-contactName" id="widget-contactName" value="<?php if (isset($_POST['widget-contactName'])) echo $_POST['widget-contactName']; else echo 'Name'; ?>" class="requiredField <?php if(isset($nameclass)) echo $nameclass; ?>" onFocus="if(this.value=='Name') this.value='';" onBlur="if(this.value=='') this.value='Name';" />
		</li>
			<?php if (isset($nameError) && $nameError!='') { ?>
			<div class="error-message <?php echo $phpclass; ?>"><?php echo $nameError; ?></div>
			<?php } ?>
		<li>
			<label for="widget-email" data-rel="Email" class="display-none"><?php _e('Email', 'my_framework'); ?></label>
			<input type="text" name="widget-email" id="widget-email" value="<?php if (isset($_POST['widget-email']))  echo $_POST['widget-email']; else echo 'Email';?>" class="requiredField email <?php if(isset($emailclass)) echo $emailclass; ?>" onFocus="if(this.value=='Email') this.value='';" onBlur="if(this.value=='') this.value='Email';" />
		</li>
			<?php if (isset($emailError) && $emailError!='') { ?>
			<div class="error-message <?php echo $phpclass; ?>"><?php echo $emailError; ?></div>
			<?php } ?>
		<li class="textarea">
			<label for="widget-commentsText" data-rel="Message" class="display-none"><?php _e('Message', 'my_framework'); ?></label>
			<textarea name="widget-comments" id="widget-commentsText" rows="20" cols="30" class="requiredField <?php if(isset($commentclass)) echo $commentclass; ?>" onFocus="if(this.value=='Message') this.value='';" onBlur="if(this.value=='') this.value='Message';"><?php if (isset($_POST['widget-comments'])) { if (function_exists('stripslashes')) echo stripslashes($_POST['widget-comments']); else echo $_POST['widget-comments']; } else echo'Message'; ?>
</textarea>
		</li>
			<?php if (isset($commentError) && $commentError!='') { ?>
			<div class="error-message <?php echo $phpclass; ?>"><?php echo $commentError; ?></div>
			<?php } ?>
		<li class="screenReader display-none">
			<label for="widget-checking" class="screenReader"><?php _e('If you want to submit this form, do not enter anything in this field', 'my_framework'); ?></label>
			<input type="text" name="widget-checking" id="widget-checking" class="screenReader" value="<?php if(isset($_POST['widget-checking']))  echo $_POST['widget-checking'];?>" />
		</li>
		<li class="buttons">
			<input type="hidden" name="widget-submitted" id="widget-submitted" value="true" />
			<input type="submit" id="widget-contact-submit" value="<?php _e('SUBMIT', 'my_framework'); ?>">
		</li>
	</ol>
</form>
<?php } ?>
<?php echo $after_widget; ?>
<?php
    }

	// Update
    function update($new_instance, $old_instance) {
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['email'] = strip_tags($new_instance['email']);
		
        return $new_instance;
    }

	// form
    function form($instance) {
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$email = isset($instance['email']) ? esc_attr($instance['email']) : '';
?>
<p>
	<label for="<?php echo $this->get_field_id('title'); ?>">
		<?php _e('Title:', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
	</label>
</p>
<p>
	<label for="<?php echo $this->get_field_id('email'); ?>">
		<?php _e('Email:', 'my_framework'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>" />
	</label>
</p>
<?php 
	}
}
?>
