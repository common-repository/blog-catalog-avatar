<?php
/*
Plugin Name: Blog Catalog Avatar
Plugin URI: http://mr.hokya.com/blog-catalog-avatar
Description: Replaces Gravatar on every pages with Blog Catalog's avatar automatically. You don't have to put any PHP codes, it will automatically replace all gravatars on your pages into Blog Catalog's avatar even on the dashboard.
Version: 1.31
Author: Julian Widya Perdana
Author URI: http://mr.hokya.com/
*/


function bcavatar () {
	echo '<img src = "http://www.blogcatalog.com/avatar/'.md5(get_comment_author_url()).'" width=50 height=50 />';
}

function bcavatar_notice () {
	echo "<p>You currently using <strong><a href='http://mr.hokya.com/blog-catalog-avatar' target='_blank'>Blog Catalog's Avatar</a></strong> as your avatar on your site</p>";
}

add_action('get_avatar', 'bcavatar');
add_action('rightnow_end','bcavatar_notice');

?>