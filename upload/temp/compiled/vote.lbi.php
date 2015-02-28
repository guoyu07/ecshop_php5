$this->select('if $vote');
$this->select('insert_scripts files='transport.js'');

<div id="ECS_VOTE">
<div  class="box">
 <div class="box_1">
  <h3><span>$this->select('$lang.online_vote');</span></h3>
  <div  class="boxCenterList">
    <form id="formvote" name="ECS_VOTEFORM" method="post" action="javascript:submit_vote()">
    $this->select('foreach from=$vote item=title');
     $this->select('$title.vote_name');<br />
     ($this->select('$lang.vote_times');:$this->select('$title.vote_count');)<br />
     $this->select('/foreach');
     $this->select('foreach from=$vote item=title');
          $this->select('foreach from=$title.options item=item');
            $this->select('if $title.can_multi eq 0');
            <input type="checkbox" name="option_id" value="$this->select('$item.option_id');" />
            $this->select('$item.option_name'); ($this->select('$item.percent');%)<br />
            $this->select('else');
            <input type="radio" name="option_id" value="$this->select('$item.option_id');" />
            $this->select('$item.option_name'); ($this->select('$item.percent');%)<br />
            $this->select('/if');
            $this->select('/foreach');
            <input type="hidden" name="type" value="$this->select('$title.can_multi');" />
     $this->select('/foreach');
     <input type="hidden" name="id" value="$this->select('$vote_id');" />
     <input type="submit" name="submit" style="border:none;" value="$this->select('$lang.submit');"  class="bnt_bonus" />
     <input type="reset" style="border:none;" value="$this->select('$lang.reset');" class="bnt_blue" />
     </form>
  </div>
 </div>
</div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
$this->select('literal');
/**
 * 处理用户的投票
 */
function submit_vote()
{
  var frm     = document.forms['ECS_VOTEFORM'];
  var type    = frm.elements['type'].value;
  var vote_id = frm.elements['id'].value;
  var option_id = 0;

  if (frm.elements['option_id'].checked)
  {
    option_id = frm.elements['option_id'].value;
  }
  else
  {
    for (i=0; i<frm.elements['option_id'].length; i++ )
    {
      if (frm.elements['option_id'][i].checked)
      {
        option_id = (type == 0) ? option_id + "," + frm.elements['option_id'][i].value : frm.elements['option_id'][i].value;
      }
    }
  }

  if (option_id == 0)
  {
    return;
  }
  else
  {
    Ajax.call('vote.php', 'vote=' + vote_id + '&options=' + option_id + "&type=" + type, voteResponse, 'POST', 'JSON');
  }
}

/**
 * 处理投票的反馈信息
 */
function voteResponse(result)
{
  if (result.message.length > 0)
  {
    alert(result.message);
  }
  if (result.error == 0)
  {
    var layer = document.getElementById('ECS_VOTE');

    if (layer)
    {
      layer.innerHTML = result.content;
    }
  }
}
$this->select('/literal');
</script>
$this->select('/if');