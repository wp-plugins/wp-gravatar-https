<?php
/**
 * Plugin Name: WP Gravatar Https
 * Plugin URI:  http://xiedexu.cn/wp-gravatar-https.htm
 * Description: Reason Gravatar avatar cannot access Gravatar site server is not stable, is the firewall problem, so the solution is to use the Gravatar avatar service (HTTPS) encryption line.Gravatar 头像无法稳定访问的原因不是 Gravatar 网站服务器的原因，是国内防火墙的问题，所以解决思路是使用Gravatar 头像服务的（HTTPS）加密线路。
 * Version: 1.1
 * Author: iOpenV
 * Author URI: http://www.iopenv.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function iopenv_get_https_avatar($avatar) {
	// Replacement for HTTPS domain 替换为 https 的域名
	$avatar = str_replace(array("www.gravatar.com", "0.gravatar.com", "1.gravatar.com", "2.gravatar.com"), "secure.gravatar.com", $avatar);
	// Replacement for HTTPS protocol 替换为 https 协议
	$avatar = str_replace("http:", "https:", $avatar);
	return $avatar;
}

add_filter('get_avatar', 'iopenv_get_https_avatar');