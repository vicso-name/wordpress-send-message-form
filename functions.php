<?

function vicso_send_message(){
    global $wpdb;

    $admin_email = get_option( 'admin_email' );
    $username = $_POST['username'];
    $clien_phone = $_POST['clien_phone'];

        $headers[] = 'Content-type: text/html; charset=utf-8';
        $headers[] = 'From: '.get_bloginfo("name").' <'.get_bloginfo("admin_email").'>' . "\r\n";
        $message = file_get_contents('mailtpl.php', true);
        $message = 'Перезвоните мне '. $username .'<br>' . $clien_phone .'<br>';

        wp_mail( $admin_email, 'Перезвоните мне', $message, $headers );
        echo json_encode(array('recallmail'=>true));
        
    die;
}