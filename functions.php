<?php
/**
 * paipk1 setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * paipk1 supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.  
 * @uses add_theme_support() To add support for post thumbnails.
 *
 * @since paipk1 1.0
 *
 * @return void
 */
function paipk1_setup() {
  /*
   * Makes paipk1 available for translation.
   *
   */
  load_theme_textdomain( 'paipk1', get_template_directory() . '/languages' );
  /*
   * This theme uses a custom image size for featured images, displayed on
   * "standard" posts and pages.
   */
  add_theme_support('post-thumbnails');
  /*
   * This theme supports all available post formats by default.
   */
  add_theme_support('post-formats', array('aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery') );
  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary' => __('Primary Menu', 'paipk1')
  ) );
}
add_action('after_setup_theme','paipk1_setup');
//clear wordpress version number
remove_action('wp_head', 'wp_generator');

/**
 * post_views.
 *
 * Record browsing times
 *
 * @uses record_visitors() For record visitors number.  
 *
 * @since paipk1 1.0
 *
 * @return The number of times the article is viewed
 */
function record_visitors(){
    if (is_singular()){
      global $post;
      $post_ID = $post->ID;
      if($post_ID){
          $post_views = (int)get_post_meta($post_ID, 'views', true);
          if(!update_post_meta($post_ID, 'views', ($post_views+1))){add_post_meta($post_ID, 'views', 1, true);}
      }
    }
}
add_action('wp_head', 'record_visitors');

function post_views($before = '', $after = '', $echo = 1){
  global $post;
  $post_ID = $post->ID;
  $views = (int)get_post_meta($post_ID, 'views', true);
  if ($echo) echo $before, number_format($views), $after;
  else return $views;
}

/**
 * comments users.
 *
 * Statistical review.copy form http://zww.me/archives/25613
 *
 *
 * @since paipk1 1.0
 *
 * @return Comment number
 */
function comments_users($postid=0,$which=0) {
  $comments = get_comments('status=approve&type=comment&post_id='.$postid);
  if ($comments) {
    $i=0; $j=0; $commentusers=array();
    foreach ($comments as $comment) {
      ++$i;
      if ($i==1) { $commentusers[] = $comment->comment_author_email; ++$j; }
      if ( !in_array($comment->comment_author_email, $commentusers) ) {
        $commentusers[] = $comment->comment_author_email;
        ++$j;
      }
    }
    $output = array($j,$i);
    $which = ($which == 0) ? 0 : 1;
    return $output[$which];
  }
  return __('Comment','paipk1'); 
}


/**
* 函数名称：paipk1_post_thumbnail_url
* 函数作用：输出特殊图片中的图片链接地址
 */
function paipk1_post_thumbnail_url(){
	global $post, $posts;
	if (has_post_thumbnail()) {
		$html = get_the_post_thumbnail();
		preg_match_all("/<img.*src\s*=\s*[\"|\']?\s*([^>\"\'\s]*)/i", $html, $matches);
		$imgsrc=$matches[1][0];
	}else{
		$content = $post->post_content;
        preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',$post->post_content,$matches);
        $imgsrc=$matches[1][0];
        if($imgsrc==""){ 
        // 如果无图片则显示none，当然也可以自定义个URL地址
            $imgsrc="none";
        }
	}
	echo "$imgsrc";
}

/** widgets **/
if( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'name' => __('RightSidebar','paipk1'),
    'before_widget' => '<section class="widget" id="%2$s">',
    'after_widget' => '</section>',
    'before_title' => '<div class="modulename"><h5 class="glyphicon">',
    'after_title' => '</h5></div>'
  ));
  register_sidebar(array(
    'name' => __('LeftSidebar','paipk1'),
    'before_widget' => '<section class="widget" id="%2$s">',
    'after_widget' => '</section>',
    'before_title' => '<div class="modulename"><h5 class="glyphicon">',
    'after_title' => '</h5></div>'
  ));
}

?>