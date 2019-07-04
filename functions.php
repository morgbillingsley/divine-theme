<?php
    // Theme Support
    add_theme_support( 'post-thumbnails' );

    // Hooks
    add_action('admin_post_nopriv_contact', 'contact_proc');
    add_action('admin_post_contact', 'contact_proc');

    // Functions
    function contact_proc() {
        // Post data
        $name = strval($_POST['name']);
        $email = strval($_POST['email']);
        $phone = strval($_POST['phone']);
        $message = strval($_POST['message']);
        $datetime = date('Y-m-d h:i:sa');
        $ip = strval($_SERVER['REMOTE_ADDR']);
        $browser = get_browser(null, true);
        $client = strval($browser['parent']);
        $os = strval($browser['platform']);

        $table = 'contacts';
        $data = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'datetime' => $datetime,
            'ip_address' => $ip,
            'browser' => $client,
            'operating_system' => $os
        );
        $format = array('%s','%s','%s','%s','%s','%s','%s','%s','%s');

        global $wpdb;
        $wpdb->insert($table, $data, $format);

        // Redirect to homepage
        wp_redirect('http://divineembodimenthypnotherapy.com/');
    }
?>