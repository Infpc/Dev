<?php

class alreadyDeletedAccounts {
    
    function alreadyDeletedAccounts(&$bean, $event, $arguments){

		if($bean->already_deleted_c == 1)
		{
			$query = "delete from accounts where id = '". $bean->id ."'";
			$bean->db->query($query, true);
			
			$query = "delete from accounts_cstm where id_c = '". $bean->id ."'";
			$bean->db->query($query, true);
			
			$query = "select email_address_id from email_addr_bean_rel where bean_id = '". $bean->id ."' and bean_module = 'Accounts'";
			$result = $bean->db->query($query, true);
					
			while ($row = sqlsrv_fetch_object($result)) 
			{
				$query = "delete from email_addresses where id = '". $row->email_address_id ."'";
				$bean->db->query($query, true);
			}
			
			$query = "delete from email_addr_bean_rel where bean_id = '". $bean->id ."' and bean_module = 'Accounts'";
			$bean->db->query($query, true);	
		}
    }
}
?>
