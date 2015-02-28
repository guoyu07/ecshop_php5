$this->select('if $group_buy_goods');
<div class="box">
 <div class="box_1">
  <h3><span>$this->select('$lang.group_buy_goods');</span><a href="group_buy.php"><img src="themes/default/images/more.gif"></a></h3>
    <div class="centerPadd">
    <div class="clearfix goodsBox" style="border:none;">
      $this->select('foreach from=$group_buy_goods item=goods');
      <div class="goodsItem">
           <a href="$this->select('$goods.url');"><img src="$this->select('$goods.thumb');" alt="$this->select('$goods.goods_name|escape:html');" class="goodsimg" /></a><br />
					 <p><a href="$this->select('$goods.url');" title="$this->select('$goods.goods_name|escape:html');">$this->select('$goods.short_style_name|escape:html');</a></p>
           <font class="shop_s">$this->select('$goods.last_price');</font>
        </div>
      $this->select('/foreach');
    </div>
    </div>
 </div>
</div>
<div class="blank5"></div>
$this->select('/if');