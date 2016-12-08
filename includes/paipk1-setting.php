<?php/** * * begin theme setting * * @uses add_theme_page()    * @uses add_action() * * @since paipk1 1.0 * * @return null */function paipk1_ad_theme_setting(){  if($_POST['paipk1_update_themeoptions']=='true') {paipk1_themeoptions_update();}  add_theme_page('theme_setting',__('theme setting','paipk1'), 'administrator', 'theme_setting','paipk1_theme_setting'); }   add_action('admin_menu', 'paipk1_ad_theme_setting');/** * * theme setting begin * * @since paipk1 1.0 * * @return HTML */function paipk1_themeoptions_update(){  if($_POST['if_bootstrap']=='on'){$_POST['if_bootstrap']='checked';} else {$_POST['if_bootstrap']='';}  update_option('paipk1_if_bootstrap', $_POST['if_bootstrap']);  update_option('paipk1_qq', $_POST['qq']);  update_option('paipk1_baiduStatistics', stripslashes($_POST['baiduStatistics']));  if($_POST['if_SEO']=='on'){$_POST['if_SEO']='checked';} else {$_POST['if_SEO']='';}  update_option('paipk1_if_SEO', $_POST['if_SEO']);  update_option('paipk1_homeKeyword', $_POST['homeKeyword']);  update_option('paipk1_homeDescription', $_POST['homeDescription']);}/** * * theme setting * * @since paipk1 1.0 * * @return HTML */function paipk1_theme_setting(){ ?>  <div class="wrap">  <h1><?php _e('theme setting','paipk1')?></h1>  <hr>  <form method="POST" action="" style="padding-left:20px;">  <input type="hidden" name="paipk1_update_themeoptions" value="true" /><!-- hidden -->    <p><input type="checkbox" name="if_bootstrap" <?php echo get_option('paipk1_if_bootstrap'); ?> />&nbsp;<?php _e('use out bootstrap','paipk1') ?></p>    <p>QICQ:&nbsp;<input name="qq" type="text" value="<?php echo get_option('paipk1_qq'); ?>">&nbsp;<?php _e('for china','paipk1')?></p>    <p>      baidu <?php _e('Statistics','paipk1')?>:<br>      <textarea type="text" name="baiduStatistics" cols="60" rows="3"><?php echo get_option('paipk1_baiduStatistics'); ?></textarea>    </p>    <h3><input type="checkbox" name="if_SEO" <?php echo get_option('paipk1_if_SEO'); ?> />&nbsp;SEO</h3>    <p><?php _e('home Keyword','paipk1')?>:&nbsp;<input name="homeKeyword" type="text" value="<?php echo get_option('paipk1_homeKeyword'); ?>"></p>    <p><?php _e('home Description','paipk1')?>:<br>      <textarea type="text" name="homeDescription" cols="60" rows="2"><?php echo get_option('paipk1_homeDescription'); ?></textarea>    </p>    <p><input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Submit','paipk1') ?>"></p>  </form></div>  <?php }   ?>