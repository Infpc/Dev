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

	<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%" style="margin-top:5px">
		<tr>
			<td valign="top" id="code_banque_c_label" width='25%' scope='row' >
				<label for='code_banque_c'>Code Banque:</label>
			</td>
			<td width="*">
				{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
					<select name="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}" 
					id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}" 
					title='{{$vardef.help}}' {{if !empty($tabindex)}} tabindex="{{$tabindex}}" {{/if}}
					{{if !empty($displayParams.accesskey)}} accesskey='{{$displayParams.accesskey}}' {{/if}}  {{$displayParams.field}}
					{{if isset($displayParams.javascript)}}{{$displayParams.javascript}}{{/if}}>

					{if isset({{sugarvar key='value' string=true}}) && {{sugarvar key='value' string=true}} != ''}
						{html_options options={{sugarvar key='options' string=true}} selected={{sugarvar key='value' string=true}}}
					{else}
						{html_options options={{sugarvar key='options' string=true}} selected={{sugarvar key='default' string=true}}}
					{/if}
					</select>
				{else}
					{assign var="field_options" value={{sugarvar key='options' string="true"}} }
					{capture name="field_val"}{{sugarvar key='value'}}{/capture}
					{assign var="field_val" value=$smarty.capture.field_val}
					{capture name="ac_key"}{{sugarvar key='name'}}{/capture}
					{assign var="ac_key" value=$smarty.capture.ac_key}

					{{if empty($vardef.autocomplete_ajax)}}
						<select style='display:none' name="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}" 
						id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}" 
						title='{{$vardef.help}}' {{if !empty($tabindex)}} tabindex="{{$tabindex}}" {{/if}}
						{{if !empty($displayParams.accesskey)}} accesskey='{{$displayParams.accesskey}}' {{/if}} {{$displayParams.field}}
						{{if isset($displayParams.javascript)}}{{$displayParams.javascript}}{{/if}}>

						{if isset({{sugarvar key='value' string=true}}) && {{sugarvar key='value' string=true}} != ''}
							{html_options options={{sugarvar key='options' string=true}} selected={{sugarvar key='value' string=true}}}
						{else}
							{html_options options={{sugarvar key='options' string=true}} selected={{sugarvar key='default' string=true}}}
						{/if}
						</select>
					{{else}}
						<input type="hidden"
							id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}"
							name="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}"
							value="{{sugarvar key='value'}}">
					{{/if}}

					<input
						id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}-input"
						name="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}-input"
						size="30"
						value="{$field_val|lookup:$field_options}"
						type="text" style="vertical-align: top;">

						
					<span class="id-ff multiple">
						<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}-image"></button><button type="button"
							id="btn-clear-{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}-input"
							title="Clear"
							onclick="SUGAR.clearRelateField(this.form, '{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}-input', '{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}');sync_{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
					</span>

					{literal}
					<script>
					SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
					{/literal}

					{{if empty($vardef.autocomplete_ajax)}}
						{literal}
						(function (){
							var selectElem = document.getElementById("{/literal}{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}{literal}");
							
							if (typeof select_defaults =="undefined")
								select_defaults = [];
							
							select_defaults[selectElem.id] = {key:selectElem.value,text:''};

							//get default
							for (i=0;i<selectElem.options.length;i++){
								if (selectElem.options[i].value==selectElem.value)
									select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
							}

							//SUGAR.AutoComplete.{$ac_key}.ds = 
							//get options array from vardefs
							var options = SUGAR.AutoComplete.getOptionsArray("{{$vardef.autocomplete_options}}");

							YUI().use('datasource', 'datasource-jsonschema',function (Y) {
								SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
									source: function (request) {
										var ret = [];
										for (i=0;i<selectElem.options.length;i++)
											if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
												ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
										return ret;
									}
								});
							});
						})();
						{/literal}
					{{else}}
						{literal}
						// Create a new YUI instance and populate it with the required modules.
						YUI().use('datasource', 'datasource-jsonschema',function (Y) {
							// DataSource is available and ready for use.
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Get({
								source: 'index.php?module=Accounts&action=ajaxautocomplete&to_pdf=1'
							});
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds.plug(Y.Plugin.DataSourceJSONSchema, {
								schema: {
									resultListLocator: "option_items",
									resultFields: ["text", "key"],
									matchKey: "text",
								}
							});
						});
						{/literal}
					{{/if}}

					{literal}
						YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
					{/literal}
							
					SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}-input');
					SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}-image');
					SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}');
					
					{{if empty($vardef.autocomplete_ajax)}}
						{literal}
							function SyncToHidden(selectme){
								var selectElem = document.getElementById("{/literal}{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}{literal}");
								var doSimulateChange = false;
								
								if (selectElem.value!=selectme)
									doSimulateChange=true;
								
								selectElem.value=selectme;

								for (i=0;i<selectElem.options.length;i++){
									selectElem.options[i].selected=false;
									if (selectElem.options[i].value==selectme)
										selectElem.options[i].selected=true;
								}

								if (doSimulateChange)
									SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
							}

							//global variable 
							sync_{/literal}{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}{literal} = function(){
								SyncToHidden();
							}
							function syncFromHiddenToWidget(){

								var selectElem = document.getElementById("{/literal}{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}{literal}");

								//if select no longer on page, kill timer
								if (selectElem==null || selectElem.options == null)
									return;

								var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

								SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

								for (i=0;i<selectElem.options.length;i++){

									if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}-input{literal}'))
										SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
								}
							}

							YAHOO.util.Event.onAvailable("{/literal}{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}{literal}", syncFromHiddenToWidget);
						{/literal}

						SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
						SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
						SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
						if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
							{/literal}
							SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
							SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
							{literal}
						}
						{/literal}
						if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
							{/literal}
							SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
							SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
							{literal}
						}
						{/literal}
					{{else}}
						{literal}
						function SyncToHidden(e){
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', e);
						}
						{/literal}
						
						SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
						SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
					{{/if}}
					
					SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
					
					{literal}
					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
						activateFirstItem: true,
						{/literal}
						minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
						queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
						zIndex: 99999,

						{{if !empty($vardef.autocomplete_ajax)}}
								requestTemplate: '&options={{$vardef.autocomplete_options}}&q={literal}{query}{/literal}',
						{{/if}}
						
						{literal}
						source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
						
						resultTextLocator: 'text',
						resultHighlighter: 'phraseMatch',
						resultFilters: 'phraseMatch',
					});

					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
						var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
						if(hover[0] != null){
							if (ex) {
								var h = '1000px';
								hover[0].style.height = h;
							}
							else{
								hover[0].style.height = '';
							}
						}
					}
						
					if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
						// expand the dropdown options upon focus
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
						});
					}

					{{if empty($vardef.autocomplete_ajax)}}
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
						});
						
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
						});

						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
						});

						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
						});

						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
						});

						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
							var selectElem = document.getElementById("{/literal}{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}{literal}");
							//if typed value is a valid option, do nothing
							for (i=0;i<selectElem.options.length;i++)
								if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
									return;
							
							//typed value is invalid, so set the text and the hidden to blank
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
							SyncToHidden(select_defaults[selectElem.id].key);
						});
					{{else}}		
						// when they focus away from the field...
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
							if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value') != '') { // value entered
								if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.get('value') == '') { // none selected, we clear their text and hide
									SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', '');
								}
								else{ // they have something selected, we accept their selection and contract
								}
							}
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
						});
					{{/if}}

					// when they click on the arrow image, toggle the visibility of the options
					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
						if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
						} else {
							SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
						}
					});

					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
					});

					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
					});

					// when they select an option, set the hidden input with the KEY, to be saved
					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
						SyncToHidden(e.result.raw.key);
					});
				 
				});
				</script> 

				{/literal}

				{/if}
			</td>
		</tr>
		<tr>
			<td valign="top" id="iban_c_label" width='25%' scope='row' >
				<label for='iban_c'> IBAN:</label>
			</td>
			<td width="*">
				<input type='text' name='iban_c' 
    id='iban_c' size='30' maxlength='255' value='{php} echo $this->_tpl_vars['fields']['iban_c']['value'] {/php}'>
			</td>
		</tr>
		<tr>
			<td valign="top" id="matricule_c_label" width='25%' scope='row' >
				<label for='matricule_c'>Matricule:</label>
			</td>
			<td width="*">
				<input type='text' name='matricule_c' 
    id='matricule_c' size='30' maxlength='255' value='{php} echo $this->_tpl_vars['fields']['matricule_c']['value'] {/php}'>
			</td>
		</tr>
		<tr>
			<td valign="top" id='is_assujeti_tva_c_label' width='12.5%' scope="col">
				Assujeti à la TVA:
			</td>
			<td valign="top" width='37.5%'>
				<select name="is_assujeti_tva_c" id="is_assujeti_tva_c" title=''>
					<option label="Oui" value="yes" {php} if($this->_tpl_vars['fields']['is_assujeti_tva_c']['value'] == 'yes') echo 'selected="selected"'; {/php}>Oui</option>
					<option label="Non" value="no" {php} if($this->_tpl_vars['fields']['is_assujeti_tva_c']['value'] == 'no') echo 'selected="selected"'; {/php}>Non</option>
					<option label="Partiellement" value="partial" {php} if($this->_tpl_vars['fields']['is_assujeti_tva_c']['value'] == 'partial') echo 'selected="selected"'; {/php}>Partiellement</option>
				</select>
			</td>
		</tr>
	</table>
	{* Modification du stagiaire le 24 Juillet 2014 *}
	{literal}
		<script>
			$(document).ready(function() {
				participeALaLoi = document.getElementById("participe_a_la_loi_c");
				participeALaLoi.disabled = true;
				participeALaLoi.setAttribute("title", "Cet attribut est directement importé de la DB Cofinancement");
				
				idChamps = [
					"name", 
					"raison_social_c", 
					"groupe_nace_c",
					"billing_address_street", 
					"billing_address_postalcode", 
					"billing_address_city", 
					"billing_address_country", 
					"shipping_address_street", 
					"shipping_address_postalcode", 
					"shipping_address_city", 
					"shipping_address_country",					
					"name_2_c", 
					"code_nace_c", 
					"code_banque_c", 
					"iban_c", 
					"matricule_c", 
					"is_assujeti_tva_c", 
					"employees_c", 
					"phone_office", 
					"phone_fax", 
					"phone_alternate", 
					"website"
				];
					
				if(participeALaLoi.checked){
					$("input, textarea, select").each(function() {
					console.log($(this));
						for( var i in idChamps ) {
							if($(this).attr("id") == idChamps[i]) {
								$(this).attr('disabled','disabled');
								$(this).attr('title', "Ce champ est rempli depuis la DB Cofinancement");
								$(this).css( 'background-color', "#E6E6E6" );
								$(this).css( 'color', "#000000" );								
							}
						}
					});
				}
				
			//TEST 30 Juillet 2014
			jQuery(function($){
			   $("#phone_office").mask("+9 9 9 9 9", {'translation': {9: {pattern: /\d{2,3}/}}});
			});	
			});
		</script>
	{/literal}
	{* Fin de modification *}
	
