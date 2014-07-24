<?php
/* ==========================================================================
 * You can find more information by visiting 
 * http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php Codex page.
   ========================================================================== */

/* ==========================================================================
   Define environment: Dev (local) / Production (remote)
   ========================================================================== */
   if ($_SERVER['REMOTE_ADDR']=='127.0.0.1') {
    define('WP_ENV', 'development');
    } else {
        define('WP_ENV', 'production');
    }

/* Environment-dependant settings: database and wp-content URl
   ========================================================================== */

if (WP_ENV == 'development') { /** Local dev setup */
    define('DB_NAME', '');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost'); // probably 'localhost'
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
    define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
    define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
    define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
} else { /** Staging setup */
    define('DB_NAME', '');
    define('DB_USER', '');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost'); // probably 'localhost'
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
    define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
    define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
    define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
    // define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/site.com/wp-content');
    // define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );
}

/* ==========================================================================
   Database settings. Don't change this if in doubt.
   ========================================================================== */
define('DB_CHARSET', 'utf8'); // The Database Charset.
define('DB_COLLATE', ''); // The Database Collate type.

/* ==========================================================================
    Authentication Unique Keys and Salts.
    Change these to different unique phrases!
    You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
    You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
    @since 2.6.0
   ========================================================================== */

	define('AUTH_KEY',         'put your unique phrase here');
	define('SECURE_AUTH_KEY',  'put your unique phrase here');
	define('LOGGED_IN_KEY',    'put your unique phrase here');
	define('NONCE_KEY',        'put your unique phrase here');
	define('AUTH_SALT',        'put your unique phrase here');
	define('SECURE_AUTH_SALT', 'put your unique phrase here');
	define('LOGGED_IN_SALT',   'put your unique phrase here');
	define('NONCE_SALT',       'put your unique phrase here');

/* ==========================================================================
    WordPress Database Table prefix. Only numbers, letters, and underscores please!
    Should be same for both environments, otherwise you'll need a different setup.
   ========================================================================== */

	$table_prefix  = 'notwp_'; // dont't use standard wp_ prefix, it's not safe

/* ==========================================================================
    WordPress Localized Language, defaults to English.
    Change this to localize WordPress. A corresponding MO file for the chosen
    language must be installed to wp-content/languages. For example, install
    de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
    language support.
   ========================================================================== */

   define('WPLANG', '');

   /* ==========================================================================
   For developers: WordPress debugging.
   ========================================================================== */
	ini_set( 'display_errors', 0 );
	define('WP_DEBUG', false);
	define( 'SAVEQUERIES', false );



   /* ==========================================================================
	Absolute path to the WordPress directory.
	Sets up WordPress vars and included files.
   ========================================================================== */

if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );

	// That's all, stop editing! Happy blogging.