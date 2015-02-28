$this->select('if $promotion_info');

<div class="box">
 <div class="box_1">
  <h3><span>$this->select('$lang.promotion_info');</span></h3>
  <div class="boxCenterList RelaArticle">
    $this->select('foreach from=$promotion_info item=item key=key');
    $this->select('if $item.type eq "snatch"');
    <a href="snatch.php" title="$this->select('$lang.$item.type');">$this->select('$lang.snatch_promotion');</a>
    $this->select('elseif $item.type eq "group_buy"');
    <a href="group_buy.php" title="$this->select('$lang.$item.type');">$this->select('$lang.group_promotion');</a>
    $this->select('elseif $item.type eq "auction"');
    <a href="auction.php" title="$this->select('$lang.$item.type');">$this->select('$lang.auction_promotion');</a>
    $this->select('elseif $item.type eq "favourable"');
    <a href="activity.php" title="$this->select('$lang.$item.type');">$this->select('$lang.favourable_promotion');</a>
    $this->select('elseif $item.type eq "package"');
    <a href="package.php" title="$this->select('$lang.$item.type');">$this->select('$lang.package_promotion');</a>
    $this->select('/if');
    <a href="$this->select('$item.url');" title="$this->select('$lang.$item.type'); $this->select('$item.act_name');$this->select('$item.time');" style="background:none; padding-left:0px;">$this->select('$item.act_name');</a><br />
    $this->select('/foreach');
  </div>
 </div>
</div>
<div class="blank5"></div>
$this->select('/if');