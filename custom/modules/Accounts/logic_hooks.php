<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'verify access account', 'custom/include/verifAccessAccount.php','verifAccessAccount', 'verifAccessAccount'); 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'suppress account', 'custom/include/alreadyDeletedAccounts.php','alreadyDeletedAccounts', 'alreadyDeletedAccounts'); 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_delete'] = Array(); 
$hook_array['after_delete'][] = Array(1, 'AccountSave', 'custom/include/AccountSave.php','AccountSave', 'AccountSave'); 


?>