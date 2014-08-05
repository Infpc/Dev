<?php

class verifAccessContact {
    
    function verifAccessContact(&$bean, $event, $arguments){
		//Modification du stagiaire
		echo '<script>alert("Test before_save")</script>';
		//Fin modification
		if($bean->already_deleted_c == 1)
		{
			$query = "select contacts_cstm.id_c from contacts join contacts_cstm on contacts.id = contacts_cstm.id_c where contacts_cstm.id_infpc_c = '". $bean->id_infpc_c ."' and contacts_cstm.id_infpc_c != '' and contacts.deleted = 1";
			$result = $bean->db->query($query, true);

			while ($row = sqlsrv_fetch_object($result)) 
			{
				$query = "update contacts set ";
				$query .= "deleted = '". str_replace("'", "&#039;", $bean->deleted) ."', ";
				$query .= "salutation = '". str_replace("'", "&#039;", $bean->salutation) ."', ";
				$query .= "first_name = '". str_replace("'", "&#039;", $bean->first_name) ."', ";
				$query .= "last_name = '". str_replace("'", "&#039;", $bean->last_name) ."', ";
				$query .= "title = '". str_replace("'", "&#039;", $bean->title) ."', ";
				$query .= "department = '". str_replace("'", "&#039;", $bean->department) ."', ";
				$query .= "phone_work = '". str_replace("'", "&#039;", $bean->phone_work) ."', ";
				$query .= "phone_fax = '". str_replace("'", "&#039;", $bean->phone_fax) ."', ";
				$query .= "primary_address_street = '". str_replace("'", "&#039;", $bean->primary_address_street) ."', ";
				$query .= "primary_address_city = '". str_replace("'", "&#039;", $bean->primary_address_city) ."', ";
				$query .= "primary_address_postalcode = '". str_replace("'", "&#039;", $bean->primary_address_postalcode) ."', ";
				$query .= "team_id = '". str_replace("'", "&#039;", $bean->team_id) ."' ";
				$query .= "where id = '". $row->id_c ."'";
				$result2 = $bean->db->query($query, true);

				$query = "select email_address_id from email_addr_bean_rel where bean_id = '". $row->id_c ."' and bean_module = 'Contacts' and primary_address = 1";
				$result3 = $bean->db->query($query, true);
				
				while ($row3 = sqlsrv_fetch_object($result3)) 
				{
					$query = "update email_addresses set ";
					$query .= "email_address = '". str_replace("'", "&#039;", $bean->email1) ."', ";
					$query .= "email_address_caps = '". strtoupper(str_replace("'", "&#039;", $bean->email1)) ."' ";
					$query .= "where id = '". $row3->email_address_id ."'";
					$result4 = $bean->db->query($query, true);
				}
				
				$query = "update contacts_cstm set ";
				$query .= "is_bloque_c = '". str_replace("'", "&#039;", $bean->is_bloque_c) ."', ";
				$query .= "date_modified_access_c = convert(datetime, '". str_replace("'", "&#039;", $bean->date_modified_access_c) ."', 120) ";
				$query .= "where id_c = '". $row->id_c ."'";
				$result5 = $bean->db->query($query, true);
			}
		}
    }
}
?>
