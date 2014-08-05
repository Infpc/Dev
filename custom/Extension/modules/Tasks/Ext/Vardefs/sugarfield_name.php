<?php
 // created: 2013-06-26 11:56:56
$dictionary['Task']['fields']['name']['importable']='false';
$dictionary['Task']['fields']['name']['merge_filter']='disabled';
$dictionary['Task']['fields']['name']['unified_search']=false;
$dictionary['Task']['fields']['name']['calculated']='true';
$dictionary['Task']['fields']['name']['formula']='getDropdownValue("tasks_subject_list",$tasks_subject_c)';
$dictionary['Task']['fields']['name']['enforced']=true;

 ?>