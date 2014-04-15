<?php
/*
Template Name: Contact Form
*/
?>

<?php //If the form is submitted
$email_sent = false;
if(isset($_POST['contact_submit'])){
    $error = false;

    //Check if hidden field has been filled out
    if(trim($_POST['contact_message']) != ''){
            $error_captcha = true;
    }else{

        //Check to make sure that the name field is not empty
        if(trim($_POST['contact_name']) == ''){
                $error_name =  __('This field cannot be left empty.', 'cpotheme'); 
                $error = true;
        }else{
                $name = trim($_POST['contact_name']);
        }

        //Check to make sure sure that a valid email address is submitted
        if(trim($_POST['contact_email']) == ''){
                $error_email = __('This field cannot be left empty.', 'cpotheme');
                $error = true;
        }else if(!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['contact_email']))){
                $error_email = __('The email address has an incorrect format..', 'cpotheme');
                $error = true;
        }else{
                $email = trim($_POST['contact_email']);
        }

        //Check to make sure comments were entered	
        if(trim($_POST['contact_comments']) == ''){
                $error_comments = __('This field cannot be left empty.', 'cpotheme');
                $error = true;
        }else{
                if(function_exists('stripslashes')){
                        $comments = stripslashes(trim($_POST['contact_comments']));
                } else {
                        $comments = trim($_POST['contact_comments']);
                }
        }

        //All checks passed, send email
        if(!$error){
            $email_to = cpotheme_get_option('contact_email'); 
            if($email_to == '') $email_to = get_bloginfo('admin_email');
            $subject = get_bloginfo('name').' - '.__('New contact form response by', 'cpotheme').' '.$name;
            $body = '';
            $body .= __('Name', 'cpotheme').': '.$name." \n\n";
            $body .= __('Email', 'cpotheme').': '.$email." \n\n";
            $body .= __('Message', 'cpotheme').': '.$comments." \n\n";
            $admin_body = '';
            $admin_body .= __('IP Address', 'cpotheme').': '.$_SERVER['REMOTE_ADDR']." \n\n";
            $admin_body .= __('Time', 'cpotheme').': '.date('d/m/Y H:i')." \n\n";
            $headers = 'From: '.' <'.$email.'>'."\r\n".'Reply-To: '.$email;
            wp_mail($email_to, $subject, $body.$admin_body, $headers);

            //Send a copy to sender
            $subject = get_bloginfo('name').' - '.__('Your message has been sent', 'cpotheme').' '.get_bloginfo('title');
            $headers = 'From: '.' <'.$email_to.'>'."\r\n".'Reply-To: '.$email_to;
			wp_mail($email, $subject, $body, $headers);
            $email_sent = true;
        }
    }
} ?>

<?php get_header(); ?>
	
<?php get_template_part('element', 'page-header'); ?>
<div class="container">
	<section id="content" class="content">
		<?php if(have_posts()) while(have_posts()): the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="page-content">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<div class="page-link">'.__('Pages', 'cpotheme').':', 'after' => '</div>')); ?>
			</div>
		</div>
		<?php endwhile; ?>
		
		<div id="contact-form" class="contact-form">
			<form action="<?php the_permalink(); ?>" id="contact" method="post">
				<?php if(isset($email_sent) && $email_sent == true){ ?>
				<div class="message_box message_ok">
					<?php _e('Your message has been sent.', 'cpotheme');  ?>
				</div>
				<?php } ?>
				
				<div class="field field_name">
					<label for="contactName"><?php _e('Name', 'cpotheme'); ?></label>
					<input type="text" name="contact_name" id="contact_name" value="<?php if(isset($_POST['contact_name'])) echo $_POST['contact_name'];?>" class="txt requiredField" />
					<?php if(isset($error_name) && $error_name != ''){ ?>
						<span class="error"><?php echo $error_name;?></span> 
					<?php } ?>
				</div>

				<div class="field">
					<label for="email field_email"><?php _e('Email', 'cpotheme'); ?></label>
					<input type="text" name="contact_email" id="contact_email" value="<?php if(isset($_POST['contact_email']))  echo $_POST['contact_email'];?>" class="txt requiredField email" />
					<?php if(isset($error_email) && $error_email != ''){ ?>
						<span class="error"><?php echo $error_email;?></span>
					<?php } ?>
				</div>

				<div class="field field_message">
					<label for="commentsText"><?php _e('Message', 'cpotheme'); ?></label>
					<textarea name="contact_comments" id="contact_comments" rows="20" cols="30" class="requiredField"><?php if(isset($_POST['contact_comments'])){ if(function_exists('stripslashes')){ echo stripslashes($_POST['contact_comments']); } else { echo $_POST['contact_comments']; } } ?></textarea>
					<?php if(isset($error_comments) && $error_comments != ''){ ?>
						<span class="error"><?php echo $error_comments;?></span> 
					<?php } ?>
				</div>

				<div class="test">
					<label for="contact_message" class="contact_message"><?php _e('In order to complete this form, leave this field empty', 'cpotheme') ?></label>
					<input type="text" name="contact_message" id="contact_message" class="contact_message" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" />
				</div>

				<div class="field field_submit">
					<input type="hidden" name="contact_submit" id="contact_submit" value="true" />
					<input class="button" type="submit" value="<?php _e('Send', 'cpotheme'); ?>" />
				</div>
			</form>
		</div>
	</section>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>