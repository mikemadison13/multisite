<?php

# REMOVE AFTER ACQUIA UPGRADES MYSQL TO 5.7 OR HIGHER! TEMPORARY DRIVER.
$databases['default']['default']['namespace'] = 'Drupal\\Driver\\Database\\mysql';

$config_directories = array();

$settings['hash_salt'] = 'l6Ck6zNFotCx2IgvmcUOb1gEqeOAHa-RpeE4Odj8teSr5oyvXFsfFlQK1rqSWpZI95cokgkN7Q';

$settings['update_free_access'] = FALSE;

# $config['system.site']['name'] = 'My Drupal site';
# $config['system.theme']['default'] = 'stark';
# $config['user.settings']['anonymous'] = 'Visitor';

$settings['container_yamls'][] = __DIR__ . '/services.yml';

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

/**
 * Disable New Relic on Acquia Cloud:
 */
if (extension_loaded('newrelic')) { // Ensure PHP agent is available
  newrelic_disable_autorum();
}

/**
 * Load the correct settings file:
 */

// Acquia Cloud Next and Acquia Cloud Classic:


// Acquia Code Studio:
else if (file_exists(__DIR__ . '/settings/local.settings.php')) {
  include __DIR__ . '/settings/local.settings.php';
}

// Acquia Lando:
else if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}
