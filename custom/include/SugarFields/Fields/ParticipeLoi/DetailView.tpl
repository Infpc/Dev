{*
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

*}

	<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%" style="margin-top:22px">
		<tr>
			<td valign="top" id="code_banque_c_label" width='25%' scope='row' >
				<label for='code_banque_c'>Code Banque:</label>
			</td>
			<td width="*">
				{php} echo $this->_tpl_vars['fields']['code_banque_c']['value'] {/php}
			</td>
		</tr>
		<tr>
			<td valign="top" id="iban_c_label" width='25%' scope='row' >
				<label for='iban_c'> IBAN:</label>
			</td>
			<td width="*">
				{php} echo $this->_tpl_vars['fields']['iban_c']['value'] {/php}
			</td>
		</tr>
		<tr>
			<td valign="top" id="matricule_c_label" width='25%' scope='row' >
				<label for='matricule_c'>Matricule:</label>
			</td>
			<td width="*">
				{php} echo $this->_tpl_vars['fields']['matricule_c']['value'] {/php}
			</td>
		</tr>
		<tr>
			<td valign="top" id="is_assujeti_tva_c" width='25%' scope='row' >
				<label for='is_assujeti_tva_c'>Assujeti à la TVA:</label>
			</td>
			<td width="*">
                  {php} 
					if($this->_tpl_vars['fields']['is_assujeti_tva_c']['value'] == 'yes') echo 'Oui';
					if($this->_tpl_vars['fields']['is_assujeti_tva_c']['value'] == 'no') echo 'Non';
					if($this->_tpl_vars['fields']['is_assujeti_tva_c']['value'] == 'partial') echo 'Partiellement';
				{/php}
			</td>
		</tr>
	</table>