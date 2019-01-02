<?php

// define('WP_MEMORY_LIMIT', '256MB');

define('DB_NAME', 'services_worpress_1_v1_www_irichanin_com');
define('DB_USER', 'root');
define('DB_PASSWORD', 'ux0bW9bT0ZYNPJ5QdhHh');
define('DB_HOST', '127.0.0.1:3307');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'UedJU9R96tjVWaDwpKtS5cCEMcyTJgFDAtjVZgTGl1EVjtIX7qEVmXMOyUT4kNOu');
define('SECURE_AUTH_KEY',  'UgDqc1C6nTetjHLKeqpIsGtnS6A42WBqRL7XSRV0yPdOjNEIvUVkIhnZXjhm6RG5');
define('LOGGED_IN_KEY',    'I550taQ0BdNWTH9eh2kNh8iIyhuDAbvRzrmy3Y8h2YDgFArwLCyCcBJdQT36pol9');
define('NONCE_KEY',        'jV88SXoDSOX6m32GlTRlq0oQbB6s7z9oYHzzhbLbaQlF7G9vL1NIyjOcjqmlrc53');
define('AUTH_SALT',        'e7ICL390Y3pLelkPLQAY2yfg7JX07AEzgEWmd36tRXmeVQpp07qsmTWLLlEZjuDP');
define('SECURE_AUTH_SALT', 'BZwkZLf9jk1lIZ0zKRZ1MN9y4mV4G5FtXVLNPUiTVmfeA7riktNoh1rrnsdN0aSN');
define('LOGGED_IN_SALT',   'HR9K8DvM7nREOk94PYqzLKSsZmYbNnBUugbG1intAB5d5ZHSDgscREbcD5wxr4M7');
define('NONCE_SALT',       'LwHkk8z0OXC6ZClzYGvU1CNQjv7qYsgPX3OznbztfvhnrhVZEGfTCON4tdKOaIRJ');

$table_prefix  = 'services_worpress_1_v1_';

define('WP_DEBUG', false);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
