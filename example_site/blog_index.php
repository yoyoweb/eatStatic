<?php

require EATSTATIC_ROOT.'/eatStaticBlog.class.php';

$blog = new eatStaticBlog;
$posts = $blog->getRecentPosts();
$page_title = BLOG_TITLE.' :: '.BLOG_TAG_LINE;

$show_prev_next = false;

require ROOT.'/skin/'.SKIN.'/templates/page_top.php';
require ROOT.'/skin/'.SKIN.'/templates/body_top.php';

foreach($posts as $post){
	require ROOT.'/skin/'.SKIN.'/templates/post_item.php';
}

require ROOT.'/skin/'.SKIN.'/templates/body_bottom.php';
require ROOT.'/skin/'.SKIN.'/templates/page_bottom.php';

?>