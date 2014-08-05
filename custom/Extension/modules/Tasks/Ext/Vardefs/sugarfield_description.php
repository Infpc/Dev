<?php
 // created: 2013-06-26 12:22:53
$dictionary['Task']['fields']['description']['comments']='Full text of the note';
$dictionary['Task']['fields']['description']['importable']='false';
$dictionary['Task']['fields']['description']['merge_filter']='disabled';
$dictionary['Task']['fields']['description']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Task']['fields']['description']['calculated']='true';
$dictionary['Task']['fields']['description']['formula']='concat(related($contacts,"name")," ",related($accounts,"name"))';
$dictionary['Task']['fields']['description']['enforced']=true;

 ?>