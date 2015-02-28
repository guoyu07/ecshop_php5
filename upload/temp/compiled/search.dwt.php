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
$this->select('insert_scripts files='utils.js,common.js,global.js,compare.js'');
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
  $this->select('if $action eq "form"');
  
  <div class="box">
   <div class="box_1">
    <h3><span>$this->select('$lang.advanced_search');</span></h3>
    <div class="boxCenterList">
      <form action="search.php" method="get" name="advancedSearchForm" id="advancedSearchForm">
    <table border="0" align="center" cellpadding="3">
      <tr>
        <td valign="top">$this->select('$lang.keywords');：</td>
        <td>
          <input name="keywords" id="keywords" type="text" size="40" maxlength="120" class="inputBg" value="$this->select('$adv_val.keywords');" />
          <label for="sc_ds"><input type="checkbox" name="sc_ds" value="1" id="sc_ds" $this->select('$scck'); />$this->select('$lang.sc_ds');</label>
          <br />$this->select('$lang.searchkeywords_notice');
        </td>
      </tr>
      <tr>
        <td>$this->select('$lang.category');：</td>
        <td><select name="category" id="select" style="border:1px solid #ccc;">
            <option value="0">$this->select('$lang.all_category');</option>$this->select('$cat_list');</select>
        </td>
      </tr>
      <tr>
        <td>$this->select('$lang.brand');：</td>
        <td><select name="brand" id="brand" style="border:1px solid #ccc;">
            <option value="0">$this->select('$lang.all_brand');</option>
            $this->select('html_options options=$brand_list selected=$adv_val.brand');
          </select>
        </td>
      </tr>
      <tr>
        <td>$this->select('$lang.price');：</td>
        <td><input name="min_price" type="text" id="min_price" class="inputBg" value="$this->select('$adv_val.min_price');" size="10" maxlength="8" />
          -
          <input name="max_price" type="text" id="max_price" class="inputBg" value="$this->select('$adv_val.max_price');" size="10" maxlength="8" />
        </td>
      </tr>
      $this->select('if $goods_type_list');
      <tr>
        <td>$this->select('$lang.extension');：</td>
        <td><select name="goods_type" onchange="this.form.submit()" style="border:1px solid #ccc;">
            <option value="0">$this->select('$lang.all_option');</option>
            $this->select('html_options options=$goods_type_list selected=$goods_type_selected');
          </select>
        </td>
      </tr>
      $this->select('/if');
      $this->select('if $goods_type_selected > 0');
      $this->select('foreach from=$goods_attributes item=item');
      $this->select('if $item.type eq 1');
      <tr>
        <td>$this->select('$item.attr');：</td>
        <td colspan="3"><input name="attr[$this->select('$item.id');]" value="$this->select('$item.value');" class="inputBg" type="text" size="20" maxlength="120" /></td>
      </tr>
      $this->select('/if');
      $this->select('if $item.type eq 2');
      <tr>
        <td>$this->select('$item.attr');：</td>
        <td colspan="3"><input name="attr[$this->select('$item.id');][from]" class="inputBg" value="$this->select('$item.value.from');" type="text" size="5" maxlength="5" />
          -
          <input name="attr[$this->select('$item.id');][to]" value="$this->select('$item.value.to');"  class="inputBg" type="text" maxlength="5" /></td>
      </tr>
      $this->select('/if');
      $this->select('if $item.type eq 3');
      <tr>
        <td>$this->select('$item.attr');：</td>
        <td colspan="3"><select name="attr[$this->select('$item.id');]" style="border:1px solid #ccc;">
            <option value="0">$this->select('$lang.all_option');</option>
            $this->select('html_options options=$item.options selected=$item.value');
          </select></td>
      </tr>
      $this->select('/if');
      $this->select('/foreach');
      $this->select('/if');

      $this->select('if $use_storage eq 1');
      <tr>
        <td>&nbsp;</td>
        <td><label for="outstock"><input type="checkbox" name="outstock" value="1" id="outstock" $this->select('if $outstock');checked="checked"$this->select('/if');/> $this->select('$lang.hidden_outstock');</label>
        </td>
      </tr>
      $this->select('/if');

      <tr>
        <td colspan="4" align="center"><input type="hidden" name="action" value="form" />
          <input type="submit" name="Submit" class="bnt_blue_1" value="$this->select('$lang.button_search');" /></td>
      </tr>
    </table>
  </form>
    </div>
   </div>
  </div>
  <div class="blank5"></div>
  $this->select('/if');

   $this->select('if isset($goods_list)');
     <div class="box">
     <div class="box_1">
      <h3>
    
        $this->select('if $intromode eq 'best'');
         <span>$this->select('$lang.best_goods');</span>
         $this->select('elseif $intromode eq 'new'');
         <span>$this->select('$lang.new_goods');</span>
         $this->select('elseif $intromode eq 'hot'');
         <span>$this->select('$lang.hot_goods');</span>
         $this->select('elseif $intromode eq 'promotion'');
         <span>$this->select('$lang.promotion_goods');</span>
         $this->select('else');
         <span>$this->select('$lang.search_result');</span>
         $this->select('/if');
          $this->select('if $goods_list');
          <form action="search.php" method="post" class="sort" name="listform" id="form">
          $this->select('$lang.btn_display');：
          <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="themes/default/images/display_mode_list$this->select('if $pager.display == 'list'');_act$this->select('/if');.gif" alt="$this->select('$lang.display.list');"></a>
          <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/default/images/display_mode_grid$this->select('if $pager.display == 'grid'');_act$this->select('/if');.gif" alt="$this->select('$lang.display.grid');"></a>
          <a href="javascript:;" onClick="javascript:display_mode('text')"><img src="themes/default/images/display_mode_text$this->select('if $pager.display == 'text'');_act$this->select('/if');.gif" alt="$this->select('$lang.display.text');"></a>&nbsp;&nbsp;
              <select name="sort">
              $this->select('html_options options=$lang.sort selected=$pager.search.sort');
              </select>
              <select name="order">
              $this->select('html_options options=$lang.order selected=$pager.search.order');
              </select>
              <input type="image" name="imageField" src="themes/default/images/bnt_go.gif" alt="go"/>
              <input type="hidden" name="page" value="$this->select('$pager.page');" />
              <input type="hidden" name="display" value="$this->select('$pager.display');" id="display" />
              $this->select('foreach from=$pager.search key=key item=item');
              $this->select('if $key neq "sort" and $key neq "order"');
                $this->select('if $key eq 'keywords'');
                  <input type="hidden" name="$this->select('$key');" value="$this->select('$item|escape:decode_url');" />
                $this->select('else');
                  <input type="hidden" name="$this->select('$key');" value="$this->select('$item');" />
                $this->select('/if');
              $this->select('/if');
              $this->select('/foreach');
            </form>
          $this->select('/if');
           </h3>
        $this->select('if $goods_list');

          <form action="compare.php" method="post" name="compareForm" id="compareForm" onsubmit="return compareGoods(this);">
          $this->select('if $pager.display == 'list'');
              <div class="goodsList">
                $this->select('foreach name=goods_list from=$goods_list item=goods');
                $this->select('if $goods.goods_id');
                <ul class="clearfix bgcolor"$this->select('if $smarty.foreach.goods_list.index mod 2 eq 0');id=""$this->select('else');id="bgcolor"$this->select('/if');>
                <li>
                <br>
                <a href="javascript:;" id="compareLink" onClick="Compare.add($this->select('$goods.goods_id');,'$this->select('$goods.goods_name|escape:"quotes"');','$this->select('$goods.type');')" class="f6">$this->select('$lang.compare');</a>
                </li>
                <li class="thumb"><a href="$this->select('$goods.url');"><img src="$this->select('$goods.goods_thumb');" alt="$this->select('$goods.goods_name');" /></a></li>
                <li class="goodsName">
                <a href="$this->select('$goods.url');" class="f6">
                    $this->select('if $goods.goods_style_name');
                    $this->select('$goods.goods_style_name');<br />
                    $this->select('else');
                    $this->select('$goods.goods_name');<br />
                    $this->select('/if');
                  </a>
                 $this->select('if $goods.goods_brief');
                $this->select('$lang.goods_brief');$this->select('$goods.goods_brief');<br />
                $this->select('/if');
                </li>
                <li>
                $this->select('if $show_marketprice');
                $this->select('$lang.market_price');<font class="market">$this->select('$goods.market_price');</font><br />
                $this->select('/if');
                $this->select('if $goods.promote_price neq "" ');
                $this->select('$lang.promote_price');<font class="shop">$this->select('$goods.promote_price');</font><br />
                $this->select('else');
                $this->select('$lang.shop_price');<font class="shop">$this->select('$goods.shop_price');</font><br />
                $this->select('/if');
                </li>
                <li class="action">
                <a href="javascript:collect($this->select('$goods.goods_id'););" class="abg f6">$this->select('$lang.favourable_goods');</a>
                <a href="javascript:addToCart($this->select('$goods.goods_id');)"><img src="themes/default/images/bnt_buy_1.gif"></a>
                </li>
                </ul>
                $this->select('/if');
                $this->select('/foreach');
                </div>
             $this->select('elseif $pager.display == 'grid'');
              <div class="centerPadd">
                <div class="clearfix goodsBox" style="border:none;">
                $this->select('foreach from=$goods_list item=goods');
                $this->select('if $goods.goods_id');
                 <div class="goodsItem">
                       <a href="$this->select('$goods.url');"><img src="$this->select('$goods.goods_thumb');" alt="$this->select('$goods.goods_name');" class="goodsimg" /></a><br />
                       <p><a href="$this->select('$goods.url');" title="$this->select('$goods.name|escape:html');">$this->select('$goods.goods_name');</a></p>
                       $this->select('if $show_marketprice');
                        $this->select('$lang.market_prices');<font class="market_s">$this->select('$goods.market_price');</font><br />
                        $this->select('/if');
                        $this->select('if $goods.promote_price neq "" ');
                        $this->select('$lang.promote_price');<font class="shop_s">$this->select('$goods.promote_price');</font><br />
                        $this->select('else');
                        $this->select('$lang.shop_prices');<font class="shop_s">$this->select('$goods.shop_price');</font><br />
                        $this->select('/if');
                       <a href="javascript:collect($this->select('$goods.goods_id'););" class="f6">$this->select('$lang.btn_collect');</a> |
                       <a href="javascript:addToCart($this->select('$goods.goods_id');)" class="f6">$this->select('$lang.btn_buy');</a> |
                       <a href="javascript:;" id="compareLink" onClick="Compare.add($this->select('$goods.goods_id');,'$this->select('$goods.goods_name|escape:"quotes"');','$this->select('$goods.type');')" class="f6">$this->select('$lang.compare');</a>
                    </div>
                $this->select('/if');
                $this->select('/foreach');
                </div>
                </div>
             $this->select('elseif $pager.display == 'text'');
              <div class="goodsList">
              $this->select('foreach from=$goods_list item=goods');
               <ul class="clearfix bgcolor"$this->select('if $smarty.foreach.goods_list.index mod 2 eq 0');id=""$this->select('else');id="bgcolor"$this->select('/if');>
              <li style="margin-right:15px;">
              <a href="javascript:;" id="compareLink" onClick="Compare.add($this->select('$goods.goods_id');,'$this->select('$goods.goods_name|escape:"quotes"');','$this->select('$goods.type');')" class="f6">$this->select('$lang.compare');</a>
              </li>
              <li class="goodsName">
              <a href="$this->select('$goods.url');" class="f6 f5">
                  $this->select('if $goods.goods_style_name');
                  $this->select('$goods.goods_style_name');<br />
                  $this->select('else');
                  $this->select('$goods.goods_name');<br />
                  $this->select('/if');
                </a>
               $this->select('if $goods.goods_brief');
              $this->select('$lang.goods_brief');$this->select('$goods.goods_brief');<br />
              $this->select('/if');
              </li>
              <li>
              $this->select('if $show_marketprice');
              $this->select('$lang.market_price');<font class="market">$this->select('$goods.market_price');</font><br />
              $this->select('/if');
              $this->select('if $goods.promote_price neq "" ');
              $this->select('$lang.promote_price');<font class="shop">$this->select('$goods.promote_price');</font><br />
              $this->select('else');
              $this->select('$lang.shop_price');<font class="shop">$this->select('$goods.shop_price');</font><br />
              $this->select('/if');
              </li>
              <li class="action">
              <a href="javascript:collect($this->select('$goods.goods_id'););" class="abg f6">$this->select('$lang.favourable_goods');</a>
              <a href="javascript:addToCart($this->select('$goods.goods_id');)"><img src="themes/default/images/bnt_buy_1.gif"></a>
              </li>
              </ul>
              $this->select('/foreach');
              </div>
             $this->select('/if');
          </form>
          <script type="text/javascript">
        $this->select('foreach from=$lang.compare_js item=item key=key');
        var $this->select('$key'); = "$this->select('$item');";
        $this->select('/foreach');

                                $this->select('foreach from=$lang.compare_js item=item key=key');
        $this->select('if $key neq 'button_compare'');
        var $this->select('$key'); = "$this->select('$item');";
        $this->select('else');
        var button_compare = '';
        $this->select('/if');
        $this->select('/foreach');


        var compare_no_goods = "$this->select('$lang.compare_no_goods');";
        window.onload = function()
        {
          Compare.init();
          fixpng();
        }
        var btn_buy = "$this->select('$lang.btn_buy');";
        var is_cancel = "$this->select('$lang.is_cancel');";
        var select_spe = "$this->select('$lang.select_spe');";
        </script>
        $this->select('else');
        <div style="padding:20px 0px; text-align:center" class="f5" >$this->select('$lang.no_search_result');</div>
        $this->select('/if');
        </div>
      </div>
      <div class="blank"></div>
      $this->select('include file=library/pages.lbi');
   $this->select('/if');

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
