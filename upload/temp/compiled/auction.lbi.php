$this->select('if $auction_list');
<div class="box">
 <div class="box_1">
  <h3><span>$this->select('$lang.auction_goods');</span><a href="auction.php"><img src="themes/default/images/more.gif"></a></h3>
    <div class="centerPadd">
    <div class="clearfix goodsBox" style="border:none;">
      $this->select('foreach from=$auction_list item=auction');
      <div class="goodsItem">
           <a href="$this->select('$auction.url');"><img src="$this->select('$auction.thumb');" alt="$this->select('$auction.goods_name|escape:html');" class="goodsimg" /></a><br />
           <p><a href="$this->select('$auction.url');" title="$this->select('$auction.goods_name|escape:html');">$this->select('$auction.short_style_name|escape:html');</a></p>
           <font class="shop_s">$this->select('$auction.formated_start_price');</font>
        </div>
      $this->select('/foreach');
    </div>
    </div>
 </div>
</div>
<div class="blank5"></div>
$this->select('/if');