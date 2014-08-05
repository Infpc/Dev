<?php

class verifAccessAccount {
    
    function verifAccessAccount(&$bean, $event, $arguments){
		
		if($bean->already_deleted_c == 1)
		{
			$query = "select accounts_cstm.id_c from accounts join accounts_cstm on accounts.id = accounts_cstm.id_c where accounts_cstm.id_infpc_c = '". $bean->id_infpc_c ."' and accounts_cstm.id_infpc_c != '' and accounts.deleted = 1";
			$result = $bean->db->query($query, true);

			while ($row = sqlsrv_fetch_object($result)) 
			{
				$GLOBALS['log']->fatal('rowsss');
				$query = "update accounts set ";
				$query .= "name = '". str_replace("'", "&#039;", $bean->name) ."', ";
				$query .= "phone_fax = '". str_replace("'", "&#039;", $bean->phone_fax) ."', ";
				$query .= "billing_address_street = '". str_replace("'", "&#039;", $bean->billing_address_street) ."', ";
				$query .= "billing_address_city = '". str_replace("'", "&#039;", $bean->billing_address_city) ."', ";
				$query .= "billing_address_postalcode = '". str_replace("'", "&#039;", $bean->billing_address_postalcode) ."', ";
				$query .= "description = '". str_replace("'", "&#039;", $bean->description) ."', ";
				$query .= "phone_office = '". str_replace("'", "&#039;", $bean->phone_office) ."', ";
				$query .= "phone_alternate = '". str_replace("'", "&#039;", $bean->phone_alternate) ."', ";
				$query .= "website = '". str_replace("'", "&#039;", $bean->website) ."', ";
				$query .= "shipping_address_city = '". str_replace("'", "&#039;", $bean->shipping_address_city) ."', ";
				$query .= "shipping_address_postalcode = '". str_replace("'", "&#039;", $bean->shipping_address_postalcode) ."', ";
				$query .= "shipping_address_street = '". str_replace("'", "&#039;", $bean->shipping_address_street) ."', ";
				$query .= "team_id = '". $bean->team_id ."' ";
				$query .= "where id = '". $row->id_c ."'";
				$result2 = $bean->db->query($query, true);
		
				$query = "select email_address_id from email_addr_bean_rel where bean_id = '". $row->id_c ."' and bean_module = 'Accounts' and primary_address = 1";
				$result3 = $bean->db->query($query, true);
				$GLOBALS['log']->fatal($query);
		
				while ($row3 = sqlsrv_fetch_object($result3)) 
				{
					$query = "update email_addresses set ";
					$query .= "email_address = '". str_replace("'", "&#039;", $bean->email1) ."', ";
					$query .= "email_address_caps = '". strtoupper(str_replace("'", "&#039;", $bean->email1)) ."' ";
					$query .= "where id = '". $row3->email_address_id ."'";
					$result4 = $bean->db->query($query, true);
				}
				
				$query = "update accounts_cstm set ";
				$query .= "groupe_nace_c = '". str_replace("'", "&#039;", $bean->groupe_nace_c) ."', ";
				$query .= "code_nace_c = '". str_replace("'", "&#039;", $bean->code_nace_c) ."', ";
				$query .= "bloque_c = '". str_replace("'", "&#039;", $bean->bloque_c) ."', ";
				$query .= "iban_c = '". str_replace("'", "&#039;", $bean->iban_c) ."', ";
				$query .= "raison_social_c = '". str_replace("'", "&#039;", $bean->raison_social_c) ."', ";
				$query .= "matricule_c = '". str_replace("'", "&#039;", $bean->matricule_c) ."', ";
				$query .= "code_banque_c = '". str_replace("'", "&#039;", $bean->code_banque_c) ."', ";
				$query .= "numero_of_s_c = '". str_replace("'", "&#039;", $bean->numero_of_s_c) ."', ";
				$query .= "date_of_c = '". str_replace("'", "&#039;", $bean->date_of_c) ."', ";
				$query .= "is_assujeti_tva_c = '". str_replace("'", "&#039;", $bean->is_assujeti_tva_c) ."', ";
				$query .= "participe_a_la_loi_c = '". str_replace("'", "&#039;", $bean->participe_a_la_loi_c) ."', ";
				$query .= "nb_dossiers_c = '". str_replace("'", "&#039;", $bean->nb_dossiers_c) ."', ";
				$query .= "date_premier_dossier_str_c = '". str_replace("'", "&#039;", $bean->date_premier_dossier_str_c) ."', ";
				$query .= "date_dernier_dossier_s_c = '". str_replace("'", "&#039;", $bean->date_dernier_dossier_s_c) ."', ";
				$query .= "type_premier_dossier_c = '". str_replace("'", "&#039;", $bean->type_premier_dossier_c) ."', ";
				$query .= "effectif_homme_c = '". str_replace("'", "&#039;", $bean->effectif_homme_c) ."', ";
				$query .= "effectif_femmes_c = '". str_replace("'", "&#039;", $bean->effectif_femmes_c) ."', ";
				$query .= "effectif_dir_homme_c = '". str_replace("'", "&#039;", $bean->effectif_dir_homme_c) ."', ";
				$query .= "effectif_dir_femmes_c = '". str_replace("'", "&#039;", $bean->effectif_dir_femmes_c) ."', ";
				$query .= "effectif_cadres_homme_c = '". str_replace("'", "&#039;", $bean->effectif_cadres_homme_c) ."', ";
				$query .= "effectif_cadres_femmes_c = '". str_replace("'", "&#039;", $bean->effectif_cadres_femmes_c) ."', ";
				$query .= "effectif_sal_qualif_hommes_c = '". str_replace("'", "&#039;", $bean->effectif_sal_qualif_hommes_c) ."', ";
				$query .= "effectif_sal_nqualif_hommes_c = '". str_replace("'", "&#039;", $bean->effectif_sal_nqualif_hommes_c) ."', ";
				$query .= "effectif_sal_nqualif_femmes_c = '". str_replace("'", "&#039;", $bean->effectif_sal_nqualif_femmes_c) ."', ";
				$query .= "effectif_sup45_hommes_c = '". str_replace("'", "&#039;", $bean->effectif_sup45_hommes_c) ."', ";
				$query .= "effectif_sup45_femmes_c = '". str_replace("'", "&#039;", $bean->effectif_sup45_femmes_c) ."', ";
				$query .= "masse_salariale_c = ";

				if($bean->masse_salariale_c)
					$query .= str_replace("'", "&#039;", $bean->masse_salariale_c) .", ";
				else
					$query .= "0, ";
					
				$query .= "date_modified_access_c = convert(datetime, '". str_replace("'", "&#039;", $bean->date_modified_access_c) ."', 120), ";
				$query .= "is_offreur_de_formation_c = '". str_replace("'", "&#039;", $bean->is_offreur_de_formation_c) ."', ";
				$query .= "employees_c = '". str_replace("'", "&#039;", $bean->employees_c) ."', ";
				$query .= "name_2_c = '". str_replace("'", "&#039;", $bean->name_2_c) ."' ";
				$query .= "where id_c = '". $row->id_c ."'";
				$result5 = $bean->db->query($query, true);
			}
		}
    }
}
?>
