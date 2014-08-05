<?php
// created: 2013-06-11 10:17:51
$viewdefs['Contracts']['EditView'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'javascript' => '<script type="text/javascript" language="javascript">
	function setvalue(source)  {ldelim} 
		src= new String(source.value);
		target=new String(source.form.name.value);

		if (target.length == 0)  {ldelim} 
			lastindex=src.lastIndexOf("\\"");
			if (lastindex == -1)  {ldelim} 
				lastindex=src.lastIndexOf("\\\\\\"");
			 {rdelim}  
			if (lastindex == -1)  {ldelim} 
				source.form.name.value=src;
				source.form.escaped_name.value = src;
			 {rdelim}  else  {ldelim} 
				source.form.name.value=src.substr(++lastindex, src.length);
				source.form.escaped_name.value = src.substr(lastindex, src.length);
			 {rdelim} 	
		 {rdelim} 			
	 {rdelim} 

	function set_expiration_notice_values(form)  {ldelim} 
		if (form.expiration_notice_flag.checked)  {ldelim} 
			form.expiration_notice_flag.value = "on";
			form.expiration_notice_date.value = "";
			form.expiration_notice_time.value = "";
			form.expiration_notice_date.readonly = true;
			form.expiration_notice_time.readonly = true;
			if(typeof(form.due_meridiem) != \'undefined\')  {ldelim} 
				form.due_meridiem.disabled = true;
			 {rdelim} 
			
		 {rdelim}  else  {ldelim} 
			form.expiration_notice_flag.value="off";
			form.expiration_notice_date.readOnly = false;
			form.expiration_notice_time.readOnly = false;
			
			if(typeof(form.due_meridiem) != \'undefined\')  {ldelim} 
				form.due_meridiem.disabled = false;
			 {rdelim} 
			
		 {rdelim} 
	 {rdelim} 
</script>',
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_CONTRACT_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EDITVIEW_PANEL1' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'syncDetailEditViews' => false,
  ),
  'panels' => 
  array (
    'lbl_contract_information' => 
    array (
      0 => 
      array (
        0 => 'account_name',
        1 => 'status',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'type' => 'EnumContratName',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'company_signed_date',
          'displayParams' => 
          array (
            'showFormats' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'signataire_c',
          'studio' => 'visible',
          'label' => 'LBL_SIGNATAIRE_C',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'start_date',
          'displayParams' => 
          array (
            'showFormats' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'end_date',
          'displayParams' => 
          array (
            'showFormats' => true,
          ),
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'customer_signed_date',
          'displayParams' => 
          array (
            'showFormats' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'autorisation_loi_c',
          'label' => 'LBL_AUTORISATION_LOI_C',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'souscription_c',
          'studio' => 'visible',
          'label' => 'LBL_SOUSCRIPTION_C',
        ),
        1 => 
        array (
          'name' => 'description',
        ),
      ),
    ),
    'lbl_editview_panel1' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'team_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
      ),
    ),
  ),
);