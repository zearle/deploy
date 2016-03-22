<?php
/**
 * Remove version query string from all styles and scripts
 *
 * You can enable/disable this feature in functions.php (or lib/config.php if you're using Roots):
 * add_theme_support('soil-disable-asset-versioning');
 */
function soil_remove_script_version($src){
  return remove_query_arg('ver', $src);
}
add_filter('script_loader_src', 'soil_remove_script_version', 15, 1);
add_filter('style_loader_src', 'soil_remove_script_version', 15, 1);