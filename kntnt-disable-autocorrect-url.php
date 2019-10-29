<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Disable Autocorrect URL
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Makes WordPress return 404 insteda of autocorrect bad URLs 
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

add_filter('redirect_canonical', function($redirect_url) {
    return is_404() ? false : $redirect_url;
});
