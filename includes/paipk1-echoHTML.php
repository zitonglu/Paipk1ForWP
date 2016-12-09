<?php 
/**
 *
 * when PPT submit, make two html
 *
 * @since paipk1 1.0
 *
 * @return /includes/plugin/alltr.html
 * @return /includes/plugin/out.html
 */
if($_POST){
  $rules = array();
  $rule = array();
  $i=0;$Y=-1;
  $li='<div class="item"><a href="-aurl-" target="_blank" title="-pictitle-"><img src="-picurl-" alt="-pictitle-" class="img-cover"></a></div>';
  $tr='<tr><td><input type="checkbox" name="check" /></td><td><input name="picurl-id-" type="text" value="-picurl-" required="required" style="width:100%"></td><td><input name="aurl-id-" type="text" value="-aurl-" required="required" style="width:100%"></td><td><input name="pictitle-id-" type="text" value="-pictitle-" style="width:100%"></td></tr>';
  $curli = '';
  $curtr = '';
  $html = '';
  $alltr = '';
  $one = '';
foreach($_POST as $k=>$v){
  if($i % 3 == 0){
    $rule['picurl'] = (string)$v;
    $curtr = str_replace("-picurl-",$rule["picurl"],$tr);
    $curli = str_replace("-picurl-",$rule["picurl"],$li);
  }
  if($i % 3 == 1){
    $rule['aurl'] = (string)$v;
    $curtr = str_replace("-aurl-",$rule["aurl"],$curtr);
    $curli = str_replace("-aurl-",$rule["aurl"],$curli);
  }
  if($i % 3 == 2){
    $rule['pictitle'] = (string)$v;
    $curtr = str_replace("-pictitle-",$rule["pictitle"],$curtr);
    $curli = str_replace("-pictitle-",$rule["pictitle"],$curli);
    $curtr = str_replace("-id-",$Y,$curtr);
    $Y--;
  if ($one == "") {
    $curli = str_replace("class=\"item\"","class=\"item active\"",$curli);
    $one="end";
  }
  $alltr .= $curtr;
  $html .= $curli;
  $rules[]=json_encode($rule);
  }
  $i++;
}
file_put_contents(TEMPLATEPATH .'/includes/plugin/alltr.html', $alltr);
file_put_contents(TEMPLATEPATH .'/includes/plugin/out.html', $html);
}
?>