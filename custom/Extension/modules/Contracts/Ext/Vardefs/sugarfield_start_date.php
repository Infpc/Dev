<?php
 // created: 2013-06-07 08:31:00
$dictionary['Contract']['fields']['start_date']['comments']='The effective date of the contract';
$dictionary['Contract']['fields']['start_date']['importable']='false';
$dictionary['Contract']['fields']['start_date']['merge_filter']='disabled';
$dictionary['Contract']['fields']['start_date']['calculated']='1';
$dictionary['Contract']['fields']['start_date']['formula']='nextMonthStartDate($company_signed_date,0)';
$dictionary['Contract']['fields']['start_date']['enforced']=true;

 ?>