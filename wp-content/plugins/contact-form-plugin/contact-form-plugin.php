<?php
/*
Plugin Name: Contact Form Plugin
Plugin URI: http://example.com
Description: Simple non-bloated WordPress Contact Form
Version: 1.0
Author: Yoenry Vanega Hechavarría
Author URI: 
*/

function html_form_code() {
    echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
    echo '<div class="form-block" id="request_quote_modal_form">';
    echo '<input type="text" placeholder="First Name" class="trackable ao_form_field" name="first_name" id="first_name">';
    echo '<p id="p_first_name" class="error-message">Please enter your first name.</p>';
    echo '<input type="text" placeholder="Last Name" class="trackable ao_form_field" name="last_name" id="last_name">';
    echo '<p id="p_last_name" class="error-message">Please enter your last name.</p>';
    echo '<input type="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" placeholder="Email Address" class="trackable ao_form_field" name="email_address" id="email_address">';
    echo '<p id="p_email_address" class="error-message">Please enter a valid email address (example: john@doe.com).</p>';
    echo '<input type="tel" pattern="(\+?[- . ()]*\d){10}" placeholder="Phone" class="trackable ao_form_field" name="phone" id="phone">';
    echo '<p id="p_phone" class="error-message">Please enter a valid telephone number (example: 123-456-7890).</p>';
    echo '<input type="submit" class="trackable btn primary ao_form_click" name="btnGetAQuote" id="btnGetAQuote" value="Get a Free Quote">';
    echo '<p class="disclaimer">By clicking this button, you consent for Frontpoint to use automated technology to contact you at the number provided. This consent is not required to make a purchase from us. Click <a target="_blank" style="color:black; text-decoration:underline" href="http://frontpointsecurity.com/privacy-policy">here</a> to review Frontpoint´s Privacy Policy. Frontpoint marketing partners receive compensation from Frontpoint for featuring Frontpoint on their websites</p>';
    echo '</div>';
    echo '<input type="hidden" id="property_type" name="property_type">';
    echo '<input type="hidden" id="property_size" name="property_size">';
    echo '<input type="hidden" id="property_door" name="property_door">';
    echo '</form>';
}

//$dir = get_template_directory_uri();
//echo $message_template = file_get_contents($dir.'/pages/email_cliente.php'); die;
function deliver_mail() {
    // if the submit button is clicked, send the email
    //print_r($_POST); die;
    if (isset( $_POST['btnGetAQuote'])){
        // sanitize form values
        $type  = sanitize_text_field($_POST["property_type"]);
        $size  = sanitize_text_field($_POST["property_size"]);
        $door  = sanitize_text_field($_POST["property_door"]);
        $fname = sanitize_text_field($_POST["first_name"]);
        $lname = sanitize_text_field($_POST["last_name"]);
        $email = sanitize_email($_POST["email_address"]);
        $phone = esc_textarea($_POST["phone"]);

        // get the blog administrator's email address
        //$to = get_option('admin_email');
        $to = 'dionyuci@gmail.com';
		
        $dir = get_template_directory_uri();
        $message_client = file_get_contents($dir.'/pages/email_cliente.php');

        //echo $to;die;
        $headers = "From: $name <$email>" . "\r\n";
        $headers2 = "From: $to <$to>" . "\r\n";
		
		//Get e-mail template
        $message_template = file_get_contents($dir.'/pages/email_server.php');

        //replace placeholders with user-specific content
        //$sw_year = date('Y');
        $message = str_ireplace('[nome]',$name, $message_template);
        $message = str_ireplace('[email]',$email, $message);
        $message = str_ireplace('[phone]', $phone, $message);
        $message = str_ireplace('[type]', $type, $message);
        $message = str_ireplace('[size]', $size, $message);
        $message = str_ireplace('[door]', $door, $message);
		
		add_filter('wp_mail_content_type',create_function('', 'return "text/html";'));

        //If email has been process for sending, display a success message
        if (wp_mail($email, 'FrontPoint', $message_client, $headers2)) {
			wp_mail($to, 'Client', $message, $headers);
            return home_url('/');
        } else {
            echo 'An unexpected error occurred';
        }
    }
}

function cf_shortcode() {
    ob_start();
    deliver_mail();
    html_form_code();
    return ob_get_clean();
}

add_shortcode( 'sitepoint_contact_form', 'cf_shortcode' );
?>