<?php
/**
 * 一款简易的导航网站模板
 * 
 * @package CyansNavi
 * @author Lyvnee
 * @version 1.0.1
 * @license MIT
 * @link https://lyvnee.com
 **/

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="inner-center main">
  <div class="content-inside">
    <!-- slogan start -->
    <div class="logo-box">
      <div class="logo-left">
        <?php if ($this->options->logoUrl): ?>
          <img src="<?php $this->options->logoUrl(); ?>" alt="logo">        
        <?php endif; ?>
      </div>
      <div class="logo-right">
        <span> <?php $this->options->title() ?></span>
      </div>
    </div>
    <!-- slogan end -->

    <!-- 搜索框 start -->
    <div id="search_form" class="search-section"target="_blank">
      <div class="search-left">
        <div id="search_logo" data-type="google" class="search-logo"></div>
        <div class="input-wrap">
          <input id="search_keyword"
                class="search-input"
                name="keyword"
                maxlength="100"
                autocomplete="off"
                type="text"
                placeholder="不懂么？不懂就搜！">
          <div class="clear-keyword" id="clear_keyword" title="清空">x</div>
        </div>
        <!--  搜索引擎 start  -->
        <ul id="search_methods" class="search-methods">
          <li data-type="google" class="search-item google">谷歌</li>
          <li data-type="baidu" class="search-item baidu">百度</li>
          <li data-type="bing" class="search-item bing">必应</li>
          <li data-type="so" class="search-item so">360搜索</li>
          <li data-type="sogou" class="search-item sogou">搜狗</li>
        </ul>
        <!--  搜索引擎 end  -->
        <!--  搜索结果 start -->
        <ul id="search_result" class="search-result">
          <!--<li class="result-item"></li>-->
        </ul>
        <!--  搜索结果 end -->
      </div>
      <input class="search-submit" value="" id="search_submit" type="submit">
    </div>
    <!-- 搜索框 end -->


    <!-- 导航地址 start -->
    <div class="nav-content">
      <?php  $this->widget('Widget_Metas_Category_List')->to($categorys);  ?>
        <div class="jj-list-tit">
          <?php while ($categorys->next()): ?><?php $categorys->name(); ?> 
            <ul class="jj-list-con">
             <?php $this->widget("Widget_Archive@$categorys->mid", "pageSize=99999&type=category", "mid=$categorys->mid")->to($categoryPosts); ?>
              <?php while($categoryPosts->next()): ?>
                  <li><a href="<?php $categoryPosts->fields->naviUrl(); ?>" title="<?php $categoryPosts->fields->naviDesc(); ?>" target="_blank" class="jj-list-link" > <?php if($categoryPosts->fields->naviLogo): ?> <img src="<?php $categoryPosts->fields->naviLogo(); ?>" /><?php endif; ?> <?php $categoryPosts->title(); ?> </a></li>
              <?php endwhile; ?>
            </ul>
          <?php endwhile; ?>
		  </div>
    </div>
  </div>

    <!-- 导航地址 end -->
<?php $this->need('footer.php'); ?>



