<?

add_action( 'wp_ajax_nopriv_vicso_send_message', 'vicso_send_message' );
add_action( 'wp_ajax_vicso_send_message', 'vicso_send_message' );

function vicso_send_message(){
    global $wpdb;

    $admin_email = get_option( 'admin_email' );
    $username = $_POST['username'];
	$userphone = $_POST['userphone'];
	$usermail =  $_POST['usermail'];
	$usermessage = $_POST['usermessage'];

        $headers[] = 'Content-type: text/html; charset=utf-8';
        $headers[] = 'From: '.get_bloginfo("name").' <'.get_bloginfo("admin_email").'>' . "\r\n";
        $message = file_get_contents('tpl-mail.php', true);

        wp_mail( $admin_email, 'Contact form', $message, $headers );
        echo json_encode(array('contact_form'=>true));
        
    die;
}