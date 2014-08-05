<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'verfiy access contact', 'custom/include/verifAccessContact.php','verifAccessContact', 'verifAccessContact'); 
$hook_array['before_save'][] = Array(2, 'Contacts push feed', 'modules/Contacts/SugarFeeds/ContactFeed.php','ContactFeed', 'pushFeed'); 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'suppress contact', 'custom/include/alreadyDeletedContacts.php','alreadyDeletedContacts', 'alreadyDeletedContacts'); 
$hook_array['after_delete'] = Array(); 
$hook_array['after_delete'][] = Array(1, 'ContactSave', 'custom/include/ContactSave.php','ContactSave', 'ContactSave'); 



?>