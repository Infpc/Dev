<?php
 // created: 2013-06-07 08:31:39
$dictionary['Contract']['fields']['end_date']['comments']='The date in which the contract is no longer effective';
$dictionary['Contract']['fields']['end_date']['importable']='false';
$dictionary['Contract']['fields']['end_date']['merge_filter']='disabled';
$dictionary['Contract']['fields']['end_date']['calculated']='1';
$dictionary['Contract']['fields']['end_date']['formula']='nextMonthStartDate($company_signed_date,1)';
$dictionary['Contract']['fields']['end_date']['enforced']=true;

 ?>