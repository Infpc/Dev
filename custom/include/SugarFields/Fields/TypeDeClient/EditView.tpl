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
<fieldset id='client_fieldset' width="100%">
	<legend>Type de client</legend>
	<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
		<tr>
			<td valign="top" id="participe_a_la_loi_c_label" width='50%' scope='row' >
				<label for='participe_a_la_loi_c'>Participe à la loi:</label>
			</td>
			<td width="*">
				<input type="hidden" name="participe_a_la_loi_c" value="0"> 
				<input type="checkbox" id="participe_a_la_loi_c" name="participe_a_la_loi_c" value="1" tabindex="0" {php} if($this->_tpl_vars['fields']['participe_a_la_loi_c']['value'] == '1') echo 'CHECKED';{/php}>
			</td>
		</tr>
		<tr>
			<td valign="top" id="is_offreur_de_formation_c_label" width='50%' scope='row' >
				<label for='is_offreur_de_formation_c'> Offreur de formation:</label>
			</td>
			<td width="*">
				<input type="hidden" name="is_offreur_de_formation_c" value="0"> 
				<input type="checkbox" id="is_offreur_de_formation_c" name="is_offreur_de_formation_c" value="1" tabindex="0" {php} if($this->_tpl_vars['fields']['is_offreur_de_formation_c']['value'] == '1') echo 'CHECKED';{/php} onchange="showInformations()">
			</td>
		</tr>
		<tr>
			<td valign="top" id="is_adherent_portail_c_label" width='50%' scope='row' >
				<label for='is_adherent_portail_c'>Adhérent portail:</label>
			</td>
			<td width="*">
				<input type="hidden" name="is_adherent_portail_c" value="0"> 
				<input type="checkbox" id="is_adherent_portail_c" name="is_adherent_portail_c" value="1" tabindex="0" {php} if($this->_tpl_vars['fields']['is_adherent_portail_c']['value'] == '1') echo 'CHECKED';{/php}>
			</td>
		</tr>
		<tr>
			<td valign="top" id="is_adherent_repertoire_c_label" width='50%' scope='row' >
				<label for='is_adherent_repertoire_c'>Adhérent répertoire:</label>
			</td>
			<td width="*">
				<input type="hidden" name="is_adherent_repertoire_c" value="0"> 
				<input type="checkbox" id="is_adherent_repertoire_c" name="is_adherent_repertoire_c" value="1" tabindex="0" {php} if($this->_tpl_vars['fields']['is_adherent_repertoire_c']['value'] == '1') echo 'CHECKED';{/php}>
			</td>
		</tr>
	</table>
</fieldset>