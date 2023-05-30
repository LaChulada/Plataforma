<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Skipping permissions hardening will make scaffolding
 * work better, but will also raise a warning when you
 * install Drupal.
 *
 * https://www.drupal.org/project/drupal/issues/3091285
 */
// $settings['skip_permissions_hardening'] = TRUE;

/**
 * If there is a local settings file, then include it
 */
if (file_exists(dirname(__FILE__) . '/settings.local.php')) {
  include dirname(__FILE__) . '/settings.local.php';
}
if (file_exists(dirname(__FILE__) . '/settings.dev.php')) {
  include dirname(__FILE__) . '/settings.dev.php';
}
if (file_exists(dirname(__FILE__) . '/settings.stage.php')) {
  include dirname(__FILE__) . '/settings.stage.php';
}
if (file_exists(dirname(__FILE__) . '/settings.prod.php')) {
  include dirname(__FILE__) . '/settings.prod.php';
}
