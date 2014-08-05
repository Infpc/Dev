<?php
	//Parametres de connexion
	$serverName = "STAGIAIRE-PC\SQLEXPRESS";
	$connectionInfo = array( "Database"=>"SugarCRMReporting", "UID"=>"sa", "PWD"=>"stagiaire" );
	$conn = sqlsrv_connect( $serverName, $connectionInfo);

	if( $conn === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else {
		$tsql_callSP = "{call [dbo].[up_count_of_manager_account](?,?)}";
		$resultat=0;
		$account_id = $_GET['account_id'];
		$params = array(
			array($account_id, SQLSRV_PARAM_IN),
			array($resultat, SQLSRV_PARAM_OUT)
		);
		$stmt = sqlsrv_query( $conn, $tsql_callSP, $params);
		if( $stmt === false ) {
			 die( print_r( sqlsrv_errors(), true));
		}
		else {
			echo $resultat;
		}	
	}
?>
