<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="$this->select('$keywords');" />
<meta name="Description" content="$this->select('$description');" />

<title>$this->select('$page_title');</title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="$this->select('$ecs_css_path');" rel="stylesheet" type="text/css" />
$this->select('* 包含脚本文件 *');
$this->select('insert_scripts files='common.js'');
</head>
<body>
$this->select('include file=library/page_header.lbi');

<div class="block box">
 <div id="ur_here">
  $this->select('include file=library/ur_here.lbi');
 </div>
</div>

<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
    $this->select('include file=library/cart.lbi');
    $this->select('include file=library/category_tree.lbi');
    $this->select('include file=library/goods_related.lbi');
    $this->select('include file=library/goods_fittings.lbi');
    $this->select('include file=library/goods_article.lbi');
    $this->select('include file=library/goods_attrlinked.lbi');
    
    
    
    
    $this->select('include file=library/history.lbi');
  </div>
  
  
  <div class="AreaR">
	 
   
   <div class="blank5"></div>
   <div class="box">
   <div class="box_1">
    <h3><span>$this->select('$lang.auction_goods');</span></h3>
    <div class="boxCenterList">
      $this->select('if $auction_list');
      $this->select('foreach from=$auction_list item=auction');
      <ul class="group clearfix">
      <li style="margin-right:8px; text-align:center;">
      <a href="$this->select('$auction.url');"><img src="$this->select('$auction.goods_thumb');" border="0" alt="$this->select('$auction.goods_name|escape:html');" style="vertical-align: middle" /></a>
      </li>
      <li style="width:555px; line-height:23px;">
      $this->select('$lang.goods_name');：<a href="$this->select('$auction.url');" class="f5">$this->select('$auction.goods_name|escape:html');</a><br />
      $this->select('$lang.act_status');：
    $this->select('if $auction.status_no eq 0');
            $this->select('$lang.au_pre_start');<br>
            $this->select('elseif $auction.status_no eq 1');
            $this->select('$lang.au_under_way_1');<br>
            $this->select('else');
            $this->select('$lang.au_finished');<br>
            $this->select('/if');
    $this->select('$lang.au_start_price');：$this->select('$auction.formated_start_price');<br>
    $this->select('if $auction.end_price gt 0');
    $this->select('$lang.au_end_price');：$this->select('$auction.formated_end_price');
          $this->select('/if');
      </li>
      </ul>
      $this->select('/foreach');
      $this->select('else');
       <span style="margin:2px 10px; font-size:14px; line-height:36px;">$this->select('$lang.no_auction');</span>
      $this->select('/if');
    </div>
   </div>
  </div>
  <div class="blank5"></div>
  $this->select('include file=library/pages.lbi');
  </div>
  
</div>
<div class="blank5"></div>

<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    $this->select('include file=library/help.lbi');
   </div>
  </div>
</div>
<div class="blank"></div>


$this->select('if $img_links  or $txt_links ');
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    $this->select('foreach from=$img_links item=link');
    <a href="$this->select('$link.url');" target="_blank" title="$this->select('$link.name');"><img src="$this->select('$link.logo');" alt="$this->select('$link.name');" border="0" /></a>
    $this->select('/foreach');
    $this->select('if $txt_links');
    $this->select('foreach from=$txt_links item=link');
    [<a href="$this->select('$link.url');" target="_blank" title="$this->select('$link.name');">$this->select('$link.name');</a>]
    $this->select('/foreach');
    $this->select('/if');
  </div>
 </div>
</div>
$this->select('/if');

<div class="blank"></div>
$this->select('include file=library/page_footer.lbi');
</body>
</html>
