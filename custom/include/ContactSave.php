<?php

class ContactSave {
    
    function ContactSave(&$bean, $event, $arguments){
		$query = "select id from (select id from tdr_type where id not in (select tdr_type_contactstdr_type_idb from tdr_type_contacts_c where deleted = 0) and deleted = 0) as ContactSave";
		$result = $bean->db->query($query, true);
		
		while ($row = sqlsrv_fetch_object($result)) 
		{
			$v = new tdr_type();
			$v->retrieve($row->id);
			$v->mark_deleted($v->id);
		}
    }
}
?>
