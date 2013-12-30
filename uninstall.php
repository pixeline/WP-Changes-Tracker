if(!defined('WP_UNINSTALL_PLUGIN') )
    exit();
    
delete_option( 'wp_changes_tracker_options' );

global $wpdb;

$table_name = $wpdb->prefix . "changes_tracker";

$wpdb->query( "DROP TABLE $table_name;" );
