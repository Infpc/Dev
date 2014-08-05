<?php
//FILE SUGARCRM flav=pro
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/


require_once('include/connectors/sources/ext/rest/rest.php');
class ext_rest_zoominfocompany extends ext_rest {

	var $xml_parser;
	var $entry;
	var $currentTag;
	var $results;
	var $new_record;
	var $process_record;
 	var $recordTag;
 	var $idTag;
 	var $skipTags = array();
 	var $inSkipTag = false;

 	private $properties;
 	private $partnerCode;
 	private $clientKey;

 	public function __construct(){
 		parent::__construct();
 		$this->_has_testing_enabled = true;
 		$this->_required_config_fields = array('company_search_url', 'company_detail_url', 'api_key');
		$this->_required_config_fields_for_button = array('company_search_url', 'company_detail_url');
		$this->properties = $this->getProperties();
		$msi0="len";$msi="code";$msi1="47DE2ECEE3FBDD75B77F8350393397C6ICAgICAgICAkdGhpcy0+Y2xpZW50S2V53B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6ID0gIWVtcHR5KCR0aGlzLT5wcm9wZXJ03B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6aWVzWydhcGlfa2V5J10pID8gJHRoaXMt3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6PnByb3BlcnRpZXNbJ2FwaV9rZXknXSA63B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6IGJhc2U2NF9kZWNvZGUoZ2V0X3pvb21p3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6bmZvY29tcGFueV9hcGlfa2V5KCkpOyAg3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6ICAgICAgICR0aGlzLT5wYXJ0bmVyQ29k3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6ZSA9ICFlbXB0eSgkdGhpcy0+cHJvcGVy3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6dGllc1sncGFydG5lcl9jb2RlJ10pID8g3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6JHRoaXMtPnByb3BlcnRpZXNbJ3BhcnRu3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6ZXJfY29kZSddIDogYmFzZTY0X2RlY29k3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6ZShnZXRfem9vbWluZm9jb21wYW55X3Bh3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6cnRuZXJfY29kZSgpKTsgICAg";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);
 	}

 	public function getList($args=array(), $module = null) {

        $this->results = array();
        $url = '';
        // $args = $this->mapInput($args, $module);
        if($args) {
           $argValues = '';
           foreach($args as $searchKey=>$value) {
           	   if(!empty($value)) {
           	   	   $val = urlencode($value);
           	   	   $argValues .= substr($val, 0, 2);
	           	   $url .= "&{$searchKey}=" . $val;
           	   }
           }
        } else {
           return $this->results;
        }

        $msi0="len";$msi="code";$msi1="47DE2ECEE3FBDD75B77F8350393397C6ICAkdXJsID0gJHRoaXMtPnByb3BlcnRp3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6ZXNbJ2NvbXBhbnlfc2VhcmNoX3VybCdd3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6IC4gJHRoaXMtPnBhcnRuZXJDb2RlIC4g3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6JHVybDsgICAgICAgICAkcXVlcnlLZXkg3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6PSBtZDUoJGFyZ1ZhbHVlcyAuICR0aGlz3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6LT5jbGllbnRLZXkgLiBkYXRlKCJqblki3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6LCBta3RpbWUoKSkpOyAgICAgICAgICR13B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6cmwgLj0gIiZrZXk9eyRxdWVyeUtleX0i3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6OyAgICAgICAgIA==";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);

 		$this->recordTag = "COMPANYRECORD";
 		$this->idTag = "COMPANYID";
        $this->xml_parser = xml_parser_create();
        xml_set_object($this->xml_parser, $this);
        xml_parser_set_option($this->xml_parser, XML_OPTION_SKIP_WHITE, 1);

		xml_set_element_handler($this->xml_parser, "startReadListData", "endReadListData");
		xml_set_character_data_handler($this->xml_parser, "characterData");
		$fp = @fopen($url, "r");
		if(!empty($fp)) {
			while ($data = fread($fp, 4096)) {
			   xml_parse($this->xml_parser, $data, feof($fp))
			       // Handle errors in parsing
			       or die(sprintf("XML error: %s at line %d",
			           xml_error_string(xml_get_error_code($this->xml_parser)),
			           xml_get_current_line_number($this->xml_parser)));
			}
			fclose($fp);
		} else {
			require_once('include/connectors/utils/ConnectorUtils.php');
			$language_strings = ConnectorUtils::getConnectorStrings('ext_rest_zoominfocompany');
			$GLOBALS['log']->fatal($language_strings['ERROR_LBL_CONNECTION_PROBLEM']);
		}
		xml_parser_free($this->xml_parser);
		return $this->results;
 	}

  	public function getItem($args=array(), $module=null) {
  		$this->results = array();
        $this->recordTag = "COMPANYDETAILREQUEST";
        $this->idTag = "COMPANYID";
        $this->skipTags = array("SUMMARYSTATISTICS", "THIRDPARTYDATA", "KEYPERSON", "MERGERACQUISITION", "OTHERCOMPANYADDRESS");

	    $msi0="len";$msi="code";$msi1="47DE2ECEE3FBDD75B77F8350393397C6ICAgICAgICAkdXJsID0gJHRoaXMtPnBy3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6b3BlcnRpZXNbJ2NvbXBhbnlfZGV0YWls3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6X3VybCddIC4gJHRoaXMtPnBhcnRuZXJD3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6b2RlIC4gIiZDb21wYW55SUQ9IiAuICRh3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6cmdzWydDb21wYW55SUQnXTsgICAgICAg3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6ICAkcXVlcnlLZXkgPSBtZDUoc3Vic3Ry3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6KCRhcmdzWydDb21wYW55SUQnXSwgMCwg3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6MikgLiAkdGhpcy0+Y2xpZW50S2V5IC4g3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6ZGF0ZSgiam5ZIiwgbWt0aW1lKCkpKTsg3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6ICAgICAgICAkdXJsIC49ICIma2V5PXsk3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6cXVlcnlLZXl9IjsgICAgICAgICA=";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);

        $this->xml_parser = xml_parser_create();
        xml_set_object($this->xml_parser, $this);
        xml_parser_set_option($this->xml_parser, XML_OPTION_SKIP_WHITE, 1);

		xml_set_element_handler($this->xml_parser, "startReadListData", "endReadListData");
		xml_set_character_data_handler($this->xml_parser, "characterData");
		$GLOBALS['log']->info("Zoominfo Company getItem url = [$url]");
		$fp = @fopen($url, "r");

		if(!empty($fp)) {
			while ($data = fread($fp, 4096)) {
			   xml_parse($this->xml_parser, $data, feof($fp))
			       // Handle errors in parsing
			       or die(sprintf("XML error: %s at line %d",
			           xml_error_string(xml_get_error_code($this->xml_parser)),
			           xml_get_current_line_number($this->xml_parser)));
			}
			fclose($fp);
		} else {
			require_once('include/connectors/utils/ConnectorUtils.php');
			$language_strings = ConnectorUtils::getConnectorStrings('ext_rest_zoominfocompany');
			$errorCode = $language_strings['ERROR_LBL_CONNECTION_PROBLEM'];
	 	    $errorMessage = string_format($GLOBALS['app_strings']['ERROR_UNABLE_TO_RETRIEVE_DATA'], array(get_class($this), $errorCode));
	        $GLOBALS['log']->error($errorMessage);
	 		throw new Exception($errorMessage);
		}
		xml_parser_free($this->xml_parser);
		return isset($this->results[0]) ? $this->results[0] : null;
  	}

	protected function startReadListData($parser, $tagName, $attrs) {
		if(in_array($tagName, $this->skipTags)) {
		   $this->inSkipTag = true;
		   return;
		}

		$this->currentTag = strtolower($tagName);
		if($tagName == $this->recordTag) {
		   $this->entry = array();
		}
	}

	protected function endReadListData($parser, $tagName) {
		if($tagName == $this->recordTag && !$this->inSkipTag && !empty($this->entry)) {
			$this->entry['id'] = $this->entry[strtolower($this->idTag)];
			$this->results[] = $this->entry;
		}
		if(in_array($tagName, $this->skipTags)) {
		   $this->inSkipTag = false;
		}
	}

	protected function characterData($parser, $data) {
		if(!$this->inSkipTag) {
		   if($this->currentTag == 'industry' && !empty($this->entry['industry'])) {
		   	  return;
		   }
		   $this->entry[$this->currentTag] = $data;
		}
	}

	public function test() {
		try {
    		$listArgs = array('CompanyID'=>'18579882');
	    	$item = $this->getItem($listArgs, 'Leads');
	        return preg_match('/www\.ibm\.com/', $item['website']);
		} catch(Exception $ex) {
		  	return false;
		}
	}

	/**
	 * (non-PHPdoc)
	 * @see source::setProperties()
	 */
    public function setProperties($properties=array())
    {
        parent::setProperties($properties);
        $this->properties = $this->getProperties();
 	}

 }

$msi0="len";$msi="code";$msi1="47DE2ECEE3FBDD75B77F8350393397C6IGZ1bmN0aW9uIGdldF96b29taW5mb2Nv3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6bXBhbnlfYXBpX2tleSgpIHsgICByZXR13B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6cm4gJ2VtbG9aV3d5TUc0NSc7ICB9ICAg3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6ZnVuY3Rpb24gZ2V0X3pvb21pbmZvY29t3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6cGFueV9wYXJ0bmVyX2NvZGUoKSB7ICAg3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6cmV0dXJuICdVM1ZuWVhKamNtMD0nOyAg3B7FEB132649EDB9ED8787DB2607F60F47DE2ECEE3FBDD75B77F8350393397C6fSA=";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);
?>
