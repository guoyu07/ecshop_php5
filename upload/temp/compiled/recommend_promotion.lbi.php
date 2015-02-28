$this->select('if $promotion_goods');
<div id="sales" class="f_l clearfix">
      <h1><a href="search.php?intro=promotion"><img src="themes/default/images/more.gif" /></a></h1>
       <div class="clearfix goodBox">
         $this->select('foreach from=$promotion_goods item=goods name="promotion_foreach"');
         $this->select('if $smarty.foreach.promotion_foreach.index <= 3');
           <div class="goodList">
           <a href="$this->select('$goods.url');"><img src="$this->select('$goods.thumb');" border="0" alt="$this->select('$goods.name|escape:html');"/></a><br />
					 <p><a href="$this->select('$goods.url');" title="$this->select('$goods.name|escape:html');">$this->select('$goods.short_name|escape:html');</a></p>
           $this->select('$lang.promote_price');<font class="f1">$this->select('$goods.promote_price');</font>
           </div>
         $this->select('/if');
         $this->select('/foreach');
       </div>
      </div>
$this->select('/if');