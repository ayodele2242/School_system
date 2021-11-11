<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebook https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */

// add slash / at the end
define('SITE_URL', 'http://localhost:90/totallight/send_mail/');

// database prefix if you use
define('DB_PREFIX', 'tbl_');
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'wesley');

// define database tables
define('TABLE_CARDS', DB_PREFIX.'cards');
define('TABLE_SUBSCRIBERS', DB_PREFIX.'subscribers');
?>