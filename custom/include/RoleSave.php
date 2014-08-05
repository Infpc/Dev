<?php

class RoleSave {
    
    function RoleSave(&$bean, $event, $arguments){
        $bean->retrieve($bean->id);

        $acc = $bean->get_linked_beans('tdr_type_accounts','Accounts');
        $cont = $bean->get_linked_beans("tdr_type_contacts",'Contacts');

        foreach($acc as $a) 
        {
            $a->load_relationship("contacts");
            
            foreach ( $cont as $c) 
                $a->contacts->add($c->id);

            $a->save();
        }
		
		foreach($cont as $c) 
        {
            $c->load_relationship("accounts");
            
            foreach ( $acc as $a) 
                $c->accounts->add($a->id);

            $c->save();
        }
    }
}
?>
